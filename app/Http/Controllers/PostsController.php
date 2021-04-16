<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;



class PostsController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')
        ->paginate(2);
        return view('posts', ['posts' => $posts]);
    }
}
