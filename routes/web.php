<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;

// Rute ini akan memanggil fungsi index di Controller
Route::get('/', [KendaraanController::class, 'index'])->name('kendaraan.index');
Route::get('/tambah', [App\Http\Controllers\KendaraanController::class, 'create'])->name('kendaraan.create');
Route::post('/simpan', [App\Http\Controllers\KendaraanController::class, 'store'])->name('kendaraan.store');