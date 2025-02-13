@extends('layout.main')
@section('meta-data')
    <title>@yield("protected-title")</title>
@endsection
<h1>this is main-layout</h1>
@section('main-layout')
<h1>this is protected-layout</h1>
    @yield("protected-layout")
@endsection
