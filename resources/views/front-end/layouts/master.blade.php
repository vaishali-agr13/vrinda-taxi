<!DOCTYPE html>
<html>
<head>

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

</head>

<body>

@include('frontend.layouts.header')

@yield('content')

@include('frontend.layouts.footer')

</body>
</html>