@extends('layouts.app')
@section('title', $title)

@section('content')
    <div class="mb-8 flex justify-between items-end">
        <div>
            <p class="text-[11px] text-yellow-600 font-bold tracking-widest uppercase mb-1">Tahun Ajaran 2025/2026</p>
            <h2 class="text-3xl font-bold text-[#151b2b]">Daftar Kelas</h2>
        </div>
        <a href="{{ route('classes.create') }}"
            class="bg-[#151b2b] text-white px-5 py-2.5 text-sm font-semibold hover:bg-slate-800 transition-colors">
            Catat Kelas Baru
        </a>
    </div>

    <div class="bg-white border border-slate-200">
        <table class="w-full text-left text-sm">
            <thead class="border-y border-slate-300 bg-white text-slate-600 text-xs font-bold uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-4">No.</th>
                    <th class="px-6 py-4">Nama Kelas</th>
                    <th class="px-6 py-4">Tingkat</th>
                    <th class="px-6 py-4">Jurusan</th>
                    <th class="px-6 py-4">Wali Kelas</th>
                    <th class="px-6 py-4 text-center">Tindakan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700">
                @foreach($classes as $index => $class)
                    <tr>
                        <td class="px-6 py-4">{{ $index + 1 }}</td>
                        <td class="px-6 py-4">{{ $class['name'] }}</td>
                        <td class="px-6 py-4">{{ $class['grade'] ?? '-' }}</td>
                        <td class="px-6 py-4">{{ $class['major'] ?? '-' }}</td>
                        <td class="px-6 py-4">{{ $class['homeroom_teacher'] ?? '-' }}</td>
                        <td class="px-6 py-4 text-xs font-medium flex justify-center gap-4">
                            <a href="{{ route('classes.show', ['id' => $class['id']]) }}"
                                class="text-slate-700 hover:underline">Lihat</a>
                            <a href="{{ route('classes.edit', ['id' => $class['id']]) }}"
                                class="text-slate-700 hover:underline">Ubah</a>
                            <form action="{{ route('classes.destroy', ['id' => $class['id']]) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection