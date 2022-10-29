<?php

namespace App\Http\Controllers;

use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::orderBy('no_pendaftaran', 'desc')->paginate(20);
        return view('index', compact('siswas'));
    }
}