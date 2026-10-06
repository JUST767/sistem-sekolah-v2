<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $title = 'Tambah Kelas';
        $majors = session('majors', []);
        $teachers = session('teachers', []);
        return view('classes.create', compact('title'));
    }
}