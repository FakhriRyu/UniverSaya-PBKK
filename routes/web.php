<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NoteController; 

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

Route::get('/', [KelasController::class, "index"]); // Mengarahkan ke URL utama

Route::get('/create', [KelasController::class, 'create']); // Mengarahkan ke halaman pembuatan entri baru

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index'); // Mengarahkan ke tampilan daftar mata kuliah

Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store'); // Menyimpan data baru


Route::get('/kelas/{kelas}/edit', [KelasController::class, 'edit'])->name('kelas.edit'); // Mengarahkan ke halaman pengeditan

Route::post('/kelas/{kelas}', [KelasController::class, 'update'])->name('kelas.update'); // Menyimpan pembaruan data
Route::put('/kelas/{kelas}', [KelasController::class, 'update']); // Alternatif untuk menyimpan pembaruan data

Route::delete('/kelas/{kelas}', [KelasController::class, 'destroy'])->name('kelas.destroy'); // Menghapus data

Route::get('/kelas/{kelas}', [KelasController::class, 'show'])->name('kelas.show'); // Mengarahkan ke tampilan detail mata kuliah


// routes/web.php

Route::get('/notes', [NoteController::class, 'index']);
Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');
Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store'); 
Route::get('/notes/{note}', [NoteController::class, 'show'])->name('notes.show');
Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->name('notes.edit');
Route::put('/notes/{note}', [NoteController::class, 'update'])->name('notes.update');
Route::delete('/notes/{note}', [NoteController::class, 'destroy'])->name('notes.destroy');




Route::get('/Kalender', function () {
    return view('Kalender', [
        "title" => "Kalender"
    ]);
});