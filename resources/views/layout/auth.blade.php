@extends('layout.main')
@section('meta-data')
    <title>@yield('auth-title')</title>
@endsection
<h1>this is main-layout</h1>

@section('main-layout')
    <h1>this is auth-layout</h1>
    @yield('auth-layout')
@endsection
