<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route dummy untuk menampung POST request dari form Contact
Route::post('/contact', function () {
    // Nanti logika kirim email atau save database taruh sini
    return back()->with('success', 'Pesan berhasil dikirim!');
});