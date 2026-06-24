@extends('admin.dashboard')

@section('title', 'Bảng điều khiển')

@section('content')
<div class="breadcrumbs admin-page-heading">
    <div class="breadcrumbs-inner">
        <div class="row m-0 align-items-center">
            <div class="col-sm-7">
                <div class="page-header float-left">
                    <div class="page-title">
                        <p class="admin-page-kicker">Tổng quan</p>
                        <h1>Bảng điều khiển</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body admin-stat-card">
                    <span class="admin-stat-icon gold"><i class="fa fa-folder-open"></i></span>
                    <div>
                        <div class="admin-stat-value">03</div>
                        <p class="admin-stat-label">Danh mục nội dung</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body admin-stat-card">
                    <span class="admin-stat-icon green"><i class="fa fa-newspaper-o"></i></span>
                    <div>
                        <div class="admin-stat-value">06</div>
                        <p class="admin-stat-label">Bài viết mẫu</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body admin-stat-card">
                    <span class="admin-stat-icon blue"><i class="fa fa-eye"></i></span>
                    <div>
                        <div class="admin-stat-value">04</div>
                        <p class="admin-stat-label">Trang đang quản lý</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body admin-stat-card">
                    <span class="admin-stat-icon red"><i class="fa fa-clock-o"></i></span>
                    <div>
                        <div class="admin-stat-value">24h</div>
                        <p class="admin-stat-label">Theo dõi nội dung</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Luồng quản trị nội dung</strong>
                </div>
                <div class="card-body">
                    <div class="admin-workflow-list">
                        <div class="admin-workflow-item">
                            <span>1</span>
                            <div>
                                <h5>Tạo danh mục</h5>
                                <p>Chuẩn hóa nhóm nội dung trước khi đăng bài để website dễ lọc và dễ đọc hơn.</p>
                            </div>
                        </div>
                        <div class="admin-workflow-item">
                            <span>2</span>
                            <div>
                                <h5>Biên tập bài viết</h5>
                                <p>Nhập tiêu đề, tóm tắt, nội dung và trạng thái hiển thị trong cùng một màn hình.</p>
                            </div>
                        </div>
                        <div class="admin-workflow-item">
                            <span>3</span>
                            <div>
                                <h5>Kiểm tra hiển thị</h5>
                                <p>Mở website ở tab mới để đối chiếu bố cục sau khi gắn dữ liệu thật.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Thao tác nhanh</strong>
                </div>
                <div class="card-body">
                    <div class="admin-action-list">
                        <a class="admin-action-item" href="{{ route('admin.category_blogs.create') }}">
                            <i class="fa fa-plus-circle"></i>
                            <span>Thêm danh mục bài viết</span>
                        </a>
                        <a class="admin-action-item" href="{{ route('admin.blogs.create') }}">
                            <i class="fa fa-pencil-square-o"></i>
                            <span>Viết bài mới</span>
                        </a>
                        <a class="admin-action-item" href="{{ route('home') }}" target="_blank" rel="noopener">
                            <i class="fa fa-external-link"></i>
                            <span>Xem website</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
