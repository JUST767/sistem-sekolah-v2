@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="bg-white p-6 rounded-lg shadow-sm max-w-2xl mx-auto">
    <h2 class="text-xl font-semibold text-slate-800 mb-6">Rincian Kelas</h2>
    
    <div class="space-y-4">
        <div>
            <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Nama Kelas</h4>
            <p class="mt-1 text-slate-800 font-bold">{{ $class['name'] }}</p>
        </div>
        <div>
            <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Tingkat</h4>
            <p class="mt-1 text-slate-800">{{ $class['grade'] ?? '-' }}</p>
        </div>
        <div>
            <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Jurusan</h4>
            <p class="mt-1 text-slate-800">{{ $class['major'] }}</p>
        </div>
        <div>
            <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Wali Kelas</h4>
            <p class="mt-1 text-slate-800">{{ $class['homeroom_teacher'] }}</p>
        </div>
    </div>

    <div class="mt-8 border-t pt-4">
        <a href="{{ route('classes.index') }}" class="bg-slate-200 text-slate-700 px-4 py-2 rounded-md hover:bg-slate-300 text-sm">Kembali ke Daftar</a>
    </div>
</div>
@endsection