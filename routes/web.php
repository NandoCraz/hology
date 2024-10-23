<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('front.page');
});

Route::get('/page', function () {
    return view('admin.admin');
});
