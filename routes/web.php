<?php

use Illuminate\Support\Facades\Route;

// Cukup satu saja rute untuk halaman utama
Route::get('/', function () {
    return view('kendaraan.index');
});