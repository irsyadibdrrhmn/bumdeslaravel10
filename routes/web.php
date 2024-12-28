<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman utama (Home)
Route::get('/', function () {
    return view('home');
});

// Route untuk halaman Catering
Route::get('/catering', function () {
    return view('catering');
})->name('catering');

// Route untuk halaman Playground
// Route::get('/playground', function () {
//     return view('playground');
// });

// Route untuk halaman All Product
Route::get('/all-product', function () {
    return view('all-product');
});
