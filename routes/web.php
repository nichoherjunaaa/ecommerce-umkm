<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/products', function () {
    return view('product');
});
Route::get('/craftman', function () {
    return view('craftman');
});

Route::get('/about', function () {
    return view('about');
});


Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});