<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;


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

Route::get('/', [App\Http\Controllers\ApaituRPLController::class, 'index']);

Route::get('/gurus', [GuruController::class, 'index'])->name('gurus.index');
Route::get('/gurus/create', [GuruController::class, 'create'])->name('gurus.create');
Route::post('/gurus', [GuruController::class, 'store'])->name('gurus.store');
Route::get('/gurus/{guru}', [GuruController::class, 'show'])->name('gurus.show');
Route::get('/gurus/{guru}/edit', [GuruController::class, 'edit'])->name('gurus.edit');
Route::put('/gurus/{guru}', [GuruController::class, 'update'])->name('gurus.update');
Route::delete('/gurus/{guru}', [GuruController::class, 'destroy'])->name('gurus.destroy');
