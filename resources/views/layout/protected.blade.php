@extends('layout.main')
@section('meta-data')
    <title>@yield('protected-title')</title>
@endsection
@section('main-layout')
    @yield('protected-layout')
@endsection
