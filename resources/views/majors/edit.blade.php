@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="bg-white p-6 rounded-lg shadow-sm max-w-2xl mx-auto">
    <h2 class="text-xl font-semibold text-slate-800 mb-6">Ubah Data Jurusan</h2>
    
    <form action="{{ route('majors.update', $id) }}" method="POST">
        <!-- Karena masih dummy, kita anggap metode PUT form dikosongkan dahulu atau disesuaikan dengan template -->
        <div class="mb-4">
            <label for="code" class="block text-sm font-medium text-slate-700 mb-1">Kode Jurusan</label>
            <input type="text" name="code" id="code" value="Data Dummy Code" class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500" required>
        </div>
        
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Nama Jurusan</label>
            <input type="text" name="name" id="name" value="Data Dummy Nama" class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-6">
            <label for="description" class="block text-sm font-medium text-slate-700 mb-1">Deskripsi</label>
            <textarea name="description" id="description" rows="4" class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500" required>Data Dummy Deskripsi</textarea>
        </div>

        <div class="flex gap-3">
            <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600 text-sm">Perbarui Data</button>
            <a href="{{ route('majors.index') }}" class="bg-slate-200 text-slate-700 px-4 py-2 rounded-md hover:bg-slate-300 text-sm">Batal</a>
        </div>
    </form>
</div>
@endsection