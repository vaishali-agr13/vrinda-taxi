<!DOCTYPE html>
<html>
<head>

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


</head>

<body>

@include('front-end.layouts.header')

@yield('content')

@include('front-end.layouts.footer')

</body>
</html>