<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index(){
        $kelas= Kelas::all();
        return view('data.kelas', compact(['kelas']));
    }
}
