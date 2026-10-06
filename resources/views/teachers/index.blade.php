@extends('layouts.app')
@section('title', $title)

@section('content')
    <div class="mb-8 flex justify-between items-end">
        <div>
            <p class="text-[11px] text-yellow-600 font-bold tracking-widest uppercase mb-1">Tahun Ajaran 2025/2026</p>
            <h2 class="text-3xl font-bold text-[#151b2b]">Daftar Guru</h2>
        </div>
        <a href="{{ route('teachers.create') }}"
            class="bg-[#151b2b] text-white px-5 py-2.5 text-sm font-semibold hover:bg-slate-800 transition-colors">
            Catat Guru Baru
        </a>
    </div>

    <div class="bg-white border border-slate-200">
        <table class="w-full text-left text-sm">
            <thead class="border-y border-slate-300 bg-white text-slate-600 text-xs font-bold uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-4">No.</th>
                    <th class="px-6 py-4">NIP</th>
                    <th class="px-6 py-4">Nama Guru</th>
                    <th class="px-6 py-4">Jenis Kelamin</th>
                    <th class="px-6 py-4">Mata Pelajaran</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4 text-center">Tindakan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700">
                @foreach($teachers as $index => $teacher)
                    <tr>
                        <td class="px-6 py-4">{{ $index + 1 }}</td>
                        <td class="px-6 py-4">{{ $teacher['nip'] ?? '-' }}</td>
                        <td class="px-6 py-4">{{ $teacher['name'] ?? '-' }}</td>
                        <td class="px-6 py-4">{{ $teacher['gender'] ?? '-' }}</td>
                        <td class="px-6 py-4">{{ $teacher['subject'] ?? '-' }}</td>
                        <td class="px-6 py-4">
                            <!-- Pemanggilan custom component badge -->
                            <x-status-badge :status="$teacher['status']" />
                        </td>
                        <td class="px-6 py-4 text-xs font-medium flex justify-center gap-4">
                            <a href="{{ route('teachers.show', ['id' => $teacher['id']]) }}"
                                class="text-slate-700 hover:underline">Lihat</a>
                            <a href="{{ route('teachers.edit', ['id' => $teacher['id']]) }}"
                                class="text-slate-700 hover:underline">Ubah</a>
                            <form action="{{ route('teachers.destroy', ['id' => $teacher['id']]) }}" method="POST"
                                class="inline">
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