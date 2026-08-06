<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Guru';
        
        $teachers = [
            [
                'id' => 1,
                'nip' => '198501012024',
                'name' => 'Budi Santoso',
                'gender' => 'Laki-Laki',
                'subject' => 'Akuntansi Dasar',
                'phone' => '081234560001',
                'status' => 'Aktif',
            ],
            [
                'id' => 2,
                'nip' => '198703152024',
                'name' => 'Siti Aminah',
                'gender' => 'Perempuan',
                'subject' => 'Jaringan Komputer',
                'phone' => '081234560002',
                'status' => 'Aktif',
            ]
        ];

        return view('teachers.index', compact('title', 'teachers'));
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Guru';
        return view('teachers.create', compact('title'));
    }

    public function edit($id)
    {
        $title = 'Sistem Sekolah - Edit Guru';
        return view('teachers.edit', compact('title', 'id'));
    }

    public function show($id)
    {
        $title = 'Sistem Sekolah - Detail Guru';
        return view('teachers.show', compact('title', 'id'));
    }
}