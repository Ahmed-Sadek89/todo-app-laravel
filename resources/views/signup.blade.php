@extends('layout.auth')
@extends('components.auth-card')
@section('auth-title', 'Todo App | Signup')
@section('auth-layout')
@section('auth-card')
    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
        Make a new account
    </h1>
    <form class="space-y-4 md:space-y-6" action="#">
        <x-input id="name" name="name" label="Your name" type="name" placeholder="Ahmed Sadek" />
        <x-input id="email" name="email" label="Your email" type="email" placeholder="name@company.com" />
        <x-input id="password" name="password" label="Password" type="password" placeholder="••••••••" />
        <x-input id="password-confirm" name="password-confirm" label="Confirm your password" type="password"
            placeholder="••••••••" />
        <x-button isFullWidth={{ true }} type="submit" value="Signup" />

        <x-auth-navigation route="login" />
    </form>
@endsection

@endsection
