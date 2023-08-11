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
    DB,
    Session,
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

    public function scoreCard(Request $request, $matchId)
    {
        $response = getMatchDetails($matchId);

        $current_inning = getMatchInningDetails($matchId, $response['latest_inning_number']);

        $players = collect($current_inning['players']);

        $over_balls = array_slice(array_reverse($current_inning['commentaries']), 0, $request->has('per_page') ? (($request->per_page / 5) *  40) : 40);

        $over = $request->has('per_page') ? $request->per_page : 5;

        $ball_by_balls = [];

        foreach ($over_balls as $key => $over_ball) {

            if (isset($over_ball['event_id'])) {
                $ball_by_balls[$over_ball['over']][] = $over_ball;
            }

            if ($over_ball['event'] == 'overend' && count($ball_by_balls) == $over) {
                break;
            }
        }

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

        $results = getCompletedMatch($response['competition']['cid']);

        return view('score_card', compact(
            'response',
            'player',
            'current_inning',
            'ball_by_balls',
            'players',
            'results'
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

        $venues = collect(array_column($matchs, 'venue'))->unique('venue_id');

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

        $news = News::where('status', 1)
            ->where('cid', $cId)
            ->select('title', 'created_at', 'id', 'img', 'slug', 'short_description', 'min', 'type');

        $articles = Article::where('status', 1)
            ->where('cid', $cId)
            ->whereNull('fantasy_id')
            ->select('title', 'created_at', 'id', 'img', 'slug', 'short_description', 'min', 'type')
            ->union($news)
            ->latest()
            ->limit(request()->has('per_page') ? request()->get('per_page') : 5)
            ->get();

        $farticles = Article::where('status', 1)
            ->where('cid', $cId)
            ->where('category', 'fantasy')
            ->latest()
            ->limit(5)
            ->get();

        $tab = true;

        if (Session::get('c_id') == $cId) {

            $tab = false;
        }

        session()->put('c_id', $cId);

        return view('season_details', compact(
            'matchs',
            'response',
            'venues',
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
            'teams',
            'tab'
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

    public function stateDetails(Request $request, $cId, $slug)
    {
        if ($request->has('slug')) {

            return redirect($request->slug . '?team=' . $request->team);
        }

        $matchs = getSeasonsDetails($cId);
        $players = getSeasonStats($cId, $slug, 10);
        $data = [];

        if ($request->has('team')) {
            foreach ($players['stats'] as $key => $value) {
                if ($value['team']['tid'] == $request->team) {
                    $data['stats'][] = $value;
                }
            }
        }

        if (!empty($data)) {

            $players = $data;
        }

        $type = explode('_', $slug)[0];
        $teams = getSeasonTeams($cId);
        $states = getSeasonStats($cId);

        $season['series_name'] = $matchs[0]['short_title'];
        $season['title'] = $matchs[0]['title'];
        $season['season'] = $matchs[0]['competition']['season'];

        return view('state_details', compact(
            'matchs',
            'season',
            'slug',
            'players',
            'cId',
            'teams',
            'states',
            'type'
        ));
    }
}
