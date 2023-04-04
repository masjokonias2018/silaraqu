<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Guru;

class DashboardController extends Controller
{
    public function index(){
        $jumlah = Siswa::count();
        $jumlahg = Guru::count();
        return view('admin.dashboard', compact('jumlah','jumlahg'));
    }
}
