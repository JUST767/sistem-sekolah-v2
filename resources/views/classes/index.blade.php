@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="bg-white p-6 rounded-lg shadow-sm">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-slate-800">Daftar Kelas</h2>
        <a href="{{ route('classes.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 text-sm">
            + Tambah Kelas
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b bg-slate-50">
                    <th class="py-3 px-4 font-medium text-slate-600 text-sm">Nama Kelas</th>
                    <th class="py-3 px-4 font-medium text-slate-600 text-sm">Tingkat</th>
                    <th class="py-3 px-4 font-medium text-slate-600 text-sm">Jurusan</th>
                    <th class="py-3 px-4 font-medium text-slate-600 text-sm">Wali Kelas</th>
                    <th class="py-3 px-4 font-medium text-slate-600 text-sm">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($classes as $classItem)
                <tr class="border-b hover:bg-slate-50">
                    <td class="py-3 px-4 text-sm">{{ $classItem['name'] }}</td>
                    <td class="py-3 px-4 text-sm">{{ $classItem['grade'] }}</td>
                    <td class="py-3 px-4 text-sm">{{ $classItem['major'] }}</td>
                    <td class="py-3 px-4 text-sm">{{ $classItem['homeroom_teacher'] }}</td>
                    <td class="py-3 px-4 text-sm flex gap-3">
                        <a href="{{ route('classes.show', $classItem['id']) }}" class="text-blue-600 hover:underline">Lihat</a>
                        <a href="{{ route('classes.edit', $classItem['id']) }}" class="text-orange-500 hover:underline">Ubah</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection