<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function viewpost($idpost)
    {
        $post = DB::table('posts')
        ->where('id', $idpost)
        ->get();
        $comments = DB::table('comments')
        ->select('comments.*', 'users.name')
        ->where('post_id', $idpost)
        ->join('users', 'comments.user_id', 'users.id')
        ->get();
        $conut_comments = DB::table('comments')
        ->where('post_id', $idpost)
        ->count();
        return view('post', ['post' => $post, 'comments' => $comments, 'count_comments' => $conut_comments]);
    }
    function AddComment(Request $req)
    {
        DB::table('comments')
        ->insert([
            'text' => $req->text,
            'post_id' => $req->post_id,
            'user_id' => $req->user_id,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        return redirect()->back();
        //redirect('post/'.$req->post_id);
    }
}
