<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// This handles the main home page
Route::get('/', function () {
    return view('welcome');
});

// This handles your new custom page
Route::get('/hello', function () {
    return view('hello');
});

// This shows your contact form page
Route::get('/contact', function () {
    return view('contact');
});

// This captures and processes the contact form submission data
Route::post('/submit-contact', function (Request $request) {
    $name = $request->input('name');
    $email = $request->input('email');
    $messageContent = $request->input('message');
// 2. NEW: Insert the data directly into your database table rows
    DB::table('contact_submissions')->insert([
        'name' => $name,
        'email' => $email,
        'message' => $messageContent,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    return view('summary', [
        'name' => $name,
        'email' => $email,
        'messageContent' => $messageContent
    ]);
});