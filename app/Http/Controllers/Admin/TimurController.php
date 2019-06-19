<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Restoran;

class TimurController extends Controller
{
    public function index()
    {
        $timur = Restoran::where('id_wilayah','3')->get();
        return view('admin.admin-timur-table', compact('timur'));
    }

    public function create()
    {
        return view('admin.admin-timur-create');
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

        $path = $request->file('gambar_restoran')->store('public/timurupload');
        $data = (array)$request->except('_token');
        $data['gambar_restoran'] = $path;

        $timur = new Restoran;
        $timur->create($data);
        return redirect(route('admin.timur'));

    }

}
