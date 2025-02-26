@extends('layout.auth')
@extends('components.auth-card')
@section('auth-title', 'Todo App | Login')
@section('auth-layout')
@section('auth-card')
    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
        Login to your account
    </h1>
    <form class="space-y-4 md:space-y-6" action="#">
        <x-input id="email" name="email" label="Your email" type="email" placeholder="name@company.com" />
        <x-input id="password" name="password" label="Password" type="password" placeholder="••••••••" />
        <x-button isFullWidth={{ true }} type="submit" value="Login" />

        <x-auth-navigation route="signup" />
    </form>
@endsection

@endsection
