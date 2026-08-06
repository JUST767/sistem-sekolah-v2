<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        // Variabel title sesuai konteks halaman
        $title = 'Sistem Sekolah - Daftar Jurusan';

        // Data dummy jurusan
        $majors = [
            [
                'id' => 1,
                'code' => 'AKL',
                'name' => 'Akuntansi dan Keuangan Lembaga',
                'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',
            ],
            [
                'id' => 2,
                'code' => 'TKJ',
                'name' => 'Teknik Komputer dan Jaringan',
                'description' => 'Program keahlian yang membekali murid dengan kompetensi instalasi, konfigurasi, dan pemeliharaan jaringan komputer.',
            ],
            [
                'id' => 3,
                'code' => 'BD',
                'name' => 'Bisnis Digital',
                'description' => 'Program keahlian yang membekali murid dengan kompetensi pemasaran dan pengelolaan bisnis berbasis digital.',
            ],
        ];

        return view('majors.index', compact('title', 'majors'));
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Jurusan';
        return view('majors.create', compact('title'));
    }

    public function edit($id)
    {
        $title = 'Sistem Sekolah - Edit Jurusan';
        return view('majors.edit', compact('title', 'id'));
    }

    public function show($id)
    {
        $title = 'Sistem Sekolah - Detail Jurusan';
        return view('majors.show', compact('title', 'id'));
    }
}