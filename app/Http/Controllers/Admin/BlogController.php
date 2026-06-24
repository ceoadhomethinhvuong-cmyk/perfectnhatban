<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CategoryBlog;
use DOMDocument;
use DOMElement;
use DOMXPath;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with(['category', 'author'])
            ->latest()
            ->get()
            ->map(fn (Blog $blog) => $this->toViewData($blog))
            ->all();

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create', [
            'categories' => $this->categoriesForSelect(),
        ]);
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'file' => ['required', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:8192'],
        ]);

        $path = $request->file('file')->store('editor/' . now()->format('Y/m'), 'public');

        return response()->json([
            'location' => Storage::url($path),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $this->validated($request);
        $data = $this->normalizeData($validated, $request);
        $data['slug'] = $this->uniqueSlug($validated['slug'] ?: $validated['title']);
        $data['author_id'] = auth()->id();

        if ($data['status'] === 'published') {
            $data['published_at'] = now();
        }

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('posts', 'public');
        }

        Blog::create($data);

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'Đã lưu bài viết. Bài sẽ hiện ngoài trang Tin tức khi trạng thái là published.');
    }

    public function show(Blog $blog)
    {
        return view('admin.blogs.show', [
            'blog' => $this->toViewData($blog->load(['category', 'author'])),
        ]);
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', [
            'blog' => $this->toViewData($blog->load(['category', 'author'])),
            'categories' => $this->categoriesForSelect(),
        ]);
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $this->validated($request, $blog->id);
        $data = $this->normalizeData($validated, $request);
        $data['slug'] = $this->uniqueSlug($validated['slug'] ?: $validated['title'], $blog->id);

        if ($data['status'] === 'published' && ! $blog->published_at) {
            $data['published_at'] = now();
        }

        if ($request->hasFile('thumbnail')) {
            if ($blog->thumbnail) {
                Storage::disk('public')->delete($blog->thumbnail);
            }

            $data['thumbnail'] = $request->file('thumbnail')->store('posts', 'public');
        }

        $blog->update($data);

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'Đã cập nhật bài viết.');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->thumbnail) {
            Storage::disk('public')->delete($blog->thumbnail);
        }

        $blog->delete();

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'Đã xóa bài viết.');
    }

    private function validated(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => [
                'nullable',
                'string',
                'max:255',
                Rule::unique('posts', 'slug')->ignore($ignoreId),
            ],
            'category_id' => ['required', 'exists:categories,id'],
            'summary' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'status' => ['required', 'in:draft,pending,published,scheduled,archived'],
            'thumbnail' => ['nullable', 'image', 'max:4096'],
            'thumbnail_alt' => ['nullable', 'string', 'max:255'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:320'],
            'focus_keyword' => ['nullable', 'string', 'max:190'],
            'canonical_url' => ['nullable', 'url', 'max:500'],
            'toc_auto' => ['nullable', 'boolean'],
            'toc_items' => ['nullable', 'array'],
            'toc_items.*.title' => ['nullable', 'string', 'max:255'],
            'toc_items.*.anchor' => ['nullable', 'string', 'max:255'],
            'toc_items.*.level' => ['nullable', 'integer', 'in:2,3,4'],
            'faq_title' => ['nullable', 'string', 'max:255'],
            'faq_color' => ['nullable', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'faq_items' => ['nullable', 'array'],
            'faq_items.*.question' => ['nullable', 'string', 'max:255'],
            'faq_items.*.answer' => ['nullable', 'string'],
        ]);
    }

    private function normalizeData(array $data, Request $request): array
    {
        $contentAndToc = $this->contentAndTocFromHeadings(
            $data['content'] ?? '',
            $request->boolean('toc_auto', true),
            $data['toc_items'] ?? []
        );
        $content = $contentAndToc['content'];
        $plainText = trim(strip_tags($content));
        $wordCount = str_word_count($plainText);

        return [
            'title' => $data['title'],
            'slug' => $data['slug'],
            'excerpt' => $data['summary'] ?? null,
            'content' => $content,
            'table_of_contents' => $contentAndToc['toc_items'],
            'toc_auto' => $request->boolean('toc_auto', true),
            'faq_items' => $this->cleanFaqItems($data['faq_items'] ?? []),
            'faq_title' => ($data['faq_title'] ?? null) ?: 'Câu hỏi thường gặp',
            'faq_color' => ($data['faq_color'] ?? null) ?: '#258fe5',
            'category_id' => $data['category_id'],
            'status' => $data['status'],
            'thumbnail_alt' => $data['thumbnail_alt'] ?? null,
            'seo_title' => $data['meta_title'] ?? null,
            'seo_description' => $data['meta_description'] ?? null,
            'focus_keyword' => $data['focus_keyword'] ?? null,
            'canonical_url' => $data['canonical_url'] ?? null,
            'robots' => $request->boolean('allow_index', true) ? 'index,follow' : 'noindex,nofollow',
            'schema_type' => 'Article',
            'allow_index' => $request->boolean('allow_index', true),
            'word_count' => $wordCount,
            'reading_time' => max(1, (int) ceil(max(1, $wordCount) / 220)),
        ];
    }

    private function categoriesForSelect(): array
    {
        return CategoryBlog::where('status', 'active')
            ->orderBy('name')
            ->get()
            ->map(fn (CategoryBlog $category) => [
                'id' => $category->id,
                'name' => $category->name,
            ])
            ->all();
    }

    private function uniqueSlug(string $value, ?int $ignoreId = null): string
    {
        $base = Str::slug($value) ?: 'bai-viet';
        $slug = $base;
        $index = 2;

        while (Blog::where('slug', $slug)
            ->when($ignoreId, fn ($query) => $query->whereKeyNot($ignoreId))
            ->exists()) {
            $slug = "{$base}-{$index}";
            $index++;
        }

        return $slug;
    }

    private function cleanTocItems(array $items): array
    {
        return collect($items)
            ->filter(fn ($item) => ! empty($item['title']))
            ->map(fn ($item) => [
                'title' => trim($item['title']),
                'anchor' => Str::slug($item['anchor'] ?: $item['title']),
                'level' => (int) ($item['level'] ?? 2),
            ])
            ->values()
            ->all();
    }

    private function contentAndTocFromHeadings(string $content, bool $autoToc, array $manualItems): array
    {
        $manualToc = $this->cleanTocItems($manualItems);

        if (trim($content) === '') {
            return [
                'content' => $content,
                'toc_items' => $autoToc ? [] : $manualToc,
            ];
        }

        $dom = new DOMDocument('1.0', 'UTF-8');
        $previousUseErrors = libxml_use_internal_errors(true);
        $loaded = $dom->loadHTML(
            '<?xml encoding="UTF-8"><!DOCTYPE html><html><body><div id="__post_content_root__">' . $content . '</div></body></html>'
        );
        libxml_clear_errors();
        libxml_use_internal_errors($previousUseErrors);

        $root = $loaded ? $dom->getElementById('__post_content_root__') : null;

        if (! $root instanceof DOMElement) {
            return [
                'content' => $content,
                'toc_items' => $autoToc ? $this->cleanTocItems($manualItems) : $manualToc,
            ];
        }

        $xpath = new DOMXPath($dom);
        $headings = $xpath->query('.//*[self::h2 or self::h3 or self::h4]', $root);
        $usedAnchors = [];
        $autoItems = [];
        $manualIndex = 0;

        foreach ($headings ?: [] as $heading) {
            if (! $heading instanceof DOMElement) {
                continue;
            }

            $title = trim(preg_replace('/\s+/u', ' ', $heading->textContent) ?? '');

            if ($title === '') {
                continue;
            }

            $existingId = trim($heading->getAttribute('id'));
            $manualAnchor = $manualToc[$manualIndex]['anchor'] ?? null;
            $anchor = $this->uniqueTocAnchor($existingId ?: (! $autoToc && $manualAnchor ? $manualAnchor : $title), $usedAnchors);

            $heading->setAttribute('id', $anchor);

            if ($autoToc) {
                $autoItems[] = [
                    'title' => $title,
                    'anchor' => $anchor,
                    'level' => (int) substr(strtolower($heading->tagName), 1),
                ];
            } elseif (isset($manualToc[$manualIndex])) {
                $manualToc[$manualIndex]['anchor'] = $anchor;
            }

            $manualIndex++;
        }

        return [
            'content' => $this->domInnerHtml($root),
            'toc_items' => $autoToc ? $autoItems : $manualToc,
        ];
    }

    private function uniqueTocAnchor(string $value, array &$usedAnchors): string
    {
        $base = Str::slug($value) ?: 'section';
        $anchor = $base;
        $index = 2;

        while (in_array($anchor, $usedAnchors, true)) {
            $anchor = "{$base}-{$index}";
            $index++;
        }

        $usedAnchors[] = $anchor;

        return $anchor;
    }

    private function domInnerHtml(DOMElement $element): string
    {
        $html = '';

        foreach ($element->childNodes as $childNode) {
            $html .= $element->ownerDocument?->saveHTML($childNode) ?: '';
        }

        return $html;
    }

    private function cleanFaqItems(array $items): array
    {
        return collect($items)
            ->filter(fn ($item) => ! empty($item['question']) && ! empty($item['answer']))
            ->map(fn ($item) => [
                'question' => trim($item['question']),
                'answer' => trim($item['answer']),
            ])
            ->values()
            ->all();
    }

    private function toViewData(Blog $blog): array
    {
        return [
            'id' => $blog->id,
            'title' => $blog->title,
            'slug' => $blog->slug,
            'category_id' => $blog->category_id,
            'category' => $blog->category->name ?? 'Chưa phân loại',
            'summary' => $blog->excerpt,
            'content' => $blog->content,
            'status' => $blog->status,
            'thumbnail' => $blog->thumbnail,
            'thumbnail_url' => $blog->thumbnail ? Storage::url($blog->thumbnail) : null,
            'thumbnail_alt' => $blog->thumbnail_alt,
            'meta_title' => $blog->seo_title,
            'meta_description' => $blog->seo_description,
            'focus_keyword' => $blog->focus_keyword,
            'canonical_url' => $blog->canonical_url,
            'toc_auto' => $blog->toc_auto ?? true,
            'toc_items' => $blog->table_of_contents ?: [],
            'faq_items' => $blog->faq_items ?: [],
            'faq_title' => $blog->faq_title ?: 'Câu hỏi thường gặp',
            'faq_color' => $blog->faq_color ?: '#258fe5',
            'published_at' => optional($blog->published_at ?? $blog->created_at)->format('d/m/Y'),
            'author' => $blog->author->name ?? 'Admin',
        ];
    }
}
