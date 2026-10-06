@extends('layouts.app')
@section('title', $title)

@section('content')
<div class="mb-8 flex justify-between items-end">
    <div>
        <p class="text-[11px] text-yellow-600 font-bold tracking-widest uppercase mb-1">Data Kelas</p>
        <h2 class="text-3xl font-bold text-[#151b2b]">Rincian Kelas</h2>
    </div>
    <a href="{{ route('classes.index') }}" class="bg-slate-200 text-slate-800 px-5 py-2.5 text-sm font-semibold hover:bg-slate-300 transition-colors">
        Kembali ke Daftar
    </a>
</div>

<div class="bg-white border border-slate-200 p-8 max-w-3xl">
    <div class="grid grid-cols-3 gap-6 text-sm">
        <div class="col-span-1 font-bold text-slate-500 uppercase tracking-wide text-xs">Nama Kelas</div>
        <div class="col-span-2 font-medium text-slate-800">{{ $class['name'] ?? '-' }}</div>
        
        <div class="col-span-1 font-bold text-slate-500 uppercase tracking-wide text-xs">Tingkat</div>
        <div class="col-span-2 font-medium text-slate-800">{{ $class['grade'] ?? '-' }}</div>

        <div class="col-span-1 font-bold text-slate-500 uppercase tracking-wide text-xs">Jurusan</div>
        <div class="col-span-2 font-medium text-slate-800">{{ $class['major'] ?? '-' }}</div>

        <div class="col-span-1 font-bold text-slate-500 uppercase tracking-wide text-xs">Wali Kelas</div>
        <div class="col-span-2 font-medium text-slate-800">{{ $class['homeroom_teacher'] ?? '-' }}</div>
    </div>
</div>
@endsection