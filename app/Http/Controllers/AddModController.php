<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddModController extends Controller
{
    public function index()
    {
       $users = DB::table('users')
            ->get()
            ->where('group_id', 0);
         return view('adminLte.addmod', ['users' => $users]);
    }
    public function AddMod(Request $req)
    {
        DB::table('users')
        ->where('name', $req->name)
        ->update(
            [
                'group_id' => 1
            ]
            );
        return redirect('add-mod');
    }
}
