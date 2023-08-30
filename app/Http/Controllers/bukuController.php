<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class bukuController extends Controller
{
    //
    public function index()
    {
        $siswas=Siswa::latest()->paginate(10);
        return view('buku.index', compact('bukus'));
    }
}
