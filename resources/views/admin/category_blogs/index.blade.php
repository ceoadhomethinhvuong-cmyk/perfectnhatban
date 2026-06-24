@extends('admin.dashboard')

@section('title', 'Danh mục bài viết')

@section('content')
<div class="breadcrumbs admin-page-heading">
    <div class="breadcrumbs-inner">
        <div class="row m-0 align-items-center">
            <div class="col-sm-7">
                <div class="page-header float-left">
                    <div class="page-title">
                        <p class="admin-page-kicker">Nội dung website</p>
                        <h1>Danh mục bài viết</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                            <li class="active">Danh mục bài viết</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="card">
        <div class="card-header admin-table-toolbar">
            <strong class="card-title">Danh sách danh mục</strong>
            <a class="btn btn-primary" href="{{ route('admin.category_blogs.create') }}">
                <i class="fa fa-plus mr-1"></i> Thêm danh mục
            </a>
        </div>
        <div class="card-body p-0">
            @if (empty($categories))
                <div class="admin-empty-state">
                    <i class="fa fa-folder-open"></i>
                    <strong>Chưa có danh mục nào</strong>
                    <span>Tạo danh mục đầu tiên để bắt đầu quản lý bài viết.</span>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="width: 44px;">
                                    <input type="checkbox" class="js-check-all" data-target=".category-check">
                                </th>
                                <th>Tên danh mục</th>
                                <th>Slug</th>
                                <th class="text-center">Bài viết</th>
                                <th>Trạng thái</th>
                                <th>Cập nhật</th>
                                <th class="text-right">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td><input type="checkbox" class="category-check"></td>
                                    <td>
                                        <strong>{{ $category['name'] }}</strong>
                                        <div class="text-muted small">{{ $category['description'] }}</div>
                                    </td>
                                    <td>{{ $category['slug'] }}</td>
                                    <td class="text-center">{{ $category['posts_count'] }}</td>
                                    <td>
                                        <span class="admin-status {{ $category['status'] === 'active' ? 'active' : 'draft' }}">
                                            {{ $category['status'] === 'active' ? 'Đang hiển thị' : 'Tạm ẩn' }}
                                        </span>
                                    </td>
                                    <td>{{ $category['updated_at'] }}</td>
                                    <td>
                                        <div class="admin-table-actions">
                                            <a class="btn btn-outline-primary" href="{{ route('admin.category_blogs.show', $category['id']) }}" data-toggle="tooltip" title="Xem">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a class="btn btn-outline-warning" href="{{ route('admin.category_blogs.edit', $category['id']) }}" data-toggle="tooltip" title="Sửa">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form action="{{ route('admin.category_blogs.destroy', $category['id']) }}" method="post" onsubmit="return confirm('Xóa danh mục này?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger" data-toggle="tooltip" title="Xóa">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
