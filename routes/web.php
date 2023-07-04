<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\SAWController;
use App\Http\Controllers\SuplemenController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/normalisasi', [SAWController::class, 'get_view_normalization'])->name('normalisasi');
Route::get('/admin/perangkingan', [SAWController::class, 'get_view_preferensi'])->name('perangkingan');

Route::get('/admin/kriteria', [KriteriaController::class, 'index'])->name('kriteria');
Route::get('/admin/kriteria/tambah', function () {
    return view('layouts.admin.tambah-kriteria');
});

Route::post('/kriteria/tambah', [KriteriaController::class, 'store'])->name('tambah.kriteria');
Route::get('/kriteria/edit/{id}', [KriteriaController::class, 'edit'])->name('edit.kriteria');
Route::post('/kriteria/edit/{id}', [KriteriaController::class, 'update'])->name('update.kriteria');
Route::get('/kriteria/delete/{id}', [KriteriaController::class, 'destroy'])->name('hapus.kriteria');

Route::get('/admin/alternatif/tambah', function () {
    return view('layouts.admin.tambah');
});

Route::post('/alternatif/tambah', [SuplemenController::class, 'store'])->name('tambah');
Route::get('/alternatif/edit/{id}', [SuplemenController::class, 'edit'])->name('edit');
Route::post('/alternatif/edit/{id}', [SuplemenController::class, 'update'])->name('update');
Route::get('/alternatif/delete/{id}', [SuplemenController::class, 'destroy'])->name('hapus');
