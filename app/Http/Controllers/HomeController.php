<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CricSpecial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $res = Article::where('status', 1)->orderBy('id','desc')->limit(5)->get();

        $cric = CricSpecial::where('status', 1)->orderBy('id','desc')->limit(5)->get();

        return view('home', compact('res','cric'));
    }

    public function postDetails($id, $slug)
    {
        $res = Article::with('user')->where('slug', $slug)->first();

        return view('blog_details', compact('res'));
    }

    public function cricspecialDetails($id, $slug)
    {
        $res = CricSpecial::with('user')->where('slug', $slug)->first();

        return view('cricspecial_details', compact('res'));
    }

    public function scoreCard($matchId)
    {
        $response = getMatchDetails($matchId);

        return view('score_card',compact('response'));
    }
}
