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

        return view('classes.edit', compact('class', 'title', 'id'));
    }
}