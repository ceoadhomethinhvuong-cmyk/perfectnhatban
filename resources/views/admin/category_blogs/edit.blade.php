@extends('admin.dashboard')

@section('title', 'Sửa danh mục')

@section('content')
<div class="breadcrumbs admin-page-heading">
    <div class="breadcrumbs-inner">
        <div class="row m-0 align-items-center">
            <div class="col-sm-7">
                <div class="page-header float-left">
                    <div class="page-title">
                        <p class="admin-page-kicker">Danh mục bài viết</p>
                        <h1>Sửa danh mục</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                            <li><a href="{{ route('admin.category_blogs.index') }}">Danh mục</a></li>
                            <li class="active">Chỉnh sửa</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <form action="{{ route('admin.category_blogs.update', $category['id']) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Thông tin danh mục</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Tên danh mục</label>
                            <input id="name" type="text" name="name" class="form-control" value="{{ old('name', $category['name']) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input id="slug" type="text" name="slug" class="form-control" value="{{ old('slug', $category['slug']) }}">
                        </div>
                        <div class="form-group mb-0">
                            <label for="description">Mô tả ngắn</label>
                            <textarea id="description" name="description" class="form-control">{{ old('description', $category['description']) }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Hiển thị</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="status">Trạng thái</label>
                            <select id="status" name="status" class="form-control">
                                <option value="active" @selected(old('status', $category['status']) === 'active')>Đang hiển thị</option>
                                <option value="inactive" @selected(old('status', $category['status']) === 'inactive')>Tạm ẩn</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fa fa-save mr-1"></i> Cập nhật
                        </button>
                        <a href="{{ route('admin.category_blogs.index') }}" class="btn btn-light btn-block">Quay lại</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
