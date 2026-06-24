@extends('admin.dashboard')

@section('title', 'Sửa bài viết chuẩn SEO')

@section('content')
<div class="breadcrumbs admin-page-heading">
    <div class="breadcrumbs-inner">
        <div class="row m-0 align-items-center">
            <div class="col-sm-7">
                <div class="page-header float-left">
                    <div class="page-title">
                        <p class="admin-page-kicker">Bài viết chuẩn SEO</p>
                        <h1>Sửa bài viết</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                            <li><a href="{{ route('admin.blogs.index') }}">Bài viết</a></li>
                            <li class="active">Chỉnh sửa</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <form action="{{ route('admin.blogs.update', $blog['id']) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.blogs._form')
    </form>
</div>
@endsection

@section('script')
    @include('admin.blogs._tinymce')
@endsection
