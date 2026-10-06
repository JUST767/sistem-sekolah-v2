<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\Student\StoreRequest;   // Import StoreRequest
use App\Http\Requests\Student\UpdateRequest;  // Import UpdateRequest

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = Student::select(['id', 'nis', 'name', 'class', 'major'])->get(); 
        
        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function show(Student $student)
    {
        $title = 'Sistem Sekolah - Detail Siswa';

        return view('students.show', [
            'title' => $title,
            'student' => $student
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Siswa';
        return view('students.create', [
            'title' => $title,
        ]);
    }

    public function edit(Student $student)
    {
        $title = 'Sistem Sekolah - Ubah Siswa';
        return view('students.edit', [
            'title' => $title,
            'student' => $student
        ]);
    }

    public function store(StoreRequest $request) // Gunakan StoreRequest di sini
    {
        // Validasi otomatis dijalankan oleh class StoreRequest
        $validatedRequest = $request->validated();

        // Simpan data
        Student::create($validatedRequest);

        return redirect()->route('students.index');
    }

    public function update(Student $student, UpdateRequest $request)
    {
        // Validasi otomatis dijalankan oleh class UpdateRequest
        $validatedRequest = $request->validated();

        // Update Data
        $student->update($validatedRequest);

        return redirect()->route('students.index');
    }

    public function destroy(Student $student) // Beri spasi antara Student dan $student
    {
        // Jalankan perintah hapus
        $student->delete();
        
        return redirect()->route('students.index');
    }
}