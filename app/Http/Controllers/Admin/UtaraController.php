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
    public function edit($id)
    {
        $utara = Restoran::findOrFail($id);
        return view('admin.admin-utara-edit',compact('utara'));
    }

    public function update(Request $request , $id)
    {
        $request->validate([

    		'id_wilayah' => 'required',
    		'gambar_restoran' => 'required|image|max:2048',
    		'nama_restoran' => 'required',
    		'deskripsi_restoran' => 'required',
    		'alamat_restoran' => 'required'
    		
        ]);
        $data = (array)$request->except(['_token','gambar_restoran']);
         if ($request->has('gambar_restoran')){
            $path = $request->file('gambar_restoran')->store('public/utaraupload');
            $data['gambar_restoran'] = $path;
         }
         $utara = Wilayah::findOrFail($id);

         $utara->update($data);
         $utara->save();
        return redirect(route('admin.utara'));  
    }

    public function delete($id)
    {
        \App\Restoran::findOrFail($id)->delete();
        return redirect(route('admin.utara'));
    }
}
