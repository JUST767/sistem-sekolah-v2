<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $title = 'Daftar Kelas';

        if (!session()->has('classes')) {
            $dummyClasses = [
                ['id' => 1, 'name' => 'X RPL 1', 'major' => 'Rekayasa Perangkat Lunak', 'homeroom_teacher' => 'Budi Santoso'],
                ['id' => 2, 'name' => 'XI TKJ 1', 'major' => 'Teknik Komputer dan Jaringan', 'homeroom_teacher' => 'Siti Aminah'],
            ];
            session(['classes' => $dummyClasses]);
        }

        $classes = session('classes');
        return view('classes.index', compact('classes', 'title'));
    }
}