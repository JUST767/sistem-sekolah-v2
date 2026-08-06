@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="bg-white p-6 rounded-lg shadow-sm max-w-2xl mx-auto">
    <h2 class="text-xl font-semibold text-slate-800 mb-6">Ubah Data Guru</h2>
    
    <form action="{{ route('teachers.update', $id) }}" method="POST">
        <div class="mb-4">
            <label for="nip" class="block text-sm font-medium text-slate-700 mb-1">NIP</label>
            <input type="text" name="nip" id="nip" value="198501012024" class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500" required>
        </div>
        
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Nama Lengkap</label>
            <input type="text" name="name" id="name" value="Budi Santoso" class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="gender" class="block text-sm font-medium text-slate-700 mb-1">Jenis Kelamin</label>
            <select name="gender" id="gender" class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500" required>
                <option value="Laki-Laki" selected>Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="subject" class="block text-sm font-medium text-slate-700 mb-1">Mata Pelajaran</label>
            <input type="text" name="subject" id="subject" value="Akuntansi Dasar" class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-slate-700 mb-1">Nomor HP</label>
            <input type="text" name="phone" id="phone" value="081234560001" class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-6">
            <label for="status" class="block text-sm font-medium text-slate-700 mb-1">Status</label>
            <select name="status" id="status" class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500" required>
                <option value="Aktif" selected>Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
        </div>

        <div class="flex gap-3">
            <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600 text-sm">Perbarui Data</button>
            <a href="{{ route('teachers.index') }}" class="bg-slate-200 text-slate-700 px-4 py-2 rounded-md hover:bg-slate-300 text-sm">Batal</a>
        </div>
    </form>
</div>
@endsection