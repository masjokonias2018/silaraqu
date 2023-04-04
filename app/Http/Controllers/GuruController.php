<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $guru= Guru::all();
        return view('member.guru', compact(['guru']));
    }

    public function profile($id)
    {
        $profile = Guru::find($id);
        return view('member.profile_guru', compact(['profile']));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required|max:50|min:3',
            'tanggal_lahir' => 'required',
        ]);
        $add=new Guru;
        $add->name=$request->name;
        $add->jenis_kelamin=$request->jenis_kelamin;
        $add->tempat_lahir=$request->tempat_lahir;
        $add->tanggal_lahir=$request->tanggal_lahir;
        $add->agama=$request->agama;
        $add->alamat=$request->alamat;
        $add->mapel_id=1;
        $add->save();
        return back()->with('suksestambah','Selamat, data yang anda input berhasil disimpan ke database aplikasi GPK-CBT');
    }


}
