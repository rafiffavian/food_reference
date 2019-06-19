<?php

namespace App\Http\Controllers\Admin;

use App\Restoran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UtaraController extends Controller
{
    public function index()
    {
        $utara = Restoran::where('id_wilayah','2')->get();
        return view('admin.admin-utara-table',compact('utara'));
    }
    public function create()
    {
        return view('admin.admin-utara-create');
    }
    public function store(Request $request)
    {
        $request->validate([

    		'id_wilayah' => 'required',
    		'gambar_restoran' => 'required|image|max:2048',
    		'nama_restoran' => 'required',
    		'deskripsi_restoran' => 'required',
    		'alamat_restoran' => 'required'
    		
    	]);
    	 $path = $request->file('gambar_restoran')->store('public/utaraupload');
		 $data = (array)$request->except('_token');
         $data['gambar_restoran'] = $path;
		 
         $utara = new Restoran;
         $utara->create($data);
         return redirect(route('admin.utara'));
    }
}
