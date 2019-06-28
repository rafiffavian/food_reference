<?php

namespace App\Http\Controllers\Admin;

use App\Restoran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class PusatController extends Controller
{
    public function index()
    {
        $pusat = Restoran::where('id_wilayah','6')->get();
        return view('admin.admin-pusat-table',compact('pusat'));
    }
    public function create()
    {
        return view('admin.admin-pusat-create');
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
        $path = $request->file('gambar_restoran')->store('public/pusatupload');
        $data = (array)$request->except('_token');
        $data['gambar_restoran'] = $path;

        $pusat = new Restoran;
        $pusat->create($data);
        return redirect(route('admin.pusat'));
    }
}
