<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa= Siswa::all();
        return view('member.siswa', compact(['siswa']));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required|max:50|min:3',
            'tanggal_lahir' => 'required',
        ]);
        $sis= Siswa::findOrFail($request->sis_id);
        $sis->update($request->all());
        return back()->with('suksesedit','Selamat, data yang anda ubah berhasil diupdate ke database aplikasi GPK-CBT');
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
        $add=new Siswa;
        $add->name=$request->name;
        $add->jenis_kelamin=$request->jenis_kelamin;
        $add->tempat_lahir=$request->tempat_lahir;
        $add->tanggal_lahir=$request->tanggal_lahir;
        $add->agama=$request->agama;
        $add->alamat=$request->alamat;
        $add->save();
        return back()->with('suksestambah','Selamat, data yang anda input berhasil disimpan ke database aplikasi GPK-CBT');
    }

    public function delete($id)
    {
        $data= Siswa::find($id);
        $data->delete();
        return back()->with('sukseshapus','Selamat, data yang anda delete berhasil dihapus dari database aplikasi GPK-CBT');
    }
}
