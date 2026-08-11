<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $title = 'Rincian Kelas';
        $classes = session('classes', []);
        
        $class = collect($classes)->firstWhere('id', (int)$id);

        if (!$class) {
            return redirect()->route('classes.index');
        }

        return view('classes.show', compact('class', 'title'));
    }
}