<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Đăng nhập - PERFECT Admin</title>
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
            <h1>Đăng nhập Admin</h1>
            <p class="admin-login-copy">Quản lý danh mục bài viết, nội dung tin tức và các thông tin hiển thị trên website PERFECT.</p>

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p class="mb-0">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('admin.login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="admin@example.com" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <div class="admin-password-field">
                        <input id="password" type="password" name="password" class="form-control" placeholder="Nhập mật khẩu" required>
                        <button type="button" class="admin-password-toggle" data-password-toggle="#password" aria-label="Hien thi mat khau" aria-pressed="false">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" id="remember">
                        <label class="custom-control-label" for="remember">Ghi nhớ</label>
                    </div>
                    <a href="{{ route('home') }}" class="admin-muted-link">Về website</a>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fa fa-lock mr-1"></i> Đăng nhập
                </button>
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
    <script>
        document.addEventListener('click', function (event) {
            var toggle = event.target.closest('[data-password-toggle]');
            if (!toggle) {
                return;
            }

            var input = document.querySelector(toggle.getAttribute('data-password-toggle'));
            var icon = toggle.querySelector('.fa');
            if (!input) {
                return;
            }

            var shouldShow = input.type === 'password';
            input.type = shouldShow ? 'text' : 'password';
            toggle.setAttribute('aria-pressed', shouldShow ? 'true' : 'false');
            toggle.setAttribute('aria-label', shouldShow ? 'An mat khau' : 'Hien thi mat khau');

            if (icon) {
                icon.classList.toggle('fa-eye', !shouldShow);
                icon.classList.toggle('fa-eye-slash', shouldShow);
            }
        });
    </script>
</body>

</html>
