<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\UserLayananController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// USER
// BIODATA
Route::get('/biodata', [BiodataController::class, 'biodata'])->name('biodata');
Route::post('/biodata-update', [BiodataController::class, 'update'])->name('biodata.update');
// LAYANAN
Route::get('/detail-layanan/{no}', [LayananController::class, 'detail'])->name('layanan.detail');
Route::get('/pendaftaran-penduduk/cetak-ulang-kk', [UserLayananController::class, 'cetakulangkk'])->name('pendaftaran-penduduk.cetak-ulang-kk');
Route::post('/pendaftaran-penduduk/cetak-ulang-kk', [UserLayananController::class, 'cetakulangkk_add'])->name('pendaftaran-penduduk.cetak-ulang-kk.add');
