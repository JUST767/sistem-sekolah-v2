@extends('layouts.app')
@section('title', $title)

@section('content')
<div class="mb-8">
    <p class="text-[11px] text-yellow-600 font-bold tracking-widest uppercase mb-1">Data Jurusan</p>
    <h2 class="text-3xl font-bold text-[#151b2b]">Tambah Jurusan</h2>
    <p class="text-sm text-slate-500 mt-1">Mencatat jurusan baru ke dalam sistem.</p>
</div>

<div class="bg-white border border-slate-200 p-8 max-w-3xl">
    <form action="{{ route('majors.store') }}" method="POST">
        @csrf
        
        <div class="mb-5">
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">Kode Jurusan</label>
            <input type="text" name="code" class="w-full border border-slate-300 px-4 py-2.5 text-sm focus:border-[#151b2b] focus:ring-0" placeholder="Contoh: TKJ" required>
        </div>

        <div class="mb-5">
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">Nama Jurusan</label>
            <input type="text" name="name" class="w-full border border-slate-300 px-4 py-2.5 text-sm focus:border-[#151b2b] focus:ring-0" required>
        </div>

        <div class="mb-8">
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">Deskripsi</label>
            <textarea name="description" rows="4" class="w-full border border-slate-300 px-4 py-2.5 text-sm focus:border-[#151b2b] focus:ring-0" required></textarea>
        </div>

        <div class="flex justify-end items-center gap-4 border-t border-slate-100 pt-6">
            <a href="{{ route('majors.index') }}" class="text-sm font-medium text-slate-500 hover:text-slate-800">Batal</a>
            <button type="submit" class="bg-[#151b2b] text-white px-6 py-2.5 text-sm font-semibold hover:bg-slate-800 transition-colors">
                Simpan Jurusan
            </button>
        </div>
    </form>
</div>
@endsection