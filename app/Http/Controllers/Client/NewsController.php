<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Throwable;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $articles = $this->articles();
        $categories = $this->categories($articles);
        $activeCategory = $request->query('danh_muc');
        $search = trim((string) $request->query('s', ''));

        if ($activeCategory) {
            $articles = collect($articles)
                ->where('danh_muc', $activeCategory)
                ->values()
                ->all();
        }

        if ($search !== '') {
            $keyword = Str::lower($search);
            $articles = collect($articles)
                ->filter(function (array $article) use ($keyword) {
                    return Str::contains(Str::lower($article['tieu_de']), $keyword)
                        || Str::contains(Str::lower($article['tom_tat'] ?? ''), $keyword);
                })
                ->values()
                ->all();
        }

        return view('client.tin-tuc', compact('articles', 'categories', 'activeCategory', 'search'));
    }

    public function show(string $slug)
    {
        $articles = $this->articles();
        $article = collect($articles)->firstWhere('slug', $slug);

        abort_unless($article, 404);

        return view('client.chi-tiet-tin-tuc', [
            'article' => $article,
            'related' => collect($articles)
                ->where('slug', '!=', $slug)
                ->where('danh_muc', $article['danh_muc'])
                ->take(3)
                ->values()
                ->all(),
        ]);
    }

    public function sitemapArticles(): array
    {
        return $this->articles();
    }

    private function articles(): array
    {
        $databaseArticles = $this->databaseArticles();
        $fallbackArticles = $this->fallbackArticles();
        $existingSlugs = collect($databaseArticles)->pluck('slug')->all();

        return collect($databaseArticles)
            ->merge(collect($fallbackArticles)->reject(fn ($article) => in_array($article['slug'], $existingSlugs, true)))
            ->sortByDesc('ngay_dang')
            ->values()
            ->all();
    }

    private function databaseArticles(): array
    {
        try {
            if (! Schema::hasTable('posts') || ! Schema::hasTable('categories')) {
                return [];
            }

            return Blog::with('category')
                ->where('status', 'published')
                ->latest('published_at')
                ->latest()
                ->get()
                ->map(fn (Blog $blog) => $this->mapBlog($blog))
                ->all();
        } catch (Throwable) {
            return [];
        }
    }

    private function categories(array $articles): array
    {
        $databaseCategories = [];

        try {
            if (Schema::hasTable('categories')) {
                $databaseCategories = CategoryBlog::withCount([
                    'blogs' => fn ($query) => $query->where('status', 'published'),
                ])
                    ->where('status', 'active')
                    ->orderBy('name')
                    ->get()
                    ->map(fn (CategoryBlog $category) => [
                        'name' => $category->name,
                        'slug' => $category->slug,
                        'posts_count' => $category->blogs_count,
                    ])
                    ->all();
            }
        } catch (Throwable) {
            $databaseCategories = [];
        }

        $fallbackCategories = collect($articles)
            ->groupBy('danh_muc')
            ->map(fn ($items, $slug) => [
                'name' => $items->first()['danh_muc_ten'] ?? Str::headline(str_replace('-', ' ', $slug)),
                'slug' => $slug,
                'posts_count' => $items->count(),
            ])
            ->values()
            ->all();

        return collect($fallbackCategories)
            ->merge($databaseCategories)
            ->unique('slug')
            ->values()
            ->all();
    }

    private function mapBlog(Blog $blog): array
    {
        $category = $blog->category;
        $thumbnail = $blog->thumbnail ? Storage::url($blog->thumbnail) : '/images/banner/banner2.webp';
        $date = $blog->published_at ?: $blog->created_at;

        return [
            'id' => 'db-' . $blog->id,
            'slug' => $blog->slug,
            'tieu_de' => $blog->title,
            'tom_tat' => $blog->excerpt,
            'noi_dung' => $this->contentWithHeadingIds($blog->content, $blog->table_of_contents ?: []),
            'danh_muc' => $category->slug ?? 'tin-tuc',
            'danh_muc_ten' => $category->name ?? 'Tin tức',
            'ngay_dang' => optional($date)->format('Y-m-d') ?: now()->format('Y-m-d'),
            'anh' => $thumbnail,
            'meta_title' => $blog->seo_title,
            'meta_description' => $blog->seo_description,
            'focus_keyword' => $blog->focus_keyword,
            'canonical_url' => $blog->canonical_url,
            'toc_items' => $blog->table_of_contents ?: [],
            'faq_items' => $blog->faq_items ?: [],
            'faq_title' => $blog->faq_title ?: 'Câu hỏi thường gặp',
            'faq_color' => $blog->faq_color ?: '#258fe5',
        ];
    }

    private function contentWithHeadingIds(?string $content, array $tocItems): string
    {
        if (! $content) {
            return '';
        }

        $index = 0;

        return preg_replace_callback('/<h([2-4])([^>]*)>(.*?)<\/h\1>/is', function (array $matches) use (&$index, $tocItems) {
            if (Str::contains($matches[2], 'id=')) {
                return $matches[0];
            }

            $title = trim(strip_tags($matches[3]));
            $anchor = $tocItems[$index]['anchor'] ?? Str::slug($title);
            $index++;

            return '<h' . $matches[1] . $matches[2] . ' id="' . e($anchor) . '">' . $matches[3] . '</h' . $matches[1] . '>';
        }, $content) ?? $content;
    }

    private function fallbackArticles(): array
    {
        return [
            [
                'id' => 1,
                'slug' => 'routine-cham-soc-da-tu-ben-trong',
                'tieu_de' => 'Routine chăm sóc da từ bên trong cùng PERFECT',
                'tom_tat' => 'Gợi ý cách kết hợp viên uống và sản phẩm chăm sóc da để xây dựng routine bền vững.',
                'noi_dung' => '<p>Chăm sóc da hiệu quả cần kết hợp giữa sản phẩm bôi ngoài, dinh dưỡng và thói quen sinh hoạt. PERFECT tập trung vào hướng chăm sóc từ bên trong, giúp khách hàng dễ xây dựng routine phù hợp với nhu cầu thực tế.</p>',
                'danh_muc' => 'thong-tin-nganh',
                'danh_muc_ten' => 'Thông tin ngành',
                'ngay_dang' => '2026-06-01',
                'anh' => '/images/banner/banner2.webp',
                'toc_items' => [],
            ],
            [
                'id' => 2,
                'slug' => 'chon-vien-uong-perfect-theo-nhu-cau',
                'tieu_de' => 'Cách chọn viên uống PERFECT theo nhu cầu',
                'tom_tat' => 'Phân nhóm nhu cầu chăm sóc sắc đẹp để chọn sản phẩm viên uống phù hợp hơn.',
                'noi_dung' => '<p>Mỗi người có mục tiêu chăm sóc khác nhau như hỗ trợ nội tiết, chăm sóc làn da hoặc bổ sung dưỡng chất. Việc chọn đúng nhóm sản phẩm giúp routine rõ ràng và dễ theo dõi hiệu quả hơn.</p>',
                'danh_muc' => 'san-pham-perfect',
                'danh_muc_ten' => 'Sản phẩm PERFECT',
                'ngay_dang' => '2026-06-05',
                'anh' => '/images/banner/perfect-viet-thao.webp',
                'toc_items' => [],
            ],
            [
                'id' => 3,
                'slug' => 'serum-vitamin-c-va-routine-lam-sang-da',
                'tieu_de' => 'Serum Vitamin C và routine làm sáng da',
                'tom_tat' => 'Những lưu ý cơ bản khi đưa serum Vitamin C vào chu trình chăm sóc da.',
                'noi_dung' => '<p>Serum Vitamin C thường được dùng trong routine hỗ trợ làm sáng và cải thiện sắc da. Khi sử dụng, nên kết hợp chống nắng đầy đủ và theo dõi phản ứng của da để điều chỉnh tần suất phù hợp.</p>',
                'danh_muc' => 'kien-thuc-da',
                'danh_muc_ten' => 'Kiến thức da',
                'ngay_dang' => '2026-06-10',
                'anh' => '/images/sanpham/vc30.webp',
                'toc_items' => [],
            ],
        ];
    }
}
