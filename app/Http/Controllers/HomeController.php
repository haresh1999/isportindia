<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CricSpecial;
use App\Models\PostLikes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $latestUpdateHighlighter = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->where('type', 'highlighter')
            ->latest()
            ->first();

        $latestUpdateNormal = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->where('type', 'normal')
            ->latest()
            ->limit(3)
            ->get();

        $latestUpdateOneLiner = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->where('type', 'one_liner')
            ->latest()
            ->limit(3)
            ->get();

        $seasonsUpdateHighlighter = Article::where('status', 1)
            ->where('category', 'seasons_update')
            ->where('type', 'highlighter')
            ->latest()
            ->limit(5)
            ->get();

        $cric = CricSpecial::where('status', 1)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();

        return view('home', compact(
            'latestUpdateHighlighter',
            'latestUpdateNormal',
            'latestUpdateOneLiner',
            'seasonsUpdateHighlighter',
            'cric',
        ));
    }

    public function postDetails($id, $slug)
    {
        $res = Article::with('user')->where('slug', $slug)->first();

        $res->increment('views',1);

        $cric = CricSpecial::where('status', 1)->orderBy('id', 'desc')->limit(5)->get();

        return view('blog_details', compact('res', 'cric'));
    }

    public function cricspecialDetails($id, $slug)
    {
        $res = CricSpecial::with('user')->where('slug', $slug)->first();

        $cric = CricSpecial::where('status', 1)->orderBy('id', 'desc')->limit(5)->get();

        return view('cricspecial_details', compact('res', 'cric'));
    }

    public function scoreCard($matchId)
    {
        $response = getMatchDetails($matchId);

        return view('score_card', compact('response'));
    }

    public function likesAdd(Request $request)
    {
        if (PostLikes::where('post_id',$request->id)->where('ip_address',$request->ip())->exists()) {

            PostLikes::where('post_id',$request->id)
            ->where('ip_address',$request->ip())
            ->delete();

            Article::where('id',$request->id)->decrement('likes',1);

        }else{
            
            PostLikes::create([
                'post_id' => $request->id,
                'ip_address' => $request->ip()
            ]);

            Article::where('id',$request->id)->increment('likes',1);
        }

        $likes = Article::where('id',$request->id)->value('likes');
        
        return response()->json($likes);
    }
}
