<?php

use App\Http\Controllers\MapelDanGuruController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\guruController;

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
    return view('ApaituRPL.index');
});


Route::get('apaiturpl', function () {
    return view('ApaituRPL.index');
});
Route::get('mapeldanguru', function () {
    return view('MapeldanGuru.index');
});
Route::get('pkl', function () {
    return view('PKL.index');
});
Route::get('prestasi', function () {
    return view('Prestasi.index');
});
Route::get('daftarpengembang', function () {
    return view('DaftarPengembang.index');
});

Route::get('/mapeldanguru', [MapelDanGuruController::class, 'guru'])->name('MapelDanGuru.index');
