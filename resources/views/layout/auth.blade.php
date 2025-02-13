@extends('layout.main')
@section('meta-data')
    <title>@yield('auth-title')</title>
@endsection

@section('main-layout')
    @yield('auth-layout')
@endsection
