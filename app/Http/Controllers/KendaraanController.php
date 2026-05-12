<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan; // Pastikan baris ini ada!
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari database
        $kendaraans = Kendaraan::all(); 
        
        // Mengirim variabel $kendaraans ke file index.blade.php
        return view('kendaraan.index', compact('kendaraans'));
    }
    // Menampilkan halaman form tambah
public function create()
{
    return view('kendaraan.create');
}

// Menyimpan data yang diinput ke database
public function store(Request $request)
{
    \App\Models\Kendaraan::create($request->all());
    return redirect()->route('kendaraan.index');
}
}
