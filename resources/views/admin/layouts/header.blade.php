<!DOCTYPE html>
<html>
<head>

    <title>Admin Panel</title>

    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

</head>

<body>

    @include('admin.layouts.sidebar')

    <div class="main-content">

        @include('admin.layouts.header')

        @yield('content')

    </div>

    <script src="{{ asset('admin/js/script.js') }}"></script>

</body>
</html>