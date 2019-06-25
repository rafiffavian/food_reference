<?php

namespace App\Http\Controllers;

use App\Wilayah;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $jakut = \App\Wilayah::all();
        return view('layouts.index',compact('jakut'));
    }
}
