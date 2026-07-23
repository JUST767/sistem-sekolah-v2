<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "ini adalah halaman daftar guru";
    }
    
    public function show(string $id)
    {
        return "Menampilkan detail guru dengan ID: {$id}";
    }
    
    public function create()
    {
        return "ini adalah halaman tambah guru";
    }
    
    public function edit(string $id)
    {
        return "ini adalah halaman edit guru dengan ID: {$id}";
    }
    
    public function store()
    {
        return "Melakukan penambahan data guru baru";
    }
    
    public function update(string $id)
    {
        return "mengubah data guru dengan ID: {$id}";
    }
    
    public function destroy(string $id)
    {
        return "Menghapus data guru dengan ID: {$id}";
    }
}