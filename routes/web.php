<?php

use Illuminate\Support\Facades\Route;

$perfectArticles = static function (): array {
    return [
        [
            'id' => 1,
            'slug' => 'routine-cham-soc-da-tu-ben-trong',
            'tieu_de' => 'Routine chăm sóc da từ bên trong cùng PERFECT',
            'tom_tat' => 'Gợi ý cách kết hợp viên uống và sản phẩm chăm sóc da để xây dựng routine bền vững.',
            'noi_dung' => '<p>Chăm sóc da hiệu quả cần kết hợp giữa sản phẩm bôi ngoài, dinh dưỡng và thói quen sinh hoạt. PERFECT tập trung vào hướng chăm sóc từ bên trong, giúp khách hàng dễ xây dựng routine phù hợp với nhu cầu thực tế.</p>',
            'danh_muc' => 'thong-tin-nganh',
            'ngay_dang' => '2026-06-01',
            'anh' => '/images/banner/banner2.webp',
        ],
        [
            'id' => 2,
            'slug' => 'chon-vien-uong-perfect-theo-nhu-cau',
            'tieu_de' => 'Cách chọn viên uống PERFECT theo nhu cầu',
            'tom_tat' => 'Phân nhóm nhu cầu chăm sóc sắc đẹp để chọn sản phẩm viên uống phù hợp hơn.',
            'noi_dung' => '<p>Mỗi người có mục tiêu chăm sóc khác nhau như hỗ trợ nội tiết, chăm sóc làn da hoặc bổ sung dưỡng chất. Việc chọn đúng nhóm sản phẩm giúp routine rõ ràng và dễ theo dõi hiệu quả hơn.</p>',
            'danh_muc' => 'san-pham',
            'ngay_dang' => '2026-06-05',
            'anh' => '/images/banner/perfect-viet-thao.webp',
        ],
        [
            'id' => 3,
            'slug' => 'serum-vitamin-c-va-routine-lam-sang-da',
            'tieu_de' => 'Serum Vitamin C và routine làm sáng da',
            'tom_tat' => 'Những lưu ý cơ bản khi đưa serum Vitamin C vào chu trình chăm sóc da.',
            'noi_dung' => '<p>Serum Vitamin C thường được dùng trong routine hỗ trợ làm sáng và cải thiện sắc da. Khi sử dụng, nên kết hợp chống nắng đầy đủ và theo dõi phản ứng của da để điều chỉnh tần suất phù hợp.</p>',
            'danh_muc' => 'kien-thuc-da',
            'ngay_dang' => '2026-06-10',
            'anh' => '/images/sanpham/vc30.webp',
        ],
    ];
};

Route::get('/', [App\Http\Controllers\Client\HomeController::class, 'index'])->name('home');
Route::get('/lieu-phap', [App\Http\Controllers\Client\LieuPhapController::class, 'index'])->name('lieu-phap');
Route::get('/thuong-hieu', [App\Http\Controllers\Client\ThuongHieuController::class, 'index'])->name('thuong-hieu');
Route::get('/tin-tuc', [App\Http\Controllers\Client\NewsController::class, 'index'])->name('tin-tuc');
Route::get('/tin-tuc/{slug}', [App\Http\Controllers\Client\NewsController::class, 'show'])->name('tin-tuc.show');

Route::get('/hop-tac', [App\Http\Controllers\Client\HopTacController::class, 'index'])->name('hop-tac');
Route::post('/contact', [App\Http\Controllers\Client\ContactController::class, 'submit'])->name('contact.submit');
Route::get('/san-pham', [App\Http\Controllers\Client\SanPhamController::class, 'index'])->name('sanpham');
Route::view('/chinh-sach-bao-mat-thong-tin', 'client.chinh-sach-bao-mat')->name('chinh-sach-bao-mat');
Route::redirect('/index.html', '/', 301);

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryBlogController;
use App\Http\Controllers\Admin\BlogController;

Route::match(['get', 'post'], '/wp-admin/admin-ajax.php', function () {
    return response()->noContent();
});

// ── Admin Routes ─────────────────────────────────────────────
Route::prefix('admin')->name('admin.')->group(function () {

    // Auth (không cần đăng nhập)
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Cần đăng nhập
    Route::middleware('auth')->group(function () {
        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::redirect('/', '/admin/dashboard');

        // Danh mục bài viết
        Route::resource('category_blogs', CategoryBlogController::class)->names('category_blogs');

        // Bài viết (tin tức)
        Route::post('/blogs/upload-image', [BlogController::class, 'uploadImage'])->name('blogs.upload_image');
        Route::resource('blogs', BlogController::class)->names('blogs');
    });
});

