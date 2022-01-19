<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Sasi Afrila Putri P.",
        "email" => "sasiafrila8513@gmail.com",
        "gambar" => "28_Sasi Afrila.png"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery');
});
