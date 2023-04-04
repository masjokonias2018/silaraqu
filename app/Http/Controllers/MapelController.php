<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index(){
        $mapel= Mapel::all();
        return view('data.mapel', compact(['mapel']));
    }
}
