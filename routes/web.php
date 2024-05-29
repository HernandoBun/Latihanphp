<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/chat', function () {
    return view('socialmedia1');
});

Route::get('/blog', function () {
    return view('blog');
});
