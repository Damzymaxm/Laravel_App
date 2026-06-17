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
// This handles your private admin dashboard page
Route::get('/admin/submissions', function () {
    // 1. Fetch all rows from the contact_submissions table
    $allMessages = DB::table('contact_submissions')->get();

    // 2. Pass those messages into a view file named 'admin'
    return view('admin', ['submissions' => $allMessages]);
});
// This handles deleting a specific submission by its ID
Route::post('/admin/submissions/{id}/delete', function ($id) {
    // Tell the database to find the row with this exact ID and delete it
    DB::table('contact_submissions')->where('id', $id)->delete();

    // Send the user right back to the dashboard page to see the updated list
    return redirect('/admin/submissions');
});