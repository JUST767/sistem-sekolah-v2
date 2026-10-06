@extends('layouts.app')
@section('title', $title)

@section('content')
<div class="mb-8 flex justify-between items-end">
    <div>
        <p class="text-[11px] text-yellow-600 font-bold tracking-widest uppercase mb-1">Data Guru</p>
        <h2 class="text-3xl font-bold text-[#151b2b]">Rincian Guru</h2>
    </div>
    <a href="{{ route('teachers.index') }}" class="bg-slate-200 text-slate-800 px-5 py-2.5 text-sm font-semibold hover:bg-slate-300 transition-colors">
        Kembali ke Daftar
    </a>
</div>

<div class="bg-white border border-slate-200 p-8 max-w-3xl">
    <div class="grid grid-cols-3 gap-6 text-sm">
        <div class="col-span-1 font-bold text-slate-500 uppercase tracking-wide text-xs">NIP</div>
        <div class="col-span-2 font-medium text-slate-800">{{ $teacher['nip'] ?? '-' }}</div>
        
        <div class="col-span-1 font-bold text-slate-500 uppercase tracking-wide text-xs">Nama Lengkap</div>
        <div class="col-span-2 font-medium text-slate-800">{{ $teacher['name'] ?? '-' }}</div>

        <div class="col-span-1 font-bold text-slate-500 uppercase tracking-wide text-xs">Jenis Kelamin</div>
        <div class="col-span-2 font-medium text-slate-800">{{ $teacher['gender'] ?? '-' }}</div>

        <div class="col-span-1 font-bold text-slate-500 uppercase tracking-wide text-xs">Mata Pelajaran</div>
        <div class="col-span-2 font-medium text-slate-800">{{ $teacher['subject'] ?? '-' }}</div>
        
        <div class="col-span-1 font-bold text-slate-500 uppercase tracking-wide text-xs">No. Telepon</div>
        <div class="col-span-2 font-medium text-slate-800">{{ $teacher['phone'] ?? $teacher['phone_number'] ?? '-' }}</div>

        <div class="col-span-1 font-bold text-slate-500 uppercase tracking-wide text-xs flex items-center">Status</div>
        <div class="col-span-2">
            <!-- Wajib menggunakan komponen custom di sini -->
            <x-status-badge :status="$teacher['status'] ?? 'Tidak Aktif'" />
        </div>
    </div>
</div>
@endsection