<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        return view('admin.admin-menu-table',compact('menu'));
    }

    public function create()
    {
        return view('admin.admin-menu-create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'nama_menu' => 'required',
            'id_jenismenu' =>'required',
            'id_restoran' => 'required',
            'harga' => 'required'

            ]);
            $menu = new Menu;
            $menu->create($request->except('_token'));
            return redirect(route('admin.menu'));

    }
}
