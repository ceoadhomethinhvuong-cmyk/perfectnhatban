@extends('admin.dashboard')

@section('title', 'Chi tiết bài viết')

@section('content')
<div class="breadcrumbs admin-page-heading">
    <div class="breadcrumbs-inner">
        <div class="row m-0 align-items-center">
            <div class="col-sm-7">
                <div class="page-header float-left">
                    <div class="page-title">
                        <p class="admin-page-kicker">Bài viết chuẩn SEO</p>
                        <h1>Chi tiết bài viết</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                            <li><a href="{{ route('admin.blogs.index') }}">Bài viết</a></li>
                            <li class="active">Chi tiết</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header admin-table-toolbar">
                    <strong class="card-title">{{ $blog['title'] }}</strong>
                    <a href="{{ route('admin.blogs.edit', $blog['id']) }}" class="btn btn-warning">
                        <i class="fa fa-pencil mr-1"></i> Sửa
                    </a>
                </div>
                <div class="card-body">
                    <dl class="row admin-detail-list">
                        <dt class="col-sm-3">Slug</dt>
                        <dd class="col-sm-9">{{ $blog['slug'] }}</dd>

                        <dt class="col-sm-3">Danh mục</dt>
                        <dd class="col-sm-9">{{ $blog['category'] }}</dd>

                        <dt class="col-sm-3">Tóm tắt</dt>
                        <dd class="col-sm-9">{{ $blog['summary'] }}</dd>

                        <dt class="col-sm-3">Nội dung</dt>
                        <dd class="col-sm-9">
                            <div class="ck-content admin-post-preview">
                                {!! $blog['content'] !!}
                            </div>
                        </dd>

                        <dt class="col-sm-3">Tác giả</dt>
                        <dd class="col-sm-9">{{ $blog['author'] }}</dd>

                        <dt class="col-sm-3">Ngày đăng</dt>
                        <dd class="col-sm-9">{{ $blog['published_at'] }}</dd>

                        <dt class="col-sm-3">Trạng thái</dt>
                        <dd class="col-sm-9">
                            <span class="admin-status {{ $blog['status'] === 'published' ? 'active' : 'draft' }}">
                                {{ $blog['status'] === 'published' ? 'Đang hiển thị' : 'Bản nháp' }}
                            </span>
                        </dd>
                    </dl>
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-light">Quay lại danh sách</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">SEO preview</strong>
                </div>
                <div class="card-body">
                    <div class="seo-preview mb-3">
                        <span class="seo-preview-url">{{ $blog['canonical_url'] }}</span>
                        <strong>{{ $blog['meta_title'] }}</strong>
                        <p>{{ $blog['meta_description'] }}</p>
                    </div>
                    <dl class="admin-mini-list">
                        <dt>Từ khóa chính</dt>
                        <dd>{{ $blog['focus_keyword'] }}</dd>
                        <dt>Canonical</dt>
                        <dd>{{ $blog['canonical_url'] }}</dd>
                    </dl>
                </div>
            </div>

            <div class="card">
                <div class="card-header admin-table-toolbar">
                    <strong class="card-title">Mục lục</strong>
                    <span class="admin-status {{ $blog['toc_auto'] ? 'active' : 'draft' }}">
                        {{ $blog['toc_auto'] ? 'Tự động' : 'Thủ công' }}
                    </span>
                </div>
                <div class="card-body">
                    <ol class="admin-toc-preview">
                        @foreach ($blog['toc_items'] as $item)
                            <li>
                                <a href="#{{ $item['anchor'] }}">{{ $item['title'] }}</a>
                                <small>#{{ $item['anchor'] }}</small>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
