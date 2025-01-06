<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\InputAspirasiController;
use App\Http\Controllers\SearchController;
use App\Models\Kategori;

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
    $kategoris = Kategori::all();
    return view('welcome', compact('kategoris'));
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('siswa', SiswaController::class)->middleware('auth');
Route::resource('kategori', KategoriController::class)->middleware('auth');
Route::resource('inputaspirasi', InputAspirasiController::class);
Route::resource('aspirasi', AspirasiController::class)->middleware('auth');
Route::get('/laporan', [InputAspirasiController::class, 'laporan'])->middleware('auth');

Route::get('/laporan/cetak', [InputAspirasiController::class, 'pdf'])->middleware('auth');
Route::get('/profil', [InputAspirasiController::class, 'profil']);
Route::resource('/search', SearchController::class);
Route::post('/filter-data', [InputAspirasiController::class, 'filterData'])->name('filterData');