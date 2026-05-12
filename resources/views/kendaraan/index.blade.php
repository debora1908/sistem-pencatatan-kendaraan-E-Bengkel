@extends('layouts.app')

@section('content')
<div class="card-exclusive animate-view">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold m-0" style="color: var(--deep-slate)">Daftar Antrean Unit</h3>
            <p class="text-muted small mb-0">Monitoring status perbaikan kendaraan pelanggan</p>
        </div>
        <a href="#" class="btn-premium">
            <i class="fa-solid fa-plus-circle"></i> Tambah Antrean
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="bg-light">
                <tr class="text-muted small">
                    <th class="py-3 ps-4">PLAT NOMOR</th>
                    <th class="py-3">PEMILIK</th>
                    <th class="py-3">MERK UNIT</th>
                    <th class="py-3">KELUHAN</th>
                    <th class="py-3 pe-4 text-center">OPSI</th>
                </tr>
            </thead>
            <tbody>
                {{-- Data akan muncul otomatis di Nomor 4 --}}
                @forelse($kendaraans ?? [] as $k)
                <tr>
                    <td class="ps-4"><span class="badge bg-dark font-monospace p-2">{{ $k->plat_nomor }}</span></td>
                    <td class="fw-semibold">{{ $k->nama_pemilik }}</td>
                    <td>{{ $k->merk_kendaraan }}</td>
                    <td class="text-muted">{{ $k->keluhan }}</td>
                    <td class="pe-4 text-center">
                        <div class="btn-group">
                            <button class="btn btn-outline-secondary btn-sm"><i class="fa-solid fa-pen"></i></button>
                            <button class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-5 text-muted small">
                        <i class="fa-solid fa-triangle-exclamation d-block mb-2 fs-3"></i>
                        Belum ada data kendaraan yang terdaftar dalam sistem.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection