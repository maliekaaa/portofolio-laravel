<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
});

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/about', [BlogController::class, 'about']);
Route::get('/blog/contact', [BlogController::class, 'contact']);
