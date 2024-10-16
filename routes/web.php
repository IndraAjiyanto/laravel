<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about', [
        'nama' => 'Indra Ajiyanto'
    ]);
});
Route::get('/post', function () {
    return view('post');
});
