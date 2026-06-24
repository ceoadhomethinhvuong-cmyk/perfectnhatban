@php
$adminName = Auth::user()->name ?? 'Quản trị viên';
$adminEmail = Auth::user()->email ?? 'admin@gmal.com';
@endphp

<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('theme/admin/images/logo.png') }}" alt="PERFECT">
            </a>
            <a class="navbar-brand hidden" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('theme/admin/images/logo2.png') }}" alt="PERFECT">
            </a>
            <a id="menuToggle" class="menutoggle" href="#" aria-label="Mở menu">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>

    <div class="top-right">
        <div class="header-menu">
            <div class="header-left">
                <a class="admin-header-link" href="{{ route('home') }}" target="_blank" rel="noopener">
                    <i class="fa fa-globe"></i>
                    <span>Xem website</span>
                </a>
            </div>

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active admin-user-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="admin-user-avatar">{{ mb_substr($adminName, 0, 1) }}</span>
                    <span class="admin-user-meta">
                        <strong>{{ $adminName }}</strong>
                        <small>{{ $adminEmail }}</small>
                    </span>
                </a>

                <div class="user-menu dropdown-menu dropdown-menu-right">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <i class="fa fa-dashboard"></i> Bảng điều khiển
                    </a>
                    <form action="{{ route('admin.logout') }}" method="post">
                        @csrf
                        <button type="submit" class="nav-link admin-logout-button">
                            <i class="fa fa-power-off"></i> Đăng xuất
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
