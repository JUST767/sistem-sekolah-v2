<?php

use App\Http\Controllers\MajorController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\DestroyController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\UpdateController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Manajemen Data Siswa (Action)
Route::name('students.')->prefix('students')->group(function () {
    // Halaman Daftar Siswa
    Route::get('/', [StudentController::class, 'index'])->name('index');

    // Halaman Detail Siswa
    Route::get('/{id}', [StudentController::class, 'show'])->name('show');

    // Halaman Tambah Siswa
    Route::get('/create', [StudentController::class, 'crete'])->name('create');

    // Halaman Edit Siswa
    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');

    // Logika Tambah Siswa
    Route::post('/', [StudentController::class, 'store'])->name('store');

    // Logika Edit Siswa
    Route::put('/{id}', [StudentController::class, 'update'])->name('update');

    // Logika Hapus Siswa
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
});

// Manajemen Data Guru (Action)
Route::name('teachers.')->prefix('teachers')->group(function () {
    // Halaman Daftar Guru
    Route::get('/', [TeacherController::class, 'index'])->name('index');

    // Halaman Tambah Guru 
    // (PENTING: diletakkan di atas {id} agar "create" tidak dibaca sebagai ID)
    Route::get('/create', [TeacherController::class, 'create'])->name('create');

    // Logika Tambah Guru
    Route::post('/', [TeacherController::class, 'store'])->name('store');

    // Halaman Detail Guru
    Route::get('/{id}', [TeacherController::class, 'show'])->name('show');

    // Halaman Edit Guru
    Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');

    // Logika Edit Guru
    Route::put('/{id}', [TeacherController::class, 'update'])->name('update');

    // Logika Hapus Guru
    Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('destroy');
});

// Manajemen Data Kelas (Invokable)

Route::get('/', function () {
    return view('welcome');
});

// Manajemen Data Kelas (Invokable)
Route::name('classes.')->prefix('classes')->group(function () {
    // Halaman Daftar kelas
    Route::get('/', IndexController::class)->name('index');

    // Halaman Tambah kelas 
    // (Diletakkan di atas {id} agar "create" tidak dibaca sebagai ID)
    Route::get('/create', CreateController::class)->name('create');

    // Halaman Detail kelas
    Route::get('/{id}', ShowController::class)->name('show');

    // Halaman Edit kelas
    Route::get('/{id}/edit', EditController::class)->name('edit');

    // Logika Tambah kelas
    Route::post('/', StoreController::class)->name('store');

    // Logika Edit kelas
    Route::put('/{id}', UpdateController::class)->name('update');

    // Logika Hapus kelas
    Route::delete('/{id}', DestroyController::class)->name('destroy');
});

// Manajemen data major (Resource)

Route::resource('majors', MajorController::class);