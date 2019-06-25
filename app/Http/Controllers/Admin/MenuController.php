<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use App\TypeMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;

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
            // dd($request->id_restoran);
            $menu->create($request->except('_token'));
            return redirect(route('admin.menu'));

    }

    public function getJsonData(Request $request)
    {
        $query = Menu::query();
        $query->with('tipeMenu','tipeRestoran');
        return Datatables::of($query)->make(true);

    }
}
