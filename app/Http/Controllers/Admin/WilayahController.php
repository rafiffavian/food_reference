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

    public function edit($id)
    {
        $wil = Wilayah::findOrFail($id);
        return view('admin.admin-wilayah-edit',compact('wil'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([

    		'nama_wilayah' => 'required',
    		'gambar_wilayah' => 'required|image|max:2048',
    		'deskripsi_wilayah' => 'required'
        ]);

        $data = (array)$request->except(['_token','gambar_wilayah']);
         if ($request->has('gambar_wilayah')){
            $path = $request->file('gambar_wilayah')->store('public/wilayahupload');
            $data['gambar_wilayah'] = $path;
         }
         $wil = Wilayah::findOrFail($id);

         $wil->update($data);
         $wil->save();
        return redirect(route('admin.wilayah'));  
    }
    public function delete($id)
    {
        \App\Wilayah::findOrFail($id)->delete();
        return redirect(route('admin.wilayah'));
    }
}
