<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $res = Article::where('status', 1)->get();

        return view('home', compact('res'));
    }

    public function postDetails($id, $slug)
    {
        $res = Article::with('user')->where('slug', $slug)->first();

        return view('blog_details', compact('res'));
    }
}
