<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Wilayah;

class WilayahController extends Controller
{
    public function index()
    {
        $wilayah = Wilayah::all();
        return view('admin.admin-wilayah-table', compact('wilayah'));
    }

    public function create()
    {
        return view('admin.admin-wilayah-create');
    }
    public function store(Request $request)
    {
        $request->validate([

    		'nama_wilayah' => 'required',
    		'gambar_wilayah' => 'required|image|max:2048',
    		'deskripsi_wilayah' => 'required'
    	]);
    	 $path = $request->file('gambar_wilayah')->store('public/wilayahupload');
		 $data = (array)$request->except('_token');
         $data['gambar_wilayah'] = $path;
		 
    	$wilayah = new Wilayah;
        $wilayah->create($data);
        return redirect(route('admin.wilayah'));
    }
}
