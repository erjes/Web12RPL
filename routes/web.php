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
    return view(
        'ApaituRPL.index',[
        "title" => "Landing Page"
        ]);
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
