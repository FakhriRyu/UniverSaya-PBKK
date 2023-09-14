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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/Kelas', function () {
    return view('Kelas', [
        "title" => "Kelas"
    ]);
});

Route::get('/Kalender', function () {
    return view('Kalender', [
        "title" => "Kalender"
    ]);
});

Route::get('/Notes', function () {
    return view('Notes', [
        "title" => "Catatan"
    ]);
});