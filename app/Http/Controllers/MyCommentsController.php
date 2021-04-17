<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyCommentsController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $comments = DB::table('comments')
        ->select('comments.*', 'comments.id as comment_id', 'posts.id as post_id', 'posts.title')
        ->where('comments.user_id', $user_id)
        ->join('posts', 'comments.post_id', 'posts.id')
        ->get();
        return view('adminlte.mycomments', ['comments' => $comments]);
    }
    public function delCom(Request $req)
    {
        DB::table('comments')
        ->where('id', $req->comment_id)
        ->delete();
        return redirect('my-comments');
    }
    public function viewComment($idcomment)
    {
        $comment = DB::table('comments')
        ->where('id', $idcomment)
        ->get();
        return view('adminlte.editcomment', ['comment' => $comment]);
    }
    public function editComment(Request $req)
    {
        DB::table('comments')
        ->where('id', $req->commentid)
        ->update(
            [
            'text' => $req->text
            ]
        );
        return redirect()->back();
    }
}
