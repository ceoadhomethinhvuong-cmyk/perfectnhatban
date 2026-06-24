<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CategoryBlogController extends Controller
{
    public function index()
    {
        $categories = CategoryBlog::withCount('blogs')
            ->orderBy('sort_order')
            ->latest()
            ->get()
            ->map(fn (CategoryBlog $category) => $this->toViewData($category))
            ->all();

        return view('admin.category_blogs.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category_blogs.create');
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data['slug'] = $this->uniqueSlug($data['slug'] ?: $data['name']);

        CategoryBlog::create($data);

        return redirect()
            ->route('admin.category_blogs.index')
            ->with('success', 'Đã lưu danh mục bài viết.');
    }

    public function show(CategoryBlog $category_blog)
    {
        return view('admin.category_blogs.show', [
            'category' => $this->toViewData($category_blog->loadCount('blogs')),
        ]);
    }

    public function edit(CategoryBlog $category_blog)
    {
        return view('admin.category_blogs.edit', [
            'category' => $this->toViewData($category_blog),
        ]);
    }

    public function update(Request $request, CategoryBlog $category_blog)
    {
        $data = $this->validated($request, $category_blog->id);
        $data['slug'] = $this->uniqueSlug($data['slug'] ?: $data['name'], $category_blog->id);

        $category_blog->update($data);

        return redirect()
            ->route('admin.category_blogs.index')
            ->with('success', 'Đã cập nhật danh mục bài viết.');
    }

    public function destroy(CategoryBlog $category_blog)
    {
        $category_blog->delete();

        return redirect()
            ->route('admin.category_blogs.index')
            ->with('success', 'Đã xóa danh mục bài viết.');
    }

    private function validated(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:190'],
            'slug' => [
                'nullable',
                'string',
                'max:220',
                Rule::unique('categories', 'slug')->ignore($ignoreId),
            ],
            'description' => ['nullable', 'string'],
            'status' => ['required', 'in:active,inactive'],
        ]);
    }

    private function uniqueSlug(string $value, ?int $ignoreId = null): string
    {
        $base = Str::slug($value) ?: 'danh-muc';
        $slug = $base;
        $index = 2;

        while (CategoryBlog::where('slug', $slug)
            ->when($ignoreId, fn ($query) => $query->whereKeyNot($ignoreId))
            ->exists()) {
            $slug = "{$base}-{$index}";
            $index++;
        }

        return $slug;
    }

    private function toViewData(CategoryBlog $category): array
    {
        return [
            'id' => $category->id,
            'name' => $category->name,
            'slug' => $category->slug,
            'description' => $category->description,
            'posts_count' => $category->blogs_count ?? $category->blogs()->count(),
            'status' => $category->status,
            'updated_at' => optional($category->updated_at)->format('d/m/Y'),
        ];
    }
}
