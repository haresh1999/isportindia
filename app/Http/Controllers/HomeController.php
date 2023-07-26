<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{
    Article,
    CricSpecial,
    News,
    PostLikes
};

use Illuminate\Support\Facades\{
    Http,
    DB
};

class HomeController extends Controller
{
    public function home()
    {
        $latestUpdateHighlighter = Article::where('status', 1)
            ->where([
                ['category', '=', 'latest_update'],
                ['type', '=', 'highlighter']
            ])
            ->latest()
            ->first();

        $latestUpdateNormal = Article::where('status', 1)
            ->where([
                ['category', '=', 'latest_update'],
                ['type', '=', 'normal'],
            ])
            ->latest()
            ->limit(3)
            ->get();

        $latestUpdateOneLiner = Article::where('status', 1)
            ->where([
                ['category', '=', 'latest_update'],
                ['type', '=', 'one_liner'],
            ])
            ->latest()
            ->limit(3)
            ->get();

        $seasonsUpdateHighlighter = Article::where('status', 1)
            ->where('category', 'seasons_update')
            ->groupBy('cid')
            ->latest()
            ->limit(request()->has('per_page') ? request()->get('per_page') : 5)
            ->get();

        $fantasys = Article::where('status', 1)
            ->has('fantasy')
            ->latest()
            ->limit(request()->has('fantasy_per_page') ? request()->get('fantasy_per_page') : 5)
            ->get();

        return view('home', compact(
            'latestUpdateHighlighter',
            'latestUpdateNormal',
            'latestUpdateOneLiner',
            'seasonsUpdateHighlighter',
            'fantasys'
        ));
    }

    public function postDetails($slug)
    {
        $res = Article::with('user')
            ->where('slug', $slug)
            ->first();

        $res->increment('views', 1);

        return view('blog_details', compact('res'));
    }

    public function cricspecialDetails($slug)
    {
        $res = CricSpecial::with('user')
            ->where('slug', $slug)
            ->first();

        $res->increment('views', 1);

        return view('cricspecial_details', compact('res'));
    }

    public function scoreCard($matchId)
    {
        $response = getMatchDetails($matchId);

        $player = Http::get(config('services.api') . 'competitions/' . $response['competition']['cid'] . '/squads?token=' . token())->json();

        $player = $player['response']['squads'];

        return view('score_card', compact('response', 'player'));
    }

    public function likesAdd(Request $request)
    {
        if (PostLikes::where('post_id', $request->id)
            ->where('ip_address', $request->ip())
            ->where('type', $request->type)
            ->exists()
        ) {

            PostLikes::where('post_id', $request->id)
                ->where('ip_address', $request->ip())
                ->where('type', $request->type)
                ->delete();

            if ($request->type == 'article') {

                Article::where('id', $request->id)->decrement('likes', 1);
            } elseif ($request->type == 'news') {

                News::where('id', $request->id)->decrement('likes', 1);
            } elseif ($request->type == 'cricspecial') {

                CricSpecial::where('id', $request->id)->decrement('likes', 1);
            }
        } else {

            PostLikes::create([
                'post_id' => $request->id,
                'ip_address' => $request->ip(),
                'type' => $request->type
            ]);

            if ($request->type == 'article') {

                Article::where('id', $request->id)->update(['likes' => DB::raw('likes+1')]);
            } elseif ($request->type == 'news') {

                News::where('id', $request->id)->update(['likes' => DB::raw('likes+1')]);
            } elseif ($request->type == 'cricspecial') {

                CricSpecial::where('id', $request->id)->update(['likes' => DB::raw('likes+1')]);
            }
        }

        if ($request->type == 'article') {

            $likes = Article::where('id', $request->id)->value('likes');
        } elseif ($request->type == 'news') {

            $likes = News::where('id', $request->id)->value('likes');
        } elseif ($request->type == 'cricspecial') {

            $likes = CricSpecial::where('id', $request->id)->value('likes');
        }

        return response()->json($likes);
    }

    public function newsDetails($slug)
    {
        $news = News::where('slug', $slug)->first();

        $news->increment('views', 1);

        return view('news_details', compact('news'));
    }

    public function seasonDetails($cId)
    {
        $response = getSeasonsDetails($cId);

        return redirect()->back();

        return view('season_details',compact('response'));
    }

    public function cricketTeams($name)
    {
        return redirect()->back();
    }

    public function fantasyDetails($slug)
    {
        $article = Article::where('slug', $slug)->first();

        $article->increment('views', 1);

        return view('fantasy_details', compact('article'));
    }
}
