<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "ini adalah halaman daftar siswa";
    }
    public function show(string $id)
    {
        return "Menampilkan detail siswa dengan ID: {$id}";
    }
       public function create(string $id)
    {
        return "ini adalah halaman tambah siswa";
    }
       public function edit(string $id)
    {
        return "ini adalah halaman edit siswa dengan ID: {$id}";
    }
     public function store()
    {
        return "Melakukan penambahan data siswa baru";
    }
    public function update(string $id)
    {
        return "mengubah data siswa dengan ID: {$id}";
    }
    public function destroy(string $id)
    {
        return "Menghapus data siswa dengan ID: {$id}";
    }
}
