@extends('admin.dashboard')

@section('title', 'Chi tiết danh mục')

@section('content')
<div class="breadcrumbs admin-page-heading">
    <div class="breadcrumbs-inner">
        <div class="row m-0 align-items-center">
            <div class="col-sm-7">
                <div class="page-header float-left">
                    <div class="page-title">
                        <p class="admin-page-kicker">Danh mục bài viết</p>
                        <h1>Chi tiết danh mục</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                            <li><a href="{{ route('admin.category_blogs.index') }}">Danh mục</a></li>
                            <li class="active">Chi tiết</li>
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
            <strong class="card-title">{{ $category['name'] }}</strong>
            <a href="{{ route('admin.category_blogs.edit', $category['id']) }}" class="btn btn-warning">
                <i class="fa fa-pencil mr-1"></i> Sửa
            </a>
        </div>
        <div class="card-body">
            <dl class="row admin-detail-list">
                <dt class="col-sm-3">Slug</dt>
                <dd class="col-sm-9">{{ $category['slug'] }}</dd>

                <dt class="col-sm-3">Mô tả</dt>
                <dd class="col-sm-9">{{ $category['description'] }}</dd>

                <dt class="col-sm-3">Số bài viết</dt>
                <dd class="col-sm-9">{{ $category['posts_count'] }}</dd>

                <dt class="col-sm-3">Trạng thái</dt>
                <dd class="col-sm-9">
                    <span class="admin-status {{ $category['status'] === 'active' ? 'active' : 'draft' }}">
                        {{ $category['status'] === 'active' ? 'Đang hiển thị' : 'Tạm ẩn' }}
                    </span>
                </dd>

                <dt class="col-sm-3">Cập nhật</dt>
                <dd class="col-sm-9">{{ $category['updated_at'] }}</dd>
            </dl>
            <a href="{{ route('admin.category_blogs.index') }}" class="btn btn-light">Quay lại danh sách</a>
        </div>
    </div>
</div>
@endsection
