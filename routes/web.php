<?php

use App\Http\Controllers\MapelDanGuruController;
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
Route::get('apaiturpl', function () {
    return view('ApaituRPL.index');
});
// Route::get('mapeldanguru', function () {
//     return view('MapeldanGuru.index');
// });
Route::get('pkl', function () {
    return view('PKL.content.pkl');
});
Route::get('prestasi', function () {
    return view('Prestasi.index');
});
Route::get('daftarpengembang', function () {
    return view('DaftarPengembang.index');
});
// Route::get('/', [App\Http\Controllers\ApaituRPLController::class, 'index']);
Route::get('/bukutahunan', [App\Http\Controllers\BukuTahunan::class, 'index'])->name("bukutahunan");

Route::get('/mapeldanguru', [MapelDanGuruController::class, 'guru'])->name('MapelDanGuru.index');
Route::get('/homepkl', function () {
    return view('PKL.content.pkl');
});

Route::get('/tempat', function () {
    return view('PKL.content.tempat');
});
Route::get('/home', function () {
    return view('PKL.content.pkl');
});
Route::get('/detailBsn', function () {
    return view('PKL.detailTempat.detailBsn');
});
Route::get('/detailPusintek', function () {
    return view('PKL.detailTempat.detailPusintek');
});
Route::get('/detailIndivara', function () {
    return view('PKL.detailTempat.detailIndivara');
});
Route::get('/detailInfomedia', function () {
    return view('PKL.detailTempat.detailInfomedia');
});

Route::get('/detailTriatra', function () {
    return view('PKL.detailTempat.detailTriatra');
});

Route::get('/detailGateway', function () {
    return view('PKL.detailTempat.detailGateway');
});

Route::get('/detailKemenhub', function () {
    return view('PKL.detailTempat.detailKemenhub');
});

Route::get('/detailSfExpress', function () {
    return view('PKL.detailTempat.detailSfExpress');
});

Route::get('/detailMimin', function () {
    return view('PKL.detailTempat.detailMimin');
});

Route::get('/detailDishub', function () {
    return view('PKL.detailTempat.detailDishub');
});

Route::get('/detailPrima', function () {
    return view('PKL.detailTempat.detailPrima');
});

Route::get('/detailKominfo', function () {
    return view('PKL.detailTempat.detailKominfo');
});

Route::get('/detailAskrindo', function () {
    return view('PKL.detailTempat.detailAskrindo');
});

Route::get('/detailCSIS', function () {
    return view('PKL.detailTempat.detailCSIS');
});
