<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $classes = session('classes', []);
        
        $index = collect($classes)->search(function ($item) use ($id) {
            return $item['id'] == $id;
        });

        if ($index !== false) {
            $classes[$index]['name'] = $request->name;
            $classes[$index]['grade'] = $request->grade ?? $classes[$index]['grade'] ?? '-';
            $classes[$index]['major'] = $request->major;
            $classes[$index]['homeroom_teacher'] = $request->homeroom_teacher;

            session(['classes' => $classes]);
        }

        return redirect()->route('classes.index');
    }
}