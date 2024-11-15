<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/layout/main');
});
Route::get('/login', function () {
    return view('/auth/login');
});