Route::get('/sitemap.xml', function () use ($perfectArticles) {
    $baseUrl = rtrim(config('app.url') ?: 'https://perfectnhatban.com', '/');
    if (preg_match('/localhost|127\.0\.0\.1/i', $baseUrl)) {
        $baseUrl = 'https://perfectnhatban.com';
    }

    $paths = [
        '/',
        '/san-pham',
        '/vien-uong',
        '/serum',
        '/duong-toc',
        '/lieu-phap',
        '/thuong-hieu',
        '/tin-tuc',
        '/hop-tac',
        '/chinh-sach-bao-mat-thong-tin',
        '/chi-tiet-san-pham/perfect-lady',
        '/chi-tiet-san-pham/perfect-beauty-white',
        '/chi-tiet-san-pham/nmn',
        '/chi-tiet-san-pham/p9',
        '/chi-tiet-san-pham/vc30-serum-vitamin-c',
        '/chi-tiet-san-pham/nattokinase',
        '/chi-tiet-san-pham/spualene',
        '/chi-tiet-san-pham/vien_nghe',
    ];

    foreach (app(App\Http\Controllers\Client\NewsController::class)->sitemapArticles() as $article) {
        $paths[] = '/tin-tuc/' . $article['slug'];
    }

    $urls = collect($paths)->unique()->map(function ($path) use ($baseUrl) {
        return '<url><loc>' . e($baseUrl . ($path === '/' ? '' : $path)) . '</loc><changefreq>weekly</changefreq><priority>' . ($path === '/' ? '1.0' : '0.8') . '</priority></url>';
    })->implode('');

    return response('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . $urls . '</urlset>', 200)
        ->header('Content-Type', 'application/xml');
})->name('sitemap');

$productCategories = [
    'vien-uong',
    'serum',
    'duong-toc',
];

$productCategoryViews = [
    'vien-uong' => 'client.muc-san-pham.vien-uong',
    'serum' => 'client.muc-san-pham.serum',
    'duong-toc' => 'client.muc-san-pham.duong-toc',
];

foreach ($productCategories as $category) {
    Route::view("/{$category}", $productCategoryViews[$category])->name($category);
    Route::view("/muc-san-pham/{$category}", $productCategoryViews[$category])->name("muc-san-pham.{$category}");
    Route::redirect("/mục-sản-phẩm/{$category}", "/muc-san-pham/{$category}", 301);
}

$legacyCategoryLinks = [
  'vien-uong',
  'serum',
  'duong-toc',
];

Route::redirect('/serum/index.html', '/serum', 301);

foreach ($legacyCategoryLinks as $category) {
    Route::redirect("/{$category}/index.html", "/san-pham?category={$category}", 301);
}

$legacyProductLinks = [
    'dau-tay-trang-gsc',
    'kem-cham-mun-gsc',
    'kem-chong-nang-pho-rong-mela-gsc',
    'kem-chong-nang-vat-ly-gsc',
    'kem-duong-sang-mela-gsc',
    'kem-massage-da-tang-gsc',
    'kem-mat-gsc',
    'kem-phuc-hoi-thai-doc-da-gsc',
    'kem-tay-da-chet-gsc',
    'kem-uc-che-nam-gsc',
    'mat-na-bot-ca-tam-gsc',
    'mat-na-kiem-soat-ba-nhon-gsc',
    'mat-na-nang-co-cang-bong-gsc',
    'mat-na-phuc-hoi-tai-tao-gsc',
    'sua-rua-mat-mela-gsc',
    'sua-rua-mat-ph-5-5-gsc',
    'tinh-chat-ampoule-chong-lao-hoa-dr-leemee',
    'tinh-chat-ampoule-chong-lao-hoa-gsc',
    'tinh-chat-ampoule-mun-cao-cap-gsc',
    'tinh-chat-ampoule-trang-sang-cao-cap-gsc',
    'toner-can-bang-da-gsc',
];

foreach ($legacyProductLinks as $slug) {
    Route::redirect("/{$slug}/index.html", "/chi-tiet-san-pham/{$slug}", 301);
}

$cleanProductSlugRedirects = [
    'perfectlady' => 'perfect-lady',
    'perfectbeatywhite' => 'perfect-beauty-white',
    'NMN' => 'nmn',
    'P9' => 'p9',
    'P5' => 'p5',
    'P6' => 'p6',
    'P7' => 'p7',
    'vc30' => 'vc30-serum-vitamin-c',
];

foreach ($cleanProductSlugRedirects as $from => $to) {
    Route::redirect("/chi-tiet-san-pham/{$from}", "/chi-tiet-san-pham/{$to}", 301);
}

Route::get('/chi-tiet-san-pham/{slug}', [App\Http\Controllers\Client\ProductDetailController::class, 'show'])
    ->name('chi-tiet-san-pham.show');
