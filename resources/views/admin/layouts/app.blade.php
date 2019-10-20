<!DOCTYPE html>
<html lang="es">
<head>
    @include('admin.partials.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @include('admin.partials.header')
    @include('admin.partials.sidebar')
    <div class="wrapper">
        @yield('main-content')

        @include('admin.partials.footer')
    </div>
    @include('admin.partials.scripts')
</body>
</html>