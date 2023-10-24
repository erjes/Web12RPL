<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapelDanGuruController;


Route::get('/', [App\Http\Controllers\ApaituRPLController::class, 'index']);
Route::get('/guru', [MapelDanGuruController::class, 'index'])->name('guru.index');
