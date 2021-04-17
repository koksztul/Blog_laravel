<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DelModController extends Controller
{
    public function index()
    {
        $mods = DB::table('users')
        ->get()
        ->where('group_id', 1);
        return view('adminlte.delmod', ['mods' => $mods]);
    }
    public function delMod(Request $req)
    {
        DB::table('users')
        ->where('id', $req->id)
        ->update(
            [
            'group_id' => 0
            ]
        );
        return redirect('del-mod');
    }
}
