<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Ivan']);
});

Route::get('/blog', function () {
    return view('blog', ['judul' => 'Ivan', 'konten' => 'Ivan']);
});

Route::get('/contact', function () {
    return view('contact', ['name' => 'Ivan']);
});
