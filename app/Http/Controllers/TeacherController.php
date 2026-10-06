<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $title = 'Daftar Guru';

        // 1. Cek apakah ada data guru di dalam Session
        // Jika belum ada, kita masukkan data dummy awal ke dalam Session
        if (!session()->has('teachers')) {
            $dummyTeachers = [
                [
                    'id' => 1,
                    'nip' => '198501012024',
                    'name' => 'Budi Santoso',
                    'subject' => 'Akuntansi Dasar',
                    'status' => 'Aktif'
                ],
                [
                    'id' => 2,
                    'nip' => '198703152024',
                    'name' => 'Siti Aminah',
                    'subject' => 'Jaringan Komputer',
                    'status' => 'Aktif'
                ],
            ];
            session(['teachers' => $dummyTeachers]);
        }

        // 2. Ambil data dari Session untuk ditampilkan ke View
        $teachers = session('teachers');

        return view('teachers.index', compact('teachers', 'title'));
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Guru';
        return view('teachers.create', compact('title'));
    }

    public function edit($id)
    {
        $title = 'Ubah Data Guru';
        $teachers = session('teachers', []);

        // Mencari data guru di session berdasarkan ID
        $teacher = collect($teachers)->firstWhere('id', (int) $id);

        // Jika tidak ketemu, kembalikan ke index
        if (!$teacher) {
            return redirect()->route('teachers.index');
        }

        return view('teachers.edit', compact('teacher', 'title', 'id'));
    }

    public function show($id)
    {
        $title = 'Rincian Guru';
        $teachers = session('teachers', []);

        // Mencari data guru di session berdasarkan ID
        $teacher = collect($teachers)->firstWhere('id', (int) $id);

        // Jika data tidak ditemukan, kembalikan ke halaman daftar
        if (!$teacher) {
            return redirect()->route('teachers.index');
        }

        // Kirim data guru spesifik tersebut ke file view
        return view('teachers.show', compact('teacher', 'title'));
    }

    public function store(Request $request)
    {
        // 1. Ambil data guru yang saat ini ada di Session
        $teachers = session('teachers', []);

        // 2. Buat array data guru baru dari inputan form Anda
        $newTeacher = [
            'id' => count($teachers) + 1, // Membuat ID otomatis
            'nip' => $request->nip,
            'name' => $request->name,
            'subject' => $request->subject,
            'status' => $request->status,
        ];

        // 3. Tambahkan data guru baru tersebut ke dalam daftar yang sudah ada
        $teachers[] = $newTeacher;

        // 4. Simpan kembali daftar yang sudah diperbarui ke dalam Session
        session(['teachers' => $teachers]);

        // 5. Alihkan kembali ke halaman daftar guru
        return redirect()->route('teachers.index');
    }

    public function update(Request $request, $id)
    {
        $teachers = session('teachers', []);

        // Mencari urutan (index) data guru yang akan diubah
        $index = collect($teachers)->search(function ($item) use ($id) {
            return $item['id'] == $id;
        });

        if ($index !== false) {
            // Perbarui data pada index tersebut dengan data baru dari form
            $teachers[$index]['nip'] = $request->nip;
            $teachers[$index]['name'] = $request->name;
            $teachers[$index]['gender'] = $request->gender;
            $teachers[$index]['subject'] = $request->subject;
            $teachers[$index]['phone_number'] = $request->phone_number;
            $teachers[$index]['status'] = $request->status;

            // Simpan kembali daftar yang sudah diperbarui ke Session
            session(['teachers' => $teachers]);
        }

        return redirect()->route('teachers.index');
    }
    public function destroy($id)
    {
        // 1. Ambil data guru dari Session
        $teachers = session('teachers', []);

        // 2. Buang data yang ID-nya sama dengan ID yang mau dihapus
        $teachers = collect($teachers)->reject(function ($item) use ($id) {
            return $item['id'] == $id;
        })->values()->toArray(); // values() berguna untuk merapikan kembali urutan index array

        // 3. Simpan kembali sisa data ke dalam Session
        session(['teachers' => $teachers]);

        // 4. Alihkan kembali ke halaman daftar guru
        return redirect()->route('teachers.index');
    }
}