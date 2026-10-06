<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $classes = session('classes', []);
        
        $newClass = [
            'id' => count($classes) > 0 ? max(array_column($classes, 'id')) + 1 : 1,
            'name' => $request->name,
            'grade' => $request->grade ?? '-',
            'major' => $request->major_id,
            'homeroom_teacher' => $request->teacher_id,
        ];

        $classes[] = $newClass;
        session(['classes' => $classes]);

        return redirect()->route('classes.index');
    }
}