<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Quên mật khẩu - PERFECT Admin</title>
    <link rel="shortcut icon" href="{{ asset('theme/admin/images/favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('theme/admin/assets/css/perfect-admin.css') }}">
</head>

<body class="admin-login-page">
    <div class="admin-login-shell">
        <section class="admin-login-form">
            <img class="admin-login-logo" src="{{ asset('theme/admin/images/logo.png') }}" alt="PERFECT">
            <p class="admin-page-kicker">Khu vực quản trị</p>
            <h1>Quên mật khẩu</h1>
            <p class="admin-login-copy">Nhập email đăng ký của bạn. Chúng tôi sẽ gửi link đặt lại mật khẩu đến email đó.</p>

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p class="mb-0">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('admin.password.email') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="admin@example.com" required autofocus>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-3">
                    <i class="fa fa-paper-plane mr-1"></i> Gửi link đặt lại mật khẩu
                </button>
                <div class="text-center">
                    <a href="{{ route('admin.login.form') }}" class="admin-muted-link">
                        <i class="fa fa-arrow-left mr-1"></i> Quay lại đăng nhập
                    </a>
                </div>
            </form>
        </section>

        <aside class="admin-login-panel">
            <div>
                <img src="{{ asset('theme/admin/images/logo2.png') }}" alt="PERFECT">
                <h2>PERFECT Admin</h2>
                <p>Giao diện quản trị được cắt từ theme admin, đã cân lại khoảng cách, card, sidebar và form để phù hợp với dự án hiện tại.</p>
            </div>
            <small>© {{ date('Y') }} PERFECT</small>
        </aside>
    </div>
</body>

</html>
