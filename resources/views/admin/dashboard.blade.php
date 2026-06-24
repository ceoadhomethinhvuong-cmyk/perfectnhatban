@include('admin.include.head')

<body class="perfect-admin-shell">
    @include('admin.include.aside')

    <div id="right-panel" class="right-panel">
        @include('admin.include.header')

        @if (session('success') || session('status'))
            <div class="content admin-flash-area">
                <div class="alert alert-success mb-0" role="alert">
                    {{ session('success') ?? session('status') }}
                </div>
            </div>
        @endif

        @if ($errors->any())
            <div class="content admin-flash-area">
                <div class="alert alert-danger mb-0" role="alert">
                    <strong>Vui lòng kiểm tra lại thông tin.</strong>
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        @yield('content')

        <div class="clearfix"></div>
        @include('admin.include.footer')
    </div>

    @include('admin.include.script')
    @yield('script')
</body>

</html>
