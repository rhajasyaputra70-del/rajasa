<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Rajasa';
});

Route::get('/user/{name}', function ($rajasa) {
    return "Nama saya $rajasa saya ganteng";
}); 

Route::get('/greet/{name?}', function ($samael = 'Guest') {
    return "Halo, $samael";
}); 

Route::get('/profile', function() {
    return view('profile');
});

Route::get('/about', function() {
    return view('about', ['name' => 'Rhajasya Putra Ansar']);
});

Route::get('/home', function() {
    return 'Halo, Ini adalah halaman Home';
})->name('home.page');

