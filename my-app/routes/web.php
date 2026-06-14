<?php

use Illuminate\Support\Facades\Route;

// This handles the main home page (http://127.0.0.1:8000)
Route::get('/', function () {
    return view('welcome');
});

// This handles your new custom page (http://127.0.0.1:8000/hello)
Route::get('/hello', function () {
    return view('hello');
});