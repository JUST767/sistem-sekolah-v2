@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="bg-white p-6 rounded-lg shadow-sm max-w-2xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-slate-800">Rincian Guru</h2>
        <!-- Memanggil komponen status agar dinamis sesuai status guru -->
        <x-status-badge :status="$teacher['status']" />
    </div>
    
    <div class="space-y-4">
        <div>
            <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">NIP</h4>
            <p class="mt-1 text-slate-800">{{ $teacher['nip'] }}</p>
        </div>
        <div>
            <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Nama Lengkap</h4>
            <p class="mt-1 text-slate-800">{{ $teacher['name'] }}</p>
        </div>
        <div>
            <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Jenis Kelamin</h4>
            <p class="mt-1 text-slate-800">{{ $teacher['gender'] ?? '-' }}</p>
        </div>
        <div>
            <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Mata Pelajaran</h4>
            <p class="mt-1 text-slate-800">{{ $teacher['subject'] }}</p>
        </div>
        <div>
            <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Nomor HP</h4>
            <p class="mt-1 text-slate-800">{{ $teacher['phone'] ?? '-' }}</p>
        </div>
    </div>

    <div class="mt-8 border-t pt-4">
        <a href="{{ route('teachers.index') }}" class="bg-slate-200 text-slate-700 px-4 py-2 rounded-md hover:bg-slate-300 text-sm">Kembali ke Daftar</a>
    </div>
</div>
@endsection