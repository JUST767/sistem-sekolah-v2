@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="bg-white p-6 rounded-lg shadow-sm">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-slate-800">Daftar Jurusan</h2>
        <a href="{{ route('majors.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 text-sm">
            + Tambah Jurusan
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b bg-slate-50">
                    <th class="py-3 px-4 font-medium text-slate-600 text-sm">Kode</th>
                    <th class="py-3 px-4 font-medium text-slate-600 text-sm">Nama Jurusan</th>
                    <th class="py-3 px-4 font-medium text-slate-600 text-sm">Deskripsi</th>
                    <th class="py-3 px-4 font-medium text-slate-600 text-sm">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($majors as $major)
                <tr class="border-b hover:bg-slate-50">
                    <td class="py-3 px-4 text-sm">{{ $major['code'] }}</td>
                    <td class="py-3 px-4 text-sm">{{ $major['name'] }}</td>
                    <td class="py-3 px-4 text-sm">{{ $major['description'] }}</td>
                    <td class="py-3 px-4 text-sm flex gap-3">
                        <a href="{{ route('majors.show', $major['id']) }}" class="text-blue-600 hover:underline">Lihat</a>
                        <a href="{{ route('majors.edit', $major['id']) }}" class="text-orange-500 hover:underline">Ubah</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection