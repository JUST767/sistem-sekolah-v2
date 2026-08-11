<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke($id)
    {
        $classes = session('classes', []);
        
        $classes = collect($classes)->reject(function ($item) use ($id) {
            return $item['id'] == $id;
        })->values()->toArray(); 

        session(['classes' => $classes]);

        return redirect()->route('classes.index');
    }
}