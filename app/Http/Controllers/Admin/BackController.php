<?php

namespace App\Http\Controllers\Admin;

use App\gambarBack;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackController extends Controller
{
    public function index()
    {
        $bgk = gambarBack::all();
        return view('admin.admin-bg-table',compact('bgk'));
    }

    public function create()
    {
        return view('admin.admin-bg-create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'background' => 'required',
    		'title' => 'required'
    		
        ]);
        $path = $request->file('background')->store('public/backupload');
        $data = (array)$request->except('_token');
        $data['background'] = $path;

        $bgk = new gambarBack;
        $bgk->create($data);
        return redirect(route('admin.bg'));
    }
}
