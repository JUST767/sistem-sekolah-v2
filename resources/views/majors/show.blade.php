@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="bg-white p-6 rounded-lg shadow-sm max-w-2xl mx-auto">
    <h2 class="text-xl font-semibold text-slate-800 mb-6">Rincian Jurusan</h2>
    
    <div class="space-y-4">
        <div>
            <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Kode Jurusan</h4>
            <p class="mt-1 text-slate-800">AKL</p>
        </div>
        <div>
            <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Nama Jurusan</h4>
            <p class="mt-1 text-slate-800">Akuntansi dan Keuangan Lembaga</p>
        </div>
        <div>
            <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Deskripsi</h4>
            <p class="mt-1 text-slate-800">Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.</p>
        </div>
    </div>

    <div class="mt-8 border-t pt-4">
        <a href="{{ route('majors.index') }}" class="bg-slate-200 text-slate-700 px-4 py-2 rounded-md hover:bg-slate-300 text-sm">Kembali ke Daftar</a>
    </div>
</div>
@endsection