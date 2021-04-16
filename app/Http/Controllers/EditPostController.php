<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EditPostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')
        ->get();
        return view('adminLte.editpost', ['posts' => $posts]);
    }
    public function EditPost(Request $req)
    {
        DB::table('posts')
        ->where('id', $req->post_id)
        ->update(
            [
                'title' => $req->title,
                'text' => $req->text,
                'user_id' => Auth::user()->id
            ]
            );
        return redirect('edit-post');
    }
}
