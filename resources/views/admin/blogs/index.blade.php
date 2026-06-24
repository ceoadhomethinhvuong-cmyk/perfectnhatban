@extends('admin.dashboard')

@section('title', 'Bài viết')

@section('content')
<div class="breadcrumbs admin-page-heading">
    <div class="breadcrumbs-inner">
        <div class="row m-0 align-items-center">
            <div class="col-sm-7">
                <div class="page-header float-left">
                    <div class="page-title">
                        <p class="admin-page-kicker">Nội dung website</p>
                        <h1>Bài viết</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                            <li class="active">Bài viết</li>
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
            <strong class="card-title">Danh sách bài viết</strong>
            <a class="btn btn-primary" href="{{ route('admin.blogs.create') }}">
                <i class="fa fa-plus mr-1"></i> Thêm bài viết
            </a>
        </div>
        <div class="card-body p-0">
            @if (empty($blogs))
                <div class="admin-empty-state">
                    <i class="fa fa-newspaper-o"></i>
                    <strong>Chưa có bài viết nào</strong>
                    <span>Tạo bài viết đầu tiên để hiển thị trên website.</span>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="width: 44px;">
                                    <input type="checkbox" class="js-check-all" data-target=".blog-check">
                                </th>
                                <th>Tiêu đề</th>
                                <th>Danh mục</th>
                                <th>Tác giả</th>
                                <th>Ngày đăng</th>
                                <th>Trạng thái</th>
                                <th class="text-right">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <td><input type="checkbox" class="blog-check"></td>
                                    <td>
                                        <strong>{{ $blog['title'] }}</strong>
                                        <div class="text-muted small">{{ $blog['summary'] }}</div>
                                        <div class="text-muted small">ID #{{ $blog['id'] }} · /tin-tuc/{{ $blog['slug'] }}</div>
                                    </td>
                                    <td>{{ $blog['category'] }}</td>
                                    <td>{{ $blog['author'] }}</td>
                                    <td>{{ $blog['published_at'] }}</td>
                                    <td>
                                        <span class="admin-status {{ $blog['status'] === 'published' ? 'active' : 'draft' }}">
                                            {{ $blog['status'] === 'published' ? 'Đang hiển thị' : 'Bản nháp' }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="admin-table-actions">
                                            <a class="btn btn-outline-primary" href="{{ route('admin.blogs.show', $blog['id']) }}" data-toggle="tooltip" title="Xem">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a class="btn btn-outline-warning" href="{{ route('admin.blogs.edit', $blog['id']) }}" data-toggle="tooltip" title="Sửa">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-outline-info" href="{{ route('tin-tuc.show', $blog['slug']) }}" target="_blank" data-toggle="tooltip" title="Xem ngoài website">
                                                <i class="fa fa-external-link"></i>
                                            </a>
                                            <form action="{{ route('admin.blogs.destroy', $blog['id']) }}" method="post" onsubmit="return confirm('Xóa bài viết này?')">
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
