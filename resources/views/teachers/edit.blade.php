@extends('layouts.app')
@section('title', $title)

@section('content')
<div class="mb-8">
    <p class="text-[11px] text-yellow-600 font-bold tracking-widest uppercase mb-1">Data Guru</p>
    <h2 class="text-3xl font-bold text-[#151b2b]">Ubah Data Guru</h2>
</div>

<div class="bg-white border border-slate-200 p-8 max-w-3xl">
    <form action="{{ route('teachers.update', ['id' => $teacher['id']]) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-5">
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">NIP</label>
            <input type="text" name="nip" value="{{ $teacher['nip'] ?? '' }}" class="w-full border border-slate-300 px-4 py-2.5 text-sm focus:border-[#151b2b] focus:ring-0" required>
            
        </div>

        <div class="mb-5">
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">Nama Lengkap</label>
            <input type="text" name="name" value="{{ $teacher['name'] ?? '' }}" class="w-full border border-slate-300 px-4 py-2.5 text-sm focus:border-[#151b2b] focus:ring-0" required>
        </div>

        <div class="mb-5">
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">Jenis Kelamin</label>
            <select name="gender" class="w-full border border-slate-300 px-4 py-2.5 text-sm focus:border-[#151b2b] focus:ring-0" required>
                <option value="Laki-Laki" {{ ($teacher['gender'] ?? '') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="Perempuan" {{ ($teacher['gender'] ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-5">
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">Mata Pelajaran</label>
            <input type="text" name="subject" value="{{ $teacher['subject'] ?? '' }}" class="w-full border border-slate-300 px-4 py-2.5 text-sm focus:border-[#151b2b] focus:ring-0" required>
        </div>

        <div class="mb-5">
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">No. Telepon</label>
            <input type="text" name="phone_number" value="{{ $teacher['phone'] ?? $teacher['phone_number'] ?? '' }}" class="w-full border border-slate-300 px-4 py-2.5 text-sm focus:border-[#151b2b] focus:ring-0" required>
        </div>

        <div class="mb-8">
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-2">Status</label>
            <select name="status" class="w-full border border-slate-300 px-4 py-2.5 text-sm focus:border-[#151b2b] focus:ring-0" required>
                <option value="Aktif" {{ ($teacher['status'] ?? '') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="Tidak Aktif" {{ ($teacher['status'] ?? '') == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
            </select>
        </div>

        <div class="flex justify-end items-center gap-4 border-t border-slate-100 pt-6">
            <a href="{{ route('teachers.index') }}" class="text-sm font-medium text-slate-500 hover:text-slate-800">Batal</a>
            <button type="submit" class="bg-[#151b2b] text-white px-6 py-2.5 text-sm font-semibold hover:bg-slate-800 transition-colors">
                Perbarui Guru
            </button>
        </div>
    </form>
</div>
@endsection