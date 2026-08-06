@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="bg-white p-6 rounded-lg shadow-sm">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-slate-800">Daftar Guru</h2>
        <a href="{{ route('teachers.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 text-sm">
            + Tambah Guru
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b bg-slate-50">
                    <th class="py-3 px-4 font-medium text-slate-600 text-sm">NIP</th>
                    <th class="py-3 px-4 font-medium text-slate-600 text-sm">Nama Lengkap</th>
                    <th class="py-3 px-4 font-medium text-slate-600 text-sm">Mata Pelajaran</th>
                    <th class="py-3 px-4 font-medium text-slate-600 text-sm">Status</th>
                    <th class="py-3 px-4 font-medium text-slate-600 text-sm">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teachers as $teacher)
                <tr class="border-b hover:bg-slate-50">
                    <td class="py-3 px-4 text-sm">{{ $teacher['nip'] }}</td>
                    <td class="py-3 px-4 text-sm">{{ $teacher['name'] }}</td>
                    <td class="py-3 px-4 text-sm">{{ $teacher['subject'] }}</td>
                    <td class="py-3 px-4 text-sm">
                        <!-- Memanggil Custom Component -->
                        <x-status-badge :status="$teacher['status']" />
                    </td>
                    <td class="py-3 px-4 text-sm flex gap-3">
                        <a href="{{ route('teachers.show', $teacher['id']) }}" class="text-blue-600 hover:underline">Lihat</a>
                        <a href="{{ route('teachers.edit', $teacher['id']) }}" class="text-orange-500 hover:underline">Ubah</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection