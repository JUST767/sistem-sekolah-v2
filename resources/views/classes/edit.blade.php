@extends('layouts.app')
@section('title', $title ?? 'Tambah Kelas')

@section('content')
<div class="mb-8">
    <p class="text-[11px] text-yellow-600 font-bold tracking-widest uppercase mb-1">Data Kelas</p>
    <h2 class="text-3xl font-bold text-[#151b2b]">Tambah Kelas</h2>
    <p class="text-sm text-slate-500 mt-1">Mencatat kelas baru ke dalam sistem.</p>
</div>

<div class="bg-white border border-slate-200 p-8 max-w-3xl">
    <form action="{{ route('classes.store') }}" method="POST">
        @csrf
        
        <div class="mb-5">
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">Nama Kelas</label>
            <input type="text" name="name" class="w-full border border-slate-300 px-4 py-2.5 text-sm focus:border-[#151b2b] focus:ring-0" placeholder="Contoh: XII AKL 1" required>
        </div>

        <div class="mb-5">
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">Tingkat</label>
            <select name="grade" class="w-full border border-slate-300 px-4 py-2.5 text-sm focus:border-[#151b2b] focus:ring-0" required>
                <option value="">Pilih Tingkat...</option>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select>
        </div>

        <!-- Opsi Manual Jurusan -->
        <div class="mb-5">
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">Jurusan</label>
            <select name="major_id" class="w-full border border-slate-300 px-4 py-2.5 text-sm focus:border-[#151b2b] focus:ring-0" required>
                <option value="">Pilih Jurusan...</option>
                <option value="1">Teknik Komputer dan Jaringan (TKJ)</option>
                <option value="2">Akuntansi dan Keuangan Lembaga (AKL)</option>
                <option value="3">Bisnis Digital (BID)</option>
            </select>
        </div>

        <!-- Opsi Manual Wali Kelas -->
        <div class="mb-8">
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">Wali Kelas</label>
            <select name="teacher_id" class="w-full border border-slate-300 px-4 py-2.5 text-sm focus:border-[#151b2b] focus:ring-0" required>
                <option value="">Pilih Wali Kelas...</option>
                <option value="1">Budi Santoso</option>
                <option value="2">Siti Aminah</option>
            </select>
        </div>

        <div class="flex justify-end items-center gap-4 border-t border-slate-100 pt-6">
            <a href="{{ route('classes.index') }}" class="text-sm font-medium text-slate-500 hover:text-slate-800">Batal</a>
            <button type="submit" class="bg-[#151b2b] text-white px-6 py-2.5 text-sm font-semibold hover:bg-slate-800 transition-colors">
                Simpan Kelas
            </button>
        </div>
    </form>
</div>
@endsection