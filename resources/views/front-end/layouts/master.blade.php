<!DOCTYPE html>
<html>
<head>

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

</head>

<body>

@include('front-end.layouts.header')

@yield('content')

@include('front-end.layouts.footer')

</body>
</html>