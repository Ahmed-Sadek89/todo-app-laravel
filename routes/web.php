<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/add-note', function () {
    return view('add-note');
})->name("add-note");