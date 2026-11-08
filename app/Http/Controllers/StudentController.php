<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\Student\StoreRequest;   // Import StoreRequest
use App\Http\Requests\Student\UpdateRequest;
use Illuminate\Routing\Events\Routing;
use Request;// Import UpdateRequest

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Sistem Sekolah - Daftar Siswa';
        $search = $request->query('search');
        $class = $request->query('class');
        $major = $request->query('major');

        $students = Student::select(['id', 'nis', 'name', 'class', 'major'])
            ->when($search, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('nis', 'like', "%{$search}%");
                });
            })

            ->when($class, fn($query, $class) => $query->where('class', '=', $class))
            ->when($major, fn($query, $major) => $query->where('major', '=', $major))
            ->paginate(10)
            ->withQueryString();

        $schoolClasses = ['10 AKL', '11 AKL', '11 TKJ 1', '11 TKJ 2', '10 BiD', '12 TKJ 1', '12 TKJ 2', '12 TKJ 3'];
        $majors = ['AKL', 'BiD', 'TKJ'];


        return view('students.index', [
            'title' => $title,
            'students' => $students,
            'classes' => $schoolClasses,
            'majors' => $majors
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