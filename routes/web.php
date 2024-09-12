<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\FakultasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/delete/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');

Route::get('/find_prodi', [FakultasController::class, 'find_prodi'])->name('find_prodi');

