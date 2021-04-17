<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DelPostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')
        ->get();
        return view('adminLte.delpost', ['posts' => $posts]);
    }
    public function delPost(Request $req)
    {
        DB::table('posts')
        ->where('id', $req->post_id)
        ->delete();
        return redirect('del-post');
    }
}
