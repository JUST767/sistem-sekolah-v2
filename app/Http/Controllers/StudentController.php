<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ',
            ],

            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ',
            ],

            [
                'id' => 3,
                'nis' => '1003',
                'name' => 'Nina',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ',
            ],
        ];
        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function show(string $id)
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        return view('students.show', [
            'title' => $title,
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        return view('students.create', [
            'title' => $title,
        ]);
    }


    public function edit(string $id)
    {
         $title = "Sistem Sekolah - Daftar Siswa";
        return view('students.edit', [
            'title' => $title,
        ]);
    }

    public function store()
    {
       $title = "Sistem Sekolah - Daftar Siswa";
        return view('students.store', [
            'title' => $title,
        ]);
    }

    public function update(string $id)
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        return view('students.update', [
            'title' => $title,
        ]);
    }

    public function destroy(string $id)
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        return view('students.destroy', [
            'title' => $title,
        ]);
    }
}

