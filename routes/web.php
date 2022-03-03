<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('index', [
        "title" => "Beranda"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Sasi Afrila Putri P.",
        "email" => "sasiafrila8513@gmail.com",
        "gambar" => "28_Sasi Afrila.png"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

Route::resource('/contacts', ContactController::class);


Auth::routes();

Route::group(['middleware' => ['auth']], function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contact/index', [ContactController::class, 'index'])->name('Contacts.index');
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('Contacts.edit');
    Route::post('/contact/{id}/update', [ContactController::class, 'update'])->name('Contacts.update');
    Route::get('/contact/{id}/destroy', [ContactController::class, 'destroy'])->name('Contacts.destroy');


});

