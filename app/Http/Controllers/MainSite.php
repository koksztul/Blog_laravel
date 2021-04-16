<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainSite extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')
        ->paginate(4);
        return view('main', ['posts' => $posts]);
    }
}
