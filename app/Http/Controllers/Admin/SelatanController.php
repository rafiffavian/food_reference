<?php

namespace App\Http\Controllers\Admin;

use App\Restoran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SelatanController extends Controller
{
    public function index()
    {
        $selatan = Restoran::where('id_wilayah','5')->get();
        return view('admin.admin-selatan-table',compact('selatan'));
    }
    public function create()
    {
        return view('admin.admin-selatan-create');
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
        $path = $request->file('gambar_restoran')->store('public/selatanupload');
        $data = (array)$request->except('_token');
        $data['gambar_restoran'] = $path;

        $selatan = new Restoran;
        $selatan->create($data);
        return redirect(route('admin.selatan'));
    }
}
