

@extends('admin.layouts.master')

@section('title', 'Not Found')

@section('content')
<div class="container text-center py-5">
    <h1>404</h1>
    <h2>404 - Page Not Found</h2>
    <p>The page you are looking for does not exist or may have been moved.</p>

    <a href="{{ url('/admin/dashboard') }}" class="btn btn-primary">
        Go Home
    </a>
</div>
@endsection