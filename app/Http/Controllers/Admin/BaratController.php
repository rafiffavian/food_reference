<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Restoran;

class BaratController extends Controller
{
    public function index()
    {
        $barat = Restoran::where('id_wilayah','4')->get();
        return view('admin.admin-barat-table',compact('barat'));
    }

    public function create()
    {
        return view('admin.admin-barat-create');
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
        $path = $request->file('gambar_restoran')->store('public/baratupload');
        $data = (array)$request->except('_token');
        $data['gambar_restoran'] = $path;

        $barat = new Restoran;
        $barat->create($data);
        return redirect(route('admin.barat'));
    }
}
