@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="bg-white p-6 rounded-lg shadow-sm max-w-2xl mx-auto">
    <h2 class="text-xl font-semibold text-slate-800 mb-6">Tambah Jurusan Baru</h2>
    
    <form action="{{ route('majors.store') }}" method="POST">
        @csrf
        <!-- Input code -->
        <div class="mb-4">
            <label for="code" class="block text-sm font-medium text-slate-700 mb-1">Kode Jurusan</label>
            <input type="text" name="code" id="code" placeholder="Contoh: AKL, TKJ, BD" class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500" required>
        </div>
        
        <!-- Input name -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Nama Jurusan</label>
            <input type="text" name="name" id="name" placeholder="Contoh: Akuntansi dan Keuangan Lembaga" class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500" required>
        </div>

        <!-- Input description -->
        <div class="mb-6">
            <label for="description" class="block text-sm font-medium text-slate-700 mb-1">Deskripsi</label>
            <textarea name="description" id="description" rows="4" class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500" required></textarea>
        </div>

        <div class="flex gap-3">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 text-sm">Simpan</button>
            <a href="{{ route('majors.index') }}" class="bg-slate-200 text-slate-700 px-4 py-2 rounded-md hover:bg-slate-300 text-sm">Batal</a>
        </div>
    </form>
</div>
@endsection