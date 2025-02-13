@extends('layout.main')
@section('meta-data')
    <title>@yield('protected-title')</title>
@endsection
@section('main-layout')
    <x-header />
    @yield('protected-layout')
@endsection
