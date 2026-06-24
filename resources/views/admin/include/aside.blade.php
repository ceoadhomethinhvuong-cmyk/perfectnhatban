<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="menu-icon fa fa-dashboard"></i>Bảng điều khiển
                    </a>
                </li>

                <li class="menu-title">Nội dung website</li>

                <li class="menu-item-has-children {{ Request::routeIs('admin.category_blogs.*') ? 'active is-open show' : '' }}">
                    <a href="#" class="admin-sidebar-toggle" aria-expanded="{{ Request::routeIs('admin.category_blogs.*') ? 'true' : 'false' }}">
                        <i class="menu-icon fa fa-folder-open"></i>Danh mục bài viết
                    </a>
                    <ul class="sub-menu children">
                        <li class="{{ Request::routeIs('admin.category_blogs.index', 'admin.category_blogs.show', 'admin.category_blogs.edit') ? 'active-sub' : '' }}"><a href="{{ route('admin.category_blogs.index') }}">Danh sách</a></li>
                        <li class="{{ Request::routeIs('admin.category_blogs.create') ? 'active-sub' : '' }}"><a href="{{ route('admin.category_blogs.create') }}">Thêm danh mục</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children {{ Request::routeIs('admin.blogs.*') ? 'active is-open show' : '' }}">
                    <a href="#" class="admin-sidebar-toggle" aria-expanded="{{ Request::routeIs('admin.blogs.*') ? 'true' : 'false' }}">
                        <i class="menu-icon fa fa-newspaper-o"></i>Bài viết
                    </a>
                    <ul class="sub-menu children">
                        <li class="{{ Request::routeIs('admin.blogs.index', 'admin.blogs.show', 'admin.blogs.edit') ? 'active-sub' : '' }}"><a href="{{ route('admin.blogs.index') }}">Danh sách</a></li>
                        <li class="{{ Request::routeIs('admin.blogs.create') ? 'active-sub' : '' }}"><a href="{{ route('admin.blogs.create') }}">Thêm bài viết</a></li>
                    </ul>
                </li>

                <li class="menu-title">Liên kết nhanh</li>

                <li>
                    <a href="{{ route('home') }}" target="_blank" rel="noopener">
                        <i class="menu-icon fa fa-external-link"></i>Xem website
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</aside>
