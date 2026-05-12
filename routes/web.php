<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;

// Halaman utama (Daftar Antrean)
Route::get('/', [KendaraanController::class, 'index'])->name('kendaraan.index');

// Halaman Form (Tempat kamu ngetik data)
Route::get('/tambah', [KendaraanController::class, 'create'])->name('kendaraan.create');

// Proses Simpan (Yang kerja masukin ke database)
Route::post('/simpan', [KendaraanController::class, 'store'])->name('kendaraan.store');