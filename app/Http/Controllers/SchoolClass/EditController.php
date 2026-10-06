<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke($id)
    {
        $title = 'Ubah Data Kelas';
        $classes = session('classes', []);
        
        $class = collect($classes)->firstWhere('id', (int)$id);

        if (!$class) {
            return redirect()->route('classes.index');
        }

        // 1. Ambil data jurusan dan guru dari session
        $majors = session('majors', []);
        $teachers = session('teachers', []);

        // 2. Tambahkan 'majors' dan 'teachers' ke dalam compact()
        return view('classes.edit', compact('class', 'title', 'id', 'majors', 'teachers'));
    }
}