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

        $matchs = getMatch();

        return view('home', compact(
            'latestUpdateHighlighter',
            'latestUpdateNormal',
            'latestUpdateOneLiner',
            'seasonsUpdateHighlighter',
            'fantasys',
            'matchs'
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

        $current_inning = getMatchInningDetails($matchId,$response['latest_inning_number']);

        dd($current_inning);    

        $player = [];

        foreach ($response['players'] as $key => $value) {
            if ($value['nationality'] == $response['teama']['name']) {

                if ($value['role'] == 'squad') {
                    $player['team_a_squad'][] = $value;
                } else {
                    $player['team_a'][] = $value;
                }
            } else {

                if ($value['role'] == 'squad') {

                    $player['team_b_squad'][] = $value;
                } else {

                    $player['team_b'][] = $value;
                }
            }
        }

        return view('score_card', compact(
            'response',
            'player',
            'current_inning'
        ));
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

                Article::where('id', $request->id)
                    ->decrement('likes', 1);
            } elseif ($request->type == 'news') {

                News::where('id', $request->id)
                    ->decrement('likes', 1);
            } elseif ($request->type == 'cricspecial') {

                CricSpecial::where('id', $request->id)
                    ->decrement('likes', 1);
            }
        } else {

            PostLikes::create([
                'post_id' => $request->id,
                'ip_address' => $request->ip(),
                'type' => $request->type
            ]);

            if ($request->type == 'article') {

                Article::where('id', $request->id)
                    ->update(['likes' => DB::raw('likes+1')]);
            } elseif ($request->type == 'news') {

                News::where('id', $request->id)
                    ->update(['likes' => DB::raw('likes+1')]);
            } elseif ($request->type == 'cricspecial') {

                CricSpecial::where('id', $request->id)
                    ->update(['likes' => DB::raw('likes+1')]);
            }
        }

        if ($request->type == 'article') {

            $likes = Article::where('id', $request->id)
                ->value('likes');
        } elseif ($request->type == 'news') {

            $likes = News::where('id', $request->id)
                ->value('likes');
        } elseif ($request->type == 'cricspecial') {

            $likes = CricSpecial::where('id', $request->id)
                ->value('likes');
        }

        return response()
            ->json($likes);
    }

    public function newsDetails($slug)
    {
        $news = News::where('slug', $slug)->first();

        $news->increment('views', 1);

        return view('news_details', compact('news'));
    }

    public function seasonDetails(Request $request, $cId)
    {
        $ranking = [];
        $bat = [];
        $bowl = [];
        $wk = [];
        $all = [];
        $season = [];

        $type = $request->has('type') ? $request->type : 0;

        $squads = getSeasonSquads($cId);

        $states = getSeasonStats($cId);

        $teams = getSeasonTeams($cId);

        $ranking['batting_most_runs'] = getSeasonStats($cId, 'batting_most_runs');
        $ranking['batting_most_runs_innings'] = getSeasonStats($cId, 'batting_most_runs_innings');
        $ranking['bowling_top_wicket_takers'] = getSeasonStats($cId, 'bowling_top_wicket_takers');
        $ranking['bowling_best_economy_rates'] = getSeasonStats($cId, 'bowling_best_economy_rates');

        foreach ($squads[$type]['players'] as $key => $value) {

            if ($value['playing_role'] == 'bat') {
                $bat[] = $value;
            } else if ($value['playing_role'] == 'bowl') {
                $bowl[] = $value;
            } else if ($value['playing_role'] == 'wk') {
                $wk[] = $value;
            } else if ($value['playing_role'] == 'all') {
                $all[] = $value;
            }
        }

        $response = getSeasonsDetails($cId);
        $matchs = $response;

        $filter = [];

        foreach ($response as $key => $venue) {

            $isVenue = !is_null($request->venue) && $venue['venue']['venue_id'] == $request->venue;
            $isTeam = !is_null($request->team) && in_array($request->team, [$venue['teama']['team_id'], $venue['teamb']['team_id']]);

            if (!is_null($request->venue) && !is_null($request->team)) {

                if ($isVenue && $isTeam) {
                    $filter[] = $venue;
                }
            } else {

                if ($isVenue) {
                    $filter[] = $venue;
                }

                if ($isTeam) {
                    $filter[] = $venue;
                }
            }
        }

        $response = empty($filter) ? $response : $filter;

        $season['series_name'] = $response[0]['short_title'];
        $season['title'] = $response[0]['title'];
        $season['season'] = $response[0]['competition']['season'];

        $articles = Article::where('status', 1)
            ->where('cid', $cId)
            ->whereNull('fantasy_id')
            ->latest()
            ->limit(request()->has('per_page') ? request()->get('per_page') : 5)
            ->get();

        $farticles = Article::where('status', 1)
            ->where('cid', $cId)
            ->where('category', 'fantasy')
            ->latest()
            ->limit(5)
            ->get();

        $news = News::where('status', 1)
            ->where('cid', $cId)
            ->latest()
            ->limit(request()->has('per_page') ? request()->get('per_page') : 5)
            ->get();


        return view('season_details', compact(
            'matchs',
            'response',
            'news',
            'squads',
            'bat',
            'bowl',
            'wk',
            'all',
            'type',
            'cId',
            'articles',
            'farticles',
            'ranking',
            'states',
            'season',
            'teams'
        ));
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
