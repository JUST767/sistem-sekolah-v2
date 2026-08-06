@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="bg-white p-6 rounded-lg shadow-sm max-w-2xl mx-auto">
    <h2 class="text-xl font-semibold text-slate-800 mb-6">Ubah Data Kelas</h2>
    
    <form action="{{ route('classes.update', $id) }}" method="POST">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Nama Kelas</label>
            <input type="text" name="name" id="name" value="XII AKL 1" class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500" required>
        </div>
        
        <div class="mb-4">
            <label for="grade" class="block text-sm font-medium text-slate-700 mb-1">Tingkat</label>
            <select name="grade" id="grade" class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500" required>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII" selected>XII</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="major_id" class="block text-sm font-medium text-slate-700 mb-1">Jurusan</label>
            <select name="major_id" id="major_id" class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500" required>
                <option value="1" selected>Akuntansi dan Keuangan Lembaga (AKL)</option>
                <option value="2">Teknik Komputer dan Jaringan (TKJ)</option>
            </select>
        </div>

        <div class="mb-6">
            <label for="teacher_id" class="block text-sm font-medium text-slate-700 mb-1">Wali Kelas</label>
            <select name="teacher_id" id="teacher_id" class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500" required>
                <option value="1" selected>Budi Santoso</option>
                <option value="2">Siti Aminah</option>
            </select>
        </div>

        <div class="flex gap-3">
            <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600 text-sm">Perbarui Data</button>
            <a href="{{ route('classes.index') }}" class="bg-slate-200 text-slate-700 px-4 py-2 rounded-md hover:bg-slate-300 text-sm">Batal</a>
        </div>
    </form>
</div>
@endsection