@extends('layouts.app')

@section('content')
<div class="custom-card animate-view" style="max-width: 600px; margin: 2rem auto;">
    <div class="mb-4">
        <h3 class="fw-800">Tambah Unit Baru</h3>
        <p class="text-muted small">Masukkan detail kendaraan untuk antrean service.</p>
    </div>

    <form action="{{ route('kendaraan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label small fw-bold">Plat Nomor</label>
            <input type="text" name="plat_nomor" class="form-control p-3 rounded-3" placeholder="Contoh: BK 1234 AB" required>
        </div>
        <div class="mb-3">
            <label class="form-label small fw-bold">Nama Pemilik</label>
            <input type="text" name="nama_pemilik" class="form-control p-3 rounded-3" placeholder="Nama Lengkap" required>
        </div>
        <div class="mb-3">
            <label class="form-label small fw-bold">Merk Kendaraan</label>
            <input type="text" name="merk_kendaraan" class="form-control p-3 rounded-3" placeholder="Contoh: Honda Vario" required>
        </div>
        <div class="mb-3">
            <label class="form-label small fw-bold">Keluhan</label>
            <textarea name="keluhan" class="form-control p-3 rounded-3" rows="3" placeholder="Jelaskan kerusakan..." required></textarea>
        </div>
        
        <div class="d-grid mt-4">
            <button type="submit" class="btn-emerald">Simpan Data Unit</button>
            <a href="{{ route('kendaraan.index') }}" class="btn btn-link text-muted mt-2 small text-decoration-none">Kembali</a>
        </div>
    </form>
</div>
@endsection