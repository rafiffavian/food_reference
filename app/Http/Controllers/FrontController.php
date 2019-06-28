<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Wilayah;
use App\Restoran;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $jakut = \App\Wilayah::all();
        $bgg = \App\gambarBack::orderBy('created_at','desc')->first();
        return view('layouts.index',compact(['jakut','bgg']));
    }
    public function wilayah($id)
    {
        $data = Restoran::where('id_wilayah',$id)->get();
        return view('layouts.index-wilayah-restoran',compact('data'));
    }
    public function menu($id)
    {
        $food = Menu::where('id_restoran',$id)->get();
        return view('layouts.index-restoran-menu',compact('food'));
    }
}
