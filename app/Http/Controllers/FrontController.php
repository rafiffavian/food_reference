<?php

namespace App\Http\Controllers;

use App\Wilayah;
use App\Restoran;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $jakut = \App\Wilayah::all();
        return view('layouts.index',compact('jakut'));
    }
    public function wilayah($id)
    {
        $data = Restoran::where('id_wilayah',$id)->get();
        return view('layouts.index-wilayah-restoran',compact('data'));
    }
}
