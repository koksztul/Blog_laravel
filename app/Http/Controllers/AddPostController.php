<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddPostController extends Controller
{
    public function index()
    {
        return view('adminLte.addpost');
    }
    public function AddPost(Request $req)
    {     
        DB::table('posts')
        ->insert(
            [
                'title' => $req->title,
                'text' => $req->text,
                'user_id' => Auth::user()->id,
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime()
            ]
            );
        return redirect('add-post');
    }
}
