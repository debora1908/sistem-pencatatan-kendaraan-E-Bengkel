<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    // Menampilkan Tabel (Poin 4.2)
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraans'));
    }

    // Menampilkan Form Tambah (Poin 4.3)
    public function create()
{
    // Pastikan filenya ada di folder: resources/views/kendaraan/create.blade.php
    return view('kendaraan.create');
}

    // Logika Menyimpan Data (Poin 4.3)
    public function store(Request $request)
    {
        // Validasi simpel agar data tidak kosong
        $request->validate([
            'plat_nomor' => 'required',
            'nama_pemilik' => 'required',
            'merk_kendaraan' => 'required',
            'keluhan' => 'required',
        ]);

        // Simpan data ke database sesuai Poin 4 soal UTS
        Kendaraan::create($request->all());

        // Setelah simpan, balik ke halaman depan (redirect) sesuai soal
        return redirect()->route('kendaraan.index');
    }
    
}