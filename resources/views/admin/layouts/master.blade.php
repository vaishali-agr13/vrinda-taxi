<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Admin Panel')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">

    @yield('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    <!-- Navbar -->
    @include('admin.layouts.navbar')

    <!-- Sidebar -->
    @include('admin.layouts.sidebar')

    <!-- Main Content -->
    <div class="content-wrapper">

        <!-- Page Header -->
        <section class="content-header">
            <div class="container-fluid">
                @yield('page_header')
            </div>
        </section>

        <!-- Page Content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>

    </div>

    <!-- Footer -->
    @include('admin.layouts.footer')

</div>

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- AdminLTE -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>

@yield('scripts')

</body>
</html>