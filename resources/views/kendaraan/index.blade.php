@extends('layouts.app')

@section('content')
<div class="custom-card animate-view">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h2 class="fw-800 mb-1" style="letter-spacing: -1px;">Daftar Antrean Service</h2>
            <p class="text-muted small">Monitoring status perbaikan kendaraan secara real-time.</p>
        </div>
        <a href="{{ route('kendaraan.create') }}" class="btn-emerald text-decoration-none">
    <i class="fa-solid fa-plus-circle me-2"></i>Tambah Kendaraan
</a>    
    </div>

    <div class="table-responsive">
        <table class="table table-borderless align-middle">
            <thead>
                <tr class="text-muted small border-bottom">
                    <th class="pb-3 ps-0">PLAT NOMOR</th>
                    <th class="pb-3">NAMA PEMILIK</th>
                    <th class="pb-3">MERK UNIT</th>
                    <th class="pb-3">KELUHAN</th>
                    <th class="pb-3 text-center">AKSI</th>
                </tr>
            </thead>
            <tbody class="border-top">
                @forelse($kendaraans as $item)
                <tr class="border-bottom">
                    <td class="py-4 ps-0">
                        <span class="badge-plat">{{ $item->plat_nomor }}</span>
                    </td>
                    <td class="fw-bold text-dark">{{ $item->nama_pemilik }}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-motorcycle me-2 text-muted"></i>
                            {{ $item->merk_kendaraan }}
                        </div>
                    </td>
                    <td class="text-muted small">{{ Str::limit($item->keluhan, 40) }}</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-light p-2 rounded-3 text-emerald shadow-sm">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-5">
                        <div class="py-4">
                            <i class="fa-solid fa-folder-open fa-3x mb-3" style="color: #e2e8f0"></i>
                            <p class="text-muted fw-500">Belum ada antrean kendaraan saat ini.</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection