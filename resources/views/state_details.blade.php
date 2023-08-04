@extends('layout.main')

@section('style')
<style>
    .hide {
        display: none;
    }

    .show {
        display: block;
    }
</style>

@endsection

@section('content')
<div style="height: auto">
    <section class="style_scorecardSlider__sPmoX scorecard-slider pt-0 overflow-hidden pb-3">
        <div class="container">
            <div class="style_scorecardNav__b0jAi xsmall-text text-nowrap scroll-list d-flex pb-0"></div>

            <div class="style_slider__UbtNO style_destroy__J7ab0 style_sliderMain__Q3_kE position-relative">
                <button style="display:none" onclick="scrollContent(-1)" id="scroll_1_prev"
                    class="style_arrow__bXMF0 style_prev__wdbiv position-absolute top-50 start-0">Prev</button>
                <div id="all_matches">
                    <div class="all-slider-track style_inner__csGhV slider-track d-flex " style="gap: 0" id="c-slider">
                        @foreach ($matchs as $val)
                        <div category="{{ Str::slug($val['short_title']) }}" class="banner_match">
                            <div class="style_item__sjAWf p-2 mx-1 font-semi">
                                <div class="position-relative">
                                    <a class="style_scoreCardLink__Clpdb position-absolute top-0 start-0 opacity-0 w-100 h-100"
                                        href="{{ route('score.card',$val['match_id']) }}">{{$val['title'] }}</a>
                                    <div class="d-flex justify-content-between align-items-center style_head__CLILr">
                                        <p>
                                            <span class="danger-text text-capitalize">• {{$val['status_str']}}
                                            </span><span class="style_dark__duIOp"> -
                                                {{$val['subtitle']}}</span> -
                                            {{$val['venue']['name']}}
                                        </p>
                                    </div>
                                    <p class="style_series__ggX10 font-medium text-nowrap overflow-hidden my-2">
                                        {{$val['short_title']}}
                                    </p>
                                    <div class="style_head__CLILr">
                                        <div
                                            class="style_team__wJ2ZX d-flex justify-content-between position-relative xsmall-text">
                                            <div class="style_teamName__mcMHu d-flex align-items-center">
                                                <div class="style_teamFlag__yzzhu rounded-circle overflow-hidden">
                                                    <span style="
                        display: block;
                        overflow: hidden;
                        width: initial;
                        height: initial;
                        background: none;
                        opacity: 1;
                        border: 0px;
                        margin: 0px;
                        padding: 0px;
                        position: relative;
                      "><span style="
                          display: block;
                          width: initial;
                          height: initial;
                          background: none;
                          opacity: 1;
                          border: 0px;
                          margin: 0px;
                          padding: 100% 0px 0px;
                        ">
                                                        </span><img alt="{{$val['teama']['name']}}"
                                                            src="{{ $val['teama']['logo_url'] }}" decoding="async"
                                                            data-nimg="responsive" style="
                          position: absolute;
                          inset: 0px;
                          padding: 0px;
                          border: none;
                          display: block;
                          width: 0px;
                          min-width: 100%;
                          max-width: 100%;
                          max-height: 100%;" sizes="(max-width: 767px) 24px, (max-width: 991px) 24px, (max-width: 1190px) 200px, 24px"
                                                            srcset="{{$val['teama']['logo_url']}} 40w,{{$val['teama']['logo_url']}} 80w,{{$val['teama']['logo_url']}} 120w,{{$val['teama']['logo_url']}} 240w,{{$val['teama']['logo_url']}} 450w,{{$val['teama']['logo_url']}}  992w,{{$val['teama']['logo_url']}} 1200w,{{$val['teama']['logo_url']}} 1900w">&gt;
                                                    </span>
                                                </div>
                                                <span>{{$val['teama']['name']}}</span>
                                            </div>
                                            <p></p>
                                        </div>
                                        <div
                                            class="style_team__wJ2ZX d-flex justify-content-between position-relative xsmall-text">
                                            <div class="style_teamName__mcMHu d-flex align-items-center">
                                                <div class="style_teamFlag__yzzhu rounded-circle overflow-hidden">
                                                    <span style="
                        display: block;
                        overflow: hidden;
                        width: initial;
                        height: initial;
                        background: none;
                        opacity: 1;
                        border: 0px;
                        margin: 0px;
                        padding: 0px;
                        position: relative;
                      "><span style="
                          display: block;
                          width: initial;
                          height: initial;
                          background: none;
                          opacity: 1;
                          border: 0px;
                          margin: 0px;
                          padding: 100% 0px 0px;
                        "></span><img alt="{{$val['teamb']['name']}}" src="{{ $val['teamb']['logo_url'] }}"
                                                            decoding="async" data-nimg="responsive" style=" position: absolute;
                                inset: 0px;
                                padding: 0px;
                                border: none;
                                display: block;
                                width: 0px;
                                min-width: 100%;
                                max-width: 100%;
                                max-height: 100%;" sizes="(max-width: 767px) 24px, (max-width: 991px) 24px, (max-width: 1190px) 200px, 24px"
                                                            srcset="{{ $val['teamb']['logo_url'] }} 40w,{{ $val['teamb']['logo_url'] }} 80w,{{ $val['teamb']['logo_url'] }} 120w,{{ $val['teamb']['logo_url'] }} 240w,{{ $val['teamb']['logo_url'] }} 450w,{{ $val['teamb']['logo_url'] }} 992w,{{ $val['teamb']['logo_url'] }} 1200w,{{ $val['teamb']['logo_url'] }} 1900w">&gt;
                                                    </span>
                                                </div>
                                                <span>{{$val['teamb']['name']}}</span>
                                            </div>
                                            <p></p>
                                        </div>
                                    </div>
                                    <p
                                        class="style_result__gMwNw danger-text text-nowrap font-medium my-2 overflow-hidden">
                                        {{$val['status_note']}}
                                    </p>
                                </div>
                                <div class="style_btnList__BelA5 d-flex text-center text-uppercase">
                                    <a class="mx-1 p-1 flex-grow-1 rounded-pill"
                                        href="/womens-emerging-teams-asia-cup/fixtures/">Fixtures</a><a
                                        class="mx-1 p-1 flex-grow-1 rounded-pill"
                                        href="/womens-emerging-teams-asia-cup/standings/">Standings</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div style="display: none;" id="category_matches">
                    <div id="category-slider-track" class="style_inner__csGhV slider-track d-flex" style="gap: 0"
                        id="c-slider">
                    </div>
                </div>
                <div id="scroll_1_next" onclick="scrollContent(1)"
                    class="style_arrow__bXMF0 undefined position-absolute top-50 end-0">
                    Next
                </div>
            </div>
        </div>
    </section>
</div>

<section class="style_articleBlockSec__Eg4q3 common-section false">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-start">
            <div class="left-content col-xxl-9 col-xl-8">
                <section class="page-header_pageHeader__eGQR_ light-bg p-3 p-sm-4 br-lg position-relative">
                    <div class="page-header_breadcrumbNav__lXp44 d-flex align-items-start justify-content-between">
                        <nav aria-label="breadcrumb" class="style_breadcrumb__lfaU_ text-capitalize">
                            <ol class="breadcrumb">
                                <li class="style_item__p9Ik3 mb-1"><a href="/">Home</a></li>
                                <li class="breadcrumb-item style_item__p9Ik3 mb-1" aria-current="page">
                                    {{$season['title']}} {{ $season['season'] }}</li>
                                <li class="breadcrumb-item style_item__p9Ik3 mb-1" aria-current="page">Stats</li>
                                <li class="breadcrumb-item style_item__p9Ik3 style_active__bquuO mb-1"
                                    aria-current="page">{{ str_replace('_',' ',$slug) }}</li>
                            </ol>
                        </nav>
                        <button type="button"
                            class="style_share__oYEEa d-inline-flex align-items-center justify-content-center flex-shrink-0 text-primary rounded-circle btn btn-link"><svg
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="share-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <path
                                        d="M13.4,8.64 L13.4,4.8 L20.4,11.52 L13.4,18.24 L13.4,14.304 C8.4,14.304 4.9,15.84 2.4,19.2 C3.4,14.4 6.4,9.6 13.4,8.64 Z"
                                        id="Path" fill="#FFFFFF" fill-rule="nonzero"></path>
                                </g>
                            </svg></button>
                    </div>
                    <div class="page-header_title__9f6mH d-flex align-items-center">
                        <h1 class="mb-0">{{$season['title']}} {{ $season['season'] }}</h1><button type="button"
                            class="null page-header_favBtn__AbpFn rounded-circle ms-2 ms-xl-3 d-inline-flex align-items-center justify-content-center flex-shrink-0 btn btn-link"><svg
                                width="20px" height="20px" viewBox="0 0 20 20">
                                <g id="heart-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <path
                                        d="M10,7.375 C10,4.959 8.041,3 5.625,3 C3.209,3 1.25,4.959 1.25,7.375 C1.25,8.502 1.409,10.159 3,11.75 C4.591,13.341 10,17 10,17 C10,17 15.409,13.341 17,11.75 C18.591,10.159 18.75,8.502 18.75,7.375 C18.75,4.959 16.791,3 14.375,3 C11.959,3 10,4.959 10,7.375"
                                        id="Path" fill="#045DE9" fill-rule="nonzero"></path>
                                </g>
                            </svg></button>
                    </div>
                    <div id="readMoreDataCont"
                        class="undefined false page-header_clamp__Hgm_F t-ellipsis line-clamp-3 overflow-hidden position-relative c-transition big-text">
                        <div class="style_commonContent__Aq_YG style_darkContent__s9WAF style_smallContent__1I0SW">
                            <div>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat recusandae
                                    doloribus at nostrum cupiditate deleniti fugit excepturi nemo voluptatum reiciendis
                                    animi, culpa, in saepe nesciunt modi laborum voluptates dolorem soluta?
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat recusandae
                                    doloribus at nostrum cupiditate deleniti fugit excepturi nemo voluptatum reiciendis
                                    animi, culpa, in saepe nesciunt modi laborum voluptates dolorem soluta?
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat recusandae
                                    doloribus at nostrum cupiditate deleniti fugit excepturi nemo voluptatum reiciendis
                                    animi, culpa, in saepe nesciunt modi laborum voluptates dolorem soluta?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="readMoreBtn" class="text-end"><button type="button" onclick="readMoreClickHandler(this)"
                            class="page-header_readMore__wXB_M theme-btn small-btn d-inline-flex align-item-center mt-2 mt-md-3 btn btn-primary">Read
                            More</button></div>
                </section>

                <div id="series_detail_tabs">
                    <div
                        class="style_commonNav__oQmFF undefined style_stickyNav__I_pcA  undefined text-uppercase scroll-list flex-nowrap text-nowrap nav nav-pills">

                        <div class="home style_item___mmv9 nav-item">
                            <a class="nav-link tab" href="{{ route('season.details',[$cId,'q' => 'home']) }}">home</a>
                        </div>
                        <div class="news style_item___mmv9 nav-item tab">
                            <a class="false nav-link" href="{{ route('season.details',[$cId,'q' => 'news']) }}">news</a>
                        </div>

                        <div class="fixtures style_item___mmv9 nav-item tab">
                            <a class="false nav-link tab"
                                href="{{ route('season.details',[$cId,'q' => 'fixtures']) }}">fixtures</a>
                        </div>
                        <div class="stats style_item___mmv9 nav-item tab">
                            <a class="false nav-link"
                                href="{{ route('season.details',[$cId,'q' => 'stats']) }}">stats</a>
                        </div>
                        <div class="fantasy style_item___mmv9 nav-item tab">
                            <a class="false nav-link tab"
                                href="{{ route('season.details',[$cId,'q' => 'fantasy']) }}">fantasy tips</a>
                        </div>
                        <div class="squads squads style_item___mmv9 nav-item tab">
                            <a class="false nav-link"
                                href="{{ route('season.details',[$cId,'q' => 'squads']) }}">squads</a>
                        </div>
                    </div>
                    <!-- MOST RUNS SECTION START -->
                    <div class="undefined d-md-flex justify-content-between align-items-center mb-2">
                        <h4 class="text-uppercase mb-1 mb-md-0">{{$season['series_name']}}:&nbsp;{{str_replace('_','
                            ',$slug) }}</h4>
                        <form class="d-flex align-items-center" action="{{ route('state.details',[$cId,$slug]) }}"
                            method="get">
                            <div class="style_filters__b6d9E ms-auto me-1">
                                <div class="dropdown">
                                    <select
                                        class="col style_selectNative__gg_ys style_formControl__3Z2Uk style_formSelect__UYPE5 br-sm"
                                        name="team" id="team">
                                        <option value="" selected>ALL Team</option>
                                        @foreach ($teams['teams'] as $team)
                                        <option {{ $team['tid']==Request::get('team') ? 'selected' : '' }}
                                            value="{{ $team['tid'] }}">{{ $team['title'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="style_filterStats__pfxfP">
                                <div class="dropdown">
                                    <select
                                        class="col style_selectNative__gg_ys style_formControl__3Z2Uk style_formSelect__UYPE5 br-sm"
                                        name="slug">
                                        @foreach ($states['stat_types'] as $state)
                                        <optgroup label="{{$state['group_title']}}">
                                            @foreach ($state['types'] as $statesKey => $stateTypes)
                                            <option {{ $statesKey==$slug ? 'selected' : '' }}
                                                value="{{ route('state.details',[$cId,$statesKey]) }}">{{$stateTypes}}
                                            </option>
                                            @endforeach
                                        </optgroup>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit"
                                class="theme-btn outline-btn small-btn ms-2 ms-md-3 btn btn-primary">Search</button>
                        </form>
                    </div>

                    @if ($type == 'batting')

                    <div class="style_stats__QtK5R">
                        <div class="table-responsive">
                            <table class="numbered undefined undefined text-center font-semi text-nowrap table">
                                <thead>
                                    <tr>
                                        <th class="">No</th>
                                        <th class="">Player</th>
                                        <th class="">Team</th>
                                        <th class="">Runs</th>
                                        <th class="">Mat</th>
                                        <th class="">BF</th>
                                        <th class="">Avg</th>
                                        <th class="">H.S</th>
                                        <th class="">SR</th>
                                        <th class="">4s</th>
                                        <th class="">6s</th>
                                        <th class="">100s</th>
                                        <th class="">50s</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($players['stats'] as $key => $player)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>
                                            <a class="theme-text"
                                                href="{{route('player',$player['player']['pid'])}}">{{$player['player']['title']
                                                }}</a>
                                        </td>
                                        <td class="">
                                            <a class="theme-text"
                                                href="{{route('teams',$player['team']['tid'])}}"><span>{{$player['team']['title']}}</span></a>
                                        </td>
                                        <td class="style_highLight__aNeRp">{{$player['runs']}}</td>
                                        <td class="">{{$player['matches']}}</td>
                                        <td class="">{{$player['balls']}}</td>
                                        <td class="">{{$player['average']}}</td>
                                        <td class="">{{$player['highest']}}</td>
                                        <td class="">{{$player['strike']}}</td>
                                        <td class="">{{$player['run4']}}</td>
                                        <td class="">{{$player['run6']}}</td>
                                        <td class="">{{$player['run100']}}</td>
                                        <td class="">{{$player['run50']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    @elseif ($type == 'bowling')
                    <div class="style_stats__QtK5R">
                        <div class="table-responsive">
                            <table class="numbered undefined undefined text-center font-semi text-nowrap table">
                                <thead>
                                    <tr>
                                        <th class="">No</th>
                                        <th class="">Bowler</th>
                                        <th class="">Team</th>
                                        <th class="">Wkts</th>
                                        <th class="">Mat</th>
                                        <th class="">Ovs</th>
                                        <th class="">BBI</th>
                                        <th class="">Balls</th>
                                        <th class="">Avg</th>
                                        <th class="">Ecn</th>
                                        <th class="">Runs</th>
                                        <th class="">4-Fers</th>
                                        <th class="">5-Fers</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($players['stats'] as $key1 => $player)
                                    <tr class="">
                                        <td>{{++$key1}}</td>
                                        <td>
                                            <a class="theme-text"
                                                href="{{route('player',$player['player']['pid'])}}">{{$player['player']['title']
                                                }}</a>
                                        </td>
                                        <td class="">
                                            <a class="theme-text"
                                                href="{{route('teams',$player['team']['tid'])}}"><span>{{$player['team']['title']}}</span></a>
                                        </td>
                                        <td class="style_highLight__aNeRp">{{$player['wickets']}}</td>
                                        <td class="">{{$player['matches']}}</td>
                                        <td class="">{{$player['overs']}}</td>
                                        <td class="">{{$player['bestinning']}}</td>
                                        <td class="">{{$player['balls']}}</td>
                                        <td class="">{{$player['average']}}</td>
                                        <td class="">{{$player['econ']}}</td>
                                        <td class="">{{$player['runs']}}</td>
                                        <td class="">{{$player['wicket4i']}}</td>
                                        <td class="">{{$player['wicket5i']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @elseif ($type == 'team')
                    <div class="style_stats__QtK5R">
                        <div class="table-responsive">

                            <table class="numbered undefined undefined text-center font-semi text-nowrap table">
                                <thead>
                                    <tr>
                                        <th class="">No</th>
                                        <th class="">Team</th>
                                        <th class="">Runs</th>
                                        <th class="">100s</th>
                                        <th class="">50s</th>
                                        <th class="">Wkts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($players['stats'] as $key2 => $player)
                                    <tr class="">
                                        <td>{{++$key2}}</td>
                                        <td>
                                            <a class="theme-text"
                                                href="{{route('teams',$player['team']['tid'])}}">{{$player['team']['title']}}</a>
                                        </td>
                                        <td class="style_highLight__aNeRp">{{$player['runs']}}</td>
                                        <td class="">{{$player['run100']}}</td>
                                        <td class="">{{$player['run50']}}</td>
                                        <td class="">{{$player['wickets']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endif
                    {{-- <div class="table-footer-note xsmall-text mt-n1">Last Updated On Aug 02, 2023, 23:30 IST</div>
                    --}}
                    <p class="mt-1"><b>Inns:</b> Innings, <b>Avg:</b> Average, <b>SR:</b> Strike Rate, <b>H.S:</b>
                        Highest
                        Score, <b>Wkts:</b> Wickets, <b>Ovs:</b> Overs, <b>4-Fers:</b> Four Wicket Haul, <b>5-Fers:</b>
                        Five
                        Wicket Haul, <b>BBI:</b> Best Bowling in Innings, <b>RCI:</b> Runs Conceded Innings, <b>ECN:</b>
                        Economy, <b>Mdns:</b> Maidens, <b>Mat:</b> Matches, <b>BF:</b> Balls Faced</p>
                </div>
            </div>


            <div class="col-xxl-3 col-lg-4 common-sidebar">
                <section class="widget">
                    <div class="widget-title">
                        <h3 class="small-head d-flex align-items-center text-uppercase mb-0"><span
                                class="icon me-1"><span
                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                        alt="winner" sizes="100vw"
                                        srcset="/_next/static/media/cup-dark-icon.133e379b.svg 450w, /_next/static/media/cup-dark-icon.133e379b.svg 992w, /_next/static/media/cup-dark-icon.133e379b.svg 1200w, /_next/static/media/cup-dark-icon.133e379b.svg 1900w"
                                        src="/_next/static/media/cup-dark-icon.133e379b.svg" decoding="async"
                                        data-nimg="responsive"
                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span><span>Current
                                Series</span></h3>
                    </div>
                    <div class="font-semi">
                        @foreach (getSeasons() as $val)
                        <a class="cs-item common-box d-block overflow-hidden text-nowrap mb-2"
                            href="{{ route('season.details',$val['cid']) }}">{{$val['title']}}</a>
                        @endforeach
                    </div>
                </section>
                <div class="style_cricSpecial__YjEar cric-special widget p-3">
                    <h3
                        class="small-head d-flex align-items-center text-uppercase justify-content-center justify-content-md-start">
                        <span class="style_icon__5WxUf me-2"><span
                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                    style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                    alt="winner" sizes="100vw"
                                    srcset="/_next/static/media/star-fill-icon.b0baf1fe.svg 450w, /_next/static/media/star-fill-icon.b0baf1fe.svg 992w, /_next/static/media/star-fill-icon.b0baf1fe.svg 1200w, /_next/static/media/star-fill-icon.b0baf1fe.svg 1900w"
                                    src="/_next/static/media/star-fill-icon.b0baf1fe.svg" decoding="async"
                                    data-nimg="responsive"
                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span><span>CricSpecial</span>
                    </h3>
                    <div class="style_slider__UbtNO   process-arrow position-relative">
                        @include('layout.cric_special')
                    </div>
                </div>
                <div class="trendingNews trending-news widget">
                    <h3
                        class="widget-title small-head d-flex align-items-center text-uppercase justify-content-center justify-content-md-start">
                        <span class="icon me-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.9398 9.41527C16.9657 10.2702 18.0184 11.1473 18.5481 12.5281C19.5284 14.8807 18.8632 17.5845 17.0428 19.2787C15.3886 20.7974 13.0869 21.1924 10.9601 20.9203C9.47228 20.7271 5.33258 19.2173 5 14.3014C5 12.0804 5.60389 10.6056 6.19903 9.69269C6.45284 9.31522 7.04797 9.53468 6.99546 9.99116C6.85543 11.2289 7.02172 12.9583 8.60583 14.1609C8.94716 14.4243 9.41977 14.0468 9.26223 13.643C7.34554 8.70951 9.62982 4.94358 12.8068 3.065C13.1394 2.8631 13.5507 3.16156 13.4632 3.54781C12.7372 6.74654 14.3046 8.05264 15.9398 9.41527ZM12.5092 14.9158C12.3342 15.7235 11.6865 16.6364 10.4263 16.9437C12.9643 19.0329 15.3624 17.128 15.2924 14.9071C15.2924 13.9488 14.5556 13.2092 13.8263 12.4771C13.1927 11.8411 12.5647 11.2108 12.4305 10.4476C11.9797 11.6221 12.1915 12.532 12.3794 13.3394C12.5089 13.8959 12.6271 14.4037 12.5092 14.9158Z"
                                    fill="#0e3778"></path>
                            </svg></span>Trending News
                    </h3>
                    <div class="trendingList">
                        @include('layout.news')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    const tabclickHandler = (clickTab, tabs_root_id, active_class) => {
    $(`#${tabs_root_id} .${active_class}`).removeClass(`${active_class}`)
    clickTab.classList.add(active_class);
    let activeTabType = clickTab.getAttribute("tabtype")
    showRespectiveTabSection(tabs_root_id, activeTabType)
}

const showRespectiveTabSection = (tabs_root_id, activeTabType) => {
    localStorage.setItem('type',activeTabType);
    $(`#${tabs_root_id} .tabs-data`).removeClass("show").addClass('hide');
    $(`#${tabs_root_id} .${activeTabType}-data`).addClass("show")
}

const readMoreClickHandler = (button)=>{
    let isReadMore = button.innerText == "Read More"
    let readMoreContClass = "page-header_clamp__Hgm_F t-ellipsis line-clamp-3 overflow-hidden position-relative c-transition big-text"
    const readMoreContRef = document.getElementById('readMoreDataCont')
    if(!isReadMore){
        button.innerText = "Read More"
        readMoreContRef.className = readMoreContClass
    }
    else{
        readMoreContRef.classList.remove(...readMoreContRef.classList);
        button.innerText = "Read Less"
    }
}
</script>
@endsection