<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $title = 'Daftar Jurusan';

        // 1. Cek apakah ada data jurusan di Session
        if (!session()->has('majors')) {
            $dummyMajors = [
                ['id' => 1, 'code' => 'RPL', 'name' => 'Rekayasa Perangkat Lunak', 'description' => 'Fokus pada pengembangan software dan aplikasi.'],
                ['id' => 2, 'code' => 'TKJ', 'name' => 'Teknik Komputer dan Jaringan', 'description' => 'Fokus pada hardware, jaringan, dan server.'],
            ];
            session(['majors' => $dummyMajors]);
        }

        $majors = session('majors');
        return view('majors.index', compact('majors', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Jurusan';
        return view('majors.create', compact('title'));
    }

    public function store(Request $request)
    {
        $majors = session('majors', []);
        
        $newMajor = [
            'id' => count($majors) > 0 ? max(array_column($majors, 'id')) + 1 : 1,
            'code' => $request->code,
            'name' => $request->name,
            'description' => $request->description,
        ];

        $majors[] = $newMajor;
        session(['majors' => $majors]);

        return redirect()->route('majors.index');
    }

    public function show($id)
    {
        $title = 'Rincian Jurusan';
        $majors = session('majors', []);
        
        $major = collect($majors)->firstWhere('id', (int)$id);

        if (!$major) return redirect()->route('majors.index');

        return view('majors.show', compact('major', 'title'));
    }

    public function edit($id)
    {
        $title = 'Ubah Data Jurusan';
        $majors = session('majors', []);
        
        $major = collect($majors)->firstWhere('id', (int)$id);

        if (!$major) return redirect()->route('majors.index');

        return view('majors.edit', compact('major', 'title', 'id'));
    }

    public function update(Request $request, $id)
    {
        $majors = session('majors', []);
        
        $index = collect($majors)->search(function ($item) use ($id) {
            return $item['id'] == $id;
        });

        if ($index !== false) {
            $majors[$index]['code'] = $request->code;
            $majors[$index]['name'] = $request->name;
            $majors[$index]['description'] = $request->description;
            session(['majors' => $majors]);
        }

        return redirect()->route('majors.index');
    }

    public function destroy($id)
    {
        $majors = session('majors', []);
        
        $majors = collect($majors)->reject(function ($item) use ($id) {
            return $item['id'] == $id;
        })->values()->toArray(); 

        session(['majors' => $majors]);

        return redirect()->route('majors.index');
    }
}