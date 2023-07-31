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
                                <li class="breadcrumb-item style_item__p9Ik3 style_active__bquuO mb-1 active"
                                    aria-current="page">{{$season['title']}} {{ $season['season'] }}</li>
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
                    <div
                        class="undefined false page-header_clamp__Hgm_F t-ellipsis line-clamp-3 overflow-hidden position-relative c-transition big-text">
                        <div class="style_commonContent__Aq_YG style_darkContent__s9WAF style_smallContent__1I0SW">
                            <div>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat recusandae
                                    doloribus at nostrum cupiditate deleniti fugit excepturi nemo voluptatum reiciendis
                                    animi, culpa, in saepe nesciunt modi laborum voluptates dolorem soluta?</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-end"><button type="button"
                            class="page-header_readMore__wXB_M theme-btn small-btn d-inline-flex align-item-center mt-2 mt-md-3 btn btn-primary">Read
                            More</button></div>
                </section>

                <div id="series_detail_tabs">
                    <div
                        class="style_commonNav__oQmFF undefined style_stickyNav__I_pcA  undefined text-uppercase scroll-list flex-nowrap text-nowrap nav nav-pills">

                        <div tabtype="home" onclick="tabclickHandler(this,'series_detail_tabs','style_active__nlf9x')"
                            class="home style_item___mmv9 nav-item">
                            <p class="nav-link tab">home</p>
                        </div>
                        <div tabtype="news" onclick="tabclickHandler(this,'series_detail_tabs','style_active__nlf9x')"
                            class="news style_item___mmv9 nav-item tab">
                            <p class="false nav-link" href="#">news</p>
                        </div>
                        <!-- <div tabtype="videos" onclick="tabclickHandler(this,'series_detail_tabs','style_active__nlf9x')"
                            class="style_item___mmv9 nav-item tab"><p class="false nav-link">videos</p></div> -->
                        <div tabtype="fixtures"
                            onclick="tabclickHandler(this,'series_detail_tabs','style_active__nlf9x')"
                            class="fixtures style_item___mmv9 nav-item tab">
                            <p class="false nav-link tab"> fixtures</p>
                        </div>
                        <div tabtype="stats" onclick="tabclickHandler(this,'series_detail_tabs','style_active__nlf9x')"
                            class="stats style_item___mmv9 nav-item tab">
                            <p class="false nav-link ">stats</p>
                        </div>
                        <div tabtype="fantasy"
                            onclick="tabclickHandler(this,'series_detail_tabs','style_active__nlf9x')"
                            class="fantasy style_item___mmv9 nav-item tab">
                            <p class="false nav-link tab">fantasy tips</p>
                        </div>
                        <div tabtype="squads" onclick="tabclickHandler(this,'series_detail_tabs','style_active__nlf9x')"
                            class="squads squads style_item___mmv9 nav-item tab">
                            <p class="false nav-link">squads</p>
                        </div>
                    </div>

                    <!-- HOME SECTION START -->
                    <div class="style_seriesHome__Jnsnk home-data tabs-data">
                        <h4 class="text-uppercase">Latest Article</h4>
                        <section>
                            <div class="row">
                                @foreach ($articles as $akey => $article)
                                @if ($loop->first)
                                <div id="{{$article->id}}" class="col-lg-12 col-sm-12">
                                    <article id="{{$article->id}}"
                                        class="style_article__IayJx style_articleSmall__SMJc6 false light-bg br-lg c-transition">
                                        <div class="gx-2 gx-md-3 row">
                                            <div class="col-sm-3 col-12"><a
                                                    class="style_postimg__ftSiV mb-2 mb-sm-0 d-block br-md overflow-hidden position-relative a-transition"
                                                    href="{{route('post.details',$article->slug)}}"><span
                                                        style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                            style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 62.5% 0px 0px;"></span><img
                                                            alt="David Warner"
                                                            sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px"
                                                            src="{{ getImageUrl($article->img) }}" decoding="async"
                                                            data-nimg="responsive"
                                                            style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span></a>
                                            </div>
                                            <div class="d-flex flex-column justify-content-between col-sm-9 col-12">
                                                <div>
                                                    <h3 class="small-head mb-2"><a class="overflow-hidden line-clamp-3"
                                                            href="{{route('post.details',$article->slug)}}">{{$article->title}}</a>
                                                    </h3>
                                                    <p class="d-none d-sm-block">{{$article->short_description}}
                                                    </p>
                                                </div>
                                                <div class="style_articleInfo__WqisT text-muted d-flex"><span
                                                        class="d-flex align-items-center"><span
                                                            class="style_icon__Ukkjh d-block"><span
                                                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                    style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                    alt="Calender" sizes="100vw"
                                                                    src="https://www.crictracker.com/_next/static/media/calender-icon.23e624a9.svg"
                                                                    decoding="async" data-nimg="responsive"
                                                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>{{
                                                        Carbon\Carbon::parse($article->created_at)->format('d M Y')
                                                        }}</span><span class="d-flex align-items-center"><span
                                                            class="style_icon__Ukkjh d-block"><span
                                                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                    style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                    alt="Clock" sizes="100vw"
                                                                    src="https://www.crictracker.com/_next/static/media/clock-icon.c7a46c6e.svg"
                                                                    decoding="async" data-nimg="responsive"
                                                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>{{$article->min}}
                                                        Min</span></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                @else
                                <div id="{{$article->id}}" class="col-lg-4 col-sm-6">
                                    <article
                                        class="style_article__IayJx style_articleGrid__LHxgp false flex-sm-column align-items-top style_mobileSmall__SYPwG d-flex light-bg br-lg c-transition"
                                        id="{{$article->id}}"><a
                                            class="style_postimg__ftSiV style_postimg__pbfkX d-block mb-0 mb-sm-2 overflow-hidden br-md position-relative a-transition"
                                            href="{{route('post.details',$article->slug)}}"><span
                                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                    style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 62.5% 0px 0px;"></span><img
                                                    alt="Team India ODI."
                                                    sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px"
                                                    src="{{ getImageUrl($article->img) }}" decoding="async"
                                                    data-nimg="responsive"
                                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span></a>
                                        <div class="d-flex flex-column flex-grow-1">
                                            <h4 class="small-head mb-2"><a class="overflow-hidden line-clamp-3"
                                                    href="{{route('post.details',$article->slug)}}">{{ $article->title
                                                    }}</a></h4>
                                            <div
                                                class="style_articleInfo__WqisT style_articleInfo__LJyqf text-muted d-flex mt-auto">
                                                <span class="d-flex align-items-center"><span
                                                        class="style_icon__Ukkjh style_icon__h3wFw d-block"><span
                                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                alt="Calender" sizes="100vw"
                                                                src="https://www.crictracker.com/_next/static/media/calender-icon.23e624a9.svg"
                                                                decoding="async" data-nimg="responsive"
                                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>{{
                                                    Carbon\Carbon::parse($article->created_at)->format('d M Y')
                                                    }}</span><span class="d-flex align-items-center"><span
                                                        class="style_icon__Ukkjh style_icon__h3wFw d-block"><span
                                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                alt="Clock" sizes="100vw"
                                                                src="https://www.crictracker.com/_next/static/media/clock-icon.c7a46c6e.svg"
                                                                decoding="async" data-nimg="responsive"
                                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>{{$article->min}}
                                                    Min</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            @if ($articles->count() >= 5)
                            <div class="text-center theme-text"><a class="theme-btn small-btn"
                                    href="{{ route('season.details',[$cId,'per_page' => (5 * (($articles->count() / 5) + 1))]) }}">More
                                    News &gt;</a></div>
                            @endif
                        </section>

                        <h4 class="text-uppercase">Top Rankings</h4>
                        <section class="common-section">
                            <div class="flex-nowrap scroll-list row">
                                @foreach ($ranking as $rankKey => $rank)
                                <div class="col-xl-3 col-auto">
                                    <div
                                        class="style_playerCard__X2o3g light-bg text-center br-lg mx-auto overflow-hidden">
                                        <a href="#">
                                            <p class="style_title__rkxfw p-2 font-semi">{{
                                                str_replace(Str::upper($rankKey),'_',' ') }}</p>
                                        </a>
                                        <p class="big-text"><b class="text-uppercase"><a
                                                    href="/cricket-players/yashasvi-jaiswal/">{{$rank['stats'][0]['player']['title']}}</a>
                                                ({{ $rank['stats'][0]['team']['abbr'] }})</b>
                                        </p>
                                        <div class="style_playerImg___TrCq position-relative"><a
                                                class="style_imgBlock__9oEt4 d-block m-auto rounded-circle overflow-hidden "
                                                href="/cricket-players/yashasvi-jaiswal/">
                                                <div class="w-100 position-relative overflow-hidden rounded-circle"
                                                    style="background-color: rgb(210, 211, 211);">
                                                    <div class="w-100"><span
                                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                alt="{{$rank['stats'][0]['player']['title']}}"
                                                                sizes="100vw"
                                                                src="{{$rank['stats'][0]['player']['thumb_url'] }}"
                                                                decoding="async" data-nimg="responsive"
                                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                                                    </div>
                                                    <div class="position-absolute w-100 h-100 bottom-0 start-0"><span
                                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                alt="{{$rank['stats'][0]['team']['title']}}"
                                                                sizes="100vw"
                                                                src="{{ $rank['stats'][0]['team']['logo_url'] }}"
                                                                decoding="async" data-nimg="responsive"
                                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                                                    </div>
                                                </div>
                                            </a></div>

                                        @if ($rankKey == 'batting_most_runs')
                                        <p class="style_score__o8kP_ mt-2 mb-0">{{$rank['stats'][0]['runs']}}</p>
                                        <p class="undefined big-text text-secondary">Runs</p>
                                        @elseif ($rankKey == 'batting_most_runs_innings')
                                        <p class="style_score__o8kP_ mt-2 mb-0">{{$rank['stats'][0]['runs']}}</p>
                                        <p class="undefined big-text text-secondary">Runs</p>
                                        @elseif ($rankKey == 'bowling_top_wicket_takers')
                                        <p class="style_score__o8kP_ mt-2 mb-0">{{$rank['stats'][0]['wickets']}}</p>
                                        <p class="undefined big-text text-secondary">Runs</p>
                                        @elseif ($rankKey == 'bowling_best_economy_rates')
                                        <p class="style_score__o8kP_ mt-2 mb-0">{{$rank['stats'][0]['econ']}}</p>
                                        <p class="undefined big-text text-secondary">Runs</p>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </section>

                        <h4 class="text-uppercase">Fantasy Articles</h4>
                        <section>
                            <div class="row">
                                @foreach ($farticles as $fantasy)
                                @if ($loop->first)
                                <div id="{{$fantasy->id}}" class="col-lg-12 col-sm-12">
                                    <article id="{{$fantasy->id}}"
                                        class="style_article__IayJx style_articleSmall__SMJc6 false light-bg br-lg c-transition">
                                        <div class="gx-2 gx-md-3 row">
                                            <div class="col-sm-3 col-12"><a
                                                    class="style_postimg__ftSiV mb-2 mb-sm-0 d-block br-md overflow-hidden position-relative a-transition"
                                                    href="{{route('fantasy.details',$fantasy->slug)}}/"><span
                                                        style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                            style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 62.5% 0px 0px;"></span><img
                                                            alt="{{$fantasy->title}}"
                                                            sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px"
                                                            src="{{ getImageUrl($fantasy->fantasy->img) }}"
                                                            decoding="async" data-nimg="responsive"
                                                            style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span></a>
                                            </div>
                                            <div class="d-flex flex-column justify-content-between col-sm-9 col-12">
                                                <div><span class="undefined undefined mb-1 badge bg-danger"><a
                                                            href="{{route('fantasy.details',$fantasy->slug)}}">{{
                                                            $fantasy->fantasy->name }}</a></span>
                                                    <h3 class="small-head mb-2"><a class="overflow-hidden line-clamp-3"
                                                            href="{{route('fantasy.details',$fantasy->slug)}}">{{
                                                            $fantasy->title }}</a></h3>
                                                    <p class="d-none d-sm-block">{{$season['series_name']}}
                                                        {{$fantasy->fantasy->name}} Prediction</p>
                                                </div>
                                                <div class="style_articleInfo__WqisT text-muted d-flex"><span
                                                        class="d-flex align-items-center"><span
                                                            class="style_icon__Ukkjh d-block"><span
                                                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                    style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                    alt="Calender" sizes="100vw"
                                                                    src="https://www.crictracker.com/_next/static/media/calender-icon.23e624a9.svg"
                                                                    decoding="async" data-nimg="responsive"
                                                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>{{
                                                        Carbon\Carbon::parse($fantasy->created_at)->format('d M Y')
                                                        }}</span><span class="d-flex align-items-center"><span
                                                            class="style_icon__Ukkjh d-block"><span
                                                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                    style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                    alt="Clock" sizes="100vw"
                                                                    src="https://www.crictracker.com/_next/static/media/clock-icon.c7a46c6e.svg"
                                                                    decoding="async" data-nimg="responsive"
                                                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>{{$fantasy->min}}
                                                        Min</span></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                @else
                                <div id="{{$fantasy->id}}" class="col-lg-4 col-sm-6">
                                    <article
                                        class="style_article__IayJx style_articleGrid__LHxgp false flex-sm-column align-items-top style_mobileSmall__SYPwG d-flex light-bg br-lg c-transition"
                                        id="{{$fantasy->id}}"><a
                                            class="style_postimg__ftSiV style_postimg__pbfkX d-block mb-0 mb-sm-2 overflow-hidden br-md position-relative a-transition"
                                            href="{{route('fantasy.details',$fantasy->slug)}}"><span
                                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                    style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 62.5% 0px 0px;"></span><img
                                                    alt="{{$fantasy->title}}"
                                                    sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px"
                                                    src="{{ getImageUrl($fantasy->fantasy->img) }}" decoding="async"
                                                    data-nimg="responsive"
                                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span></a>
                                        <div class="d-flex flex-column flex-grow-1">
                                            <h4 class="small-head mb-2"><a class="overflow-hidden line-clamp-3"
                                                    href="{{route('fantasy.details',$fantasy->slug)}}">{{
                                                    $fantasy->title }}</a></h4>
                                            <div
                                                class="style_articleInfo__WqisT style_articleInfo__LJyqf text-muted d-flex mt-auto">
                                                <span class="d-flex align-items-center"><span
                                                        class="style_icon__Ukkjh style_icon__h3wFw d-block"><span
                                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                alt="Calender" sizes="100vw"
                                                                src="https://www.crictracker.com/_next/static/media/calender-icon.23e624a9.svg"
                                                                decoding="async" data-nimg="responsive"
                                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>{{
                                                    Carbon\Carbon::parse($fantasy->created_at)->format('d M Y')
                                                    }}</span><span class="d-flex align-items-center"><span
                                                        class="style_icon__Ukkjh style_icon__h3wFw d-block"><span
                                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                alt="Clock" sizes="100vw"
                                                                src="https://www.crictracker.com/_next/static/media/clock-icon.c7a46c6e.svg"
                                                                decoding="async" data-nimg="responsive"
                                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>{{$fantasy->id}}
                                                    Min</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </section>
                        {{-- <h4 class="text-uppercase">Videos</h4>
                        <section>
                            <article id="62e770814cbc935afe342263"
                                class="style_article__IayJx style_articleSmall__SMJc6 undefined light-bg br-lg c-transition">
                                <div class="gx-2 gx-md-3 row">
                                    <div class="col-sm-3 col-12"><a
                                            class="style_postimg__ftSiV mb-2 mb-sm-0 d-block br-md overflow-hidden position-relative a-transition"
                                            href="/cricket-videos/india-vs-west-indies-3rd-t20i-predicted-playing-xis-stats-preview/"><span
                                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                    style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 62.5% 0px 0px;"></span><img
                                                    alt="India vs West Indies - 3rd T20I, Predicted Playing XIs &amp; Stats Preview"
                                                    sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px"
                                                    src="https://www.crictracker.com/_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fvideo%2FOoHMgw0hYN8%2Fmqdefault.jpg&amp;w=1900&amp;q=75"
                                                    decoding="async" data-nimg="responsive"
                                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span><span
                                                class="undefined style_videoBadge__qjPQX video-badge position-absolute start-0 bottom-0 ms-2 mb-2 badge bg-primary">05:03</span></a>
                                    </div>
                                    <div class="d-flex flex-column justify-content-between col-sm-9 col-12">
                                        <div>
                                            <h3 class="small-head mb-2"><a class="overflow-hidden line-clamp-3"
                                                    href="/cricket-videos/india-vs-west-indies-3rd-t20i-predicted-playing-xis-stats-preview/">India
                                                    vs West Indies - 3rd T20I, Predicted Playing XIs &amp; Stats
                                                    Preview</a>
                                            </h3>
                                            <p class="d-none d-sm-block">India vs West Indies - 3rd T20I, Predicted
                                                Playing XIs
                                                &amp; Stats Preview</p>
                                        </div>
                                        <div class="style_articleInfo__WqisT text-muted d-flex"><span
                                                class="d-flex align-items-center"><span
                                                    class="style_icon__Ukkjh d-block"><span
                                                        style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                            style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                            alt="Calender" sizes="100vw"
                                                            src="https://www.crictracker.com/_next/static/media/calender-icon.23e624a9.svg"
                                                            decoding="async" data-nimg="responsive"
                                                            style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>19
                                                Feb 2022</span><span class="d-flex align-items-center"><span
                                                    class="style_icon__Ukkjh d-block"><span
                                                        style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                            style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                            alt="Clock" sizes="100vw"
                                                            src="https://www.crictracker.com/_next/static/media/clock-icon.c7a46c6e.svg"
                                                            decoding="async" data-nimg="responsive"
                                                            style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>2
                                                Min</span></div>
                                    </div>
                                </div>
                            </article>
                            <div class="row">
                                <div id="62e7707e4cbc935afe34225d" class="col-lg-4 col-sm-6">
                                    <article
                                        class="style_article__IayJx style_articleGrid__LHxgp undefined flex-sm-column align-items-top style_mobileSmall__SYPwG d-flex light-bg br-lg c-transition"
                                        id="62e7707e4cbc935afe34225d"><a
                                            class="style_postimg__ftSiV style_postimg__pbfkX d-block mb-0 mb-sm-2 overflow-hidden br-md position-relative a-transition"
                                            href="/cricket-videos/ind-vs-wi-2nd-t20i-pre-match-live-cricket-analysis/"><span
                                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                    style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 62.5% 0px 0px;"></span><img
                                                    alt="IND vs WI, 2nd T20I - Pre Match Live Cricket Analysis"
                                                    sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px"
                                                    src="https://www.crictracker.com/_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fvideo%2F0Hv9phGxf30%2Fhqdefault.jpg&amp;w=1900&amp;q=75"
                                                    decoding="async" data-nimg="responsive"
                                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span><span
                                                class="undefined style_videoBadge__qjPQX video-badge position-absolute start-0 bottom-0 ms-2 mb-2 badge bg-primary">
                                                14:40</span></a>
                                        <div class="d-flex flex-column flex-grow-1">
                                            <h4 class="small-head mb-2"><a class="overflow-hidden line-clamp-3"
                                                    href="/cricket-videos/ind-vs-wi-2nd-t20i-pre-match-live-cricket-analysis/">IND
                                                    vs WI, 2nd T20I - Pre Match Live Cricket Analysis</a></h4>
                                            <div
                                                class="style_articleInfo__WqisT style_articleInfo__LJyqf text-muted d-flex mt-auto">
                                                <span class="d-flex align-items-center"><span
                                                        class="style_icon__Ukkjh style_icon__h3wFw d-block"><span
                                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                alt="Calender" sizes="100vw"
                                                                src="https://www.crictracker.com/_next/static/media/calender-icon.23e624a9.svg"
                                                                decoding="async" data-nimg="responsive"
                                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>18
                                                    Feb 2022</span><span class="d-flex align-items-center"><span
                                                        class="style_icon__Ukkjh style_icon__h3wFw d-block"><span
                                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                alt="Clock" sizes="100vw"
                                                                src="https://www.crictracker.com/_next/static/media/clock-icon.c7a46c6e.svg"
                                                                decoding="async" data-nimg="responsive"
                                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>2
                                                    Min</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div id="62e7707c4cbc935afe342257" class="col-lg-4 col-sm-6">
                                    <article
                                        class="style_article__IayJx style_articleGrid__LHxgp undefined flex-sm-column align-items-top style_mobileSmall__SYPwG d-flex light-bg br-lg c-transition"
                                        id="62e7707c4cbc935afe342257"><a
                                            class="style_postimg__ftSiV style_postimg__pbfkX d-block mb-0 mb-sm-2 overflow-hidden br-md position-relative a-transition"
                                            href="/cricket-videos/india-vs-west-indies-2nd-t20i-predicted-playing-xis-stats-preview/"><span
                                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                    style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 62.5% 0px 0px;"></span><img
                                                    alt="India vs West Indies - 2nd T20I, Predicted Playing XIs &amp; Stats Preview"
                                                    sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px"
                                                    src="https://www.crictracker.com/_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fvideo%2FmMY81cvI7Mo%2Fhqdefault.jpg&amp;w=1900&amp;q=75"
                                                    decoding="async" data-nimg="responsive"
                                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span><span
                                                class="undefined style_videoBadge__qjPQX video-badge position-absolute start-0 bottom-0 ms-2 mb-2 badge bg-primary">
                                                04:03</span></a>
                                        <div class="d-flex flex-column flex-grow-1">
                                            <h4 class="small-head mb-2"><a class="overflow-hidden line-clamp-3"
                                                    href="/cricket-videos/india-vs-west-indies-2nd-t20i-predicted-playing-xis-stats-preview/">India
                                                    vs West Indies - 2nd T20I, Predicted Playing XIs &amp; Stats
                                                    Preview</a>
                                            </h4>
                                            <div
                                                class="style_articleInfo__WqisT style_articleInfo__LJyqf text-muted d-flex mt-auto">
                                                <span class="d-flex align-items-center"><span
                                                        class="style_icon__Ukkjh style_icon__h3wFw d-block"><span
                                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                alt="Calender" sizes="100vw"
                                                                src="https://www.crictracker.com/_next/static/media/calender-icon.23e624a9.svg"
                                                                decoding="async" data-nimg="responsive"
                                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>17
                                                    Feb 2022</span><span class="d-flex align-items-center"><span
                                                        class="style_icon__Ukkjh style_icon__h3wFw d-block"><span
                                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                alt="Clock" sizes="100vw"
                                                                src="https://www.crictracker.com/_next/static/media/clock-icon.c7a46c6e.svg"
                                                                decoding="async" data-nimg="responsive"
                                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>2
                                                    Min</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div id="62e7707a4cbc935afe342251" class="col-lg-4 col-sm-6">
                                    <article
                                        class="style_article__IayJx style_articleGrid__LHxgp undefined flex-sm-column align-items-top style_mobileSmall__SYPwG d-flex light-bg br-lg c-transition"
                                        id="62e7707a4cbc935afe342251"><a
                                            class="style_postimg__ftSiV style_postimg__pbfkX d-block mb-0 mb-sm-2 overflow-hidden br-md position-relative a-transition"
                                            href="/cricket-videos/ind-vs-wi-1st-t20i-post-match-live-analysis/"><span
                                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                    style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 62.5% 0px 0px;"></span><img
                                                    alt="IND vs WI, 1st T20I - Post Match Live Analysis"
                                                    sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px"
                                                    src="https://www.crictracker.com/_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fvideo%2FZvOqnLv2Ecw%2Fhqdefault.jpg&amp;w=1900&amp;q=75"
                                                    decoding="async" data-nimg="responsive"
                                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span><span
                                                class="undefined style_videoBadge__qjPQX video-badge position-absolute start-0 bottom-0 ms-2 mb-2 badge bg-primary">
                                                12:52</span></a>
                                        <div class="d-flex flex-column flex-grow-1">
                                            <h4 class="small-head mb-2"><a class="overflow-hidden line-clamp-3"
                                                    href="/cricket-videos/ind-vs-wi-1st-t20i-post-match-live-analysis/">IND
                                                    vs
                                                    WI,
                                                    1st T20I - Post Match Live Analysis</a></h4>
                                            <div
                                                class="style_articleInfo__WqisT style_articleInfo__LJyqf text-muted d-flex mt-auto">
                                                <span class="d-flex align-items-center"><span
                                                        class="style_icon__Ukkjh style_icon__h3wFw d-block"><span
                                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                alt="Calender" sizes="100vw"
                                                                src="https://www.crictracker.com/_next/static/media/calender-icon.23e624a9.svg"
                                                                decoding="async" data-nimg="responsive"
                                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>16
                                                    Feb 2022</span><span class="d-flex align-items-center"><span
                                                        class="style_icon__Ukkjh style_icon__h3wFw d-block"><span
                                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                alt="Clock" sizes="100vw"
                                                                src="https://www.crictracker.com/_next/static/media/clock-icon.c7a46c6e.svg"
                                                                decoding="async" data-nimg="responsive"
                                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>2
                                                    Min</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                            </div>
                            <div class="text-center theme-text"><a class="theme-btn small-btn"
                                    href="/west-indies-vs-india/videos/">More Videos &gt;</a></div>
                        </section> --}}
                    </div>
                    <!-- HOME SECTION END -->

                    {{-- haresh-news --}}

                    <!-- NEWS SECTION START -->
                    <div class="style_seriesHome__Jnsnk news-data hide tabs-data">
                        <h4 class="text-uppercase">News</h4>
                        <div class="row">
                            @foreach ($news as $new)
                            @if (in_array($new->type,['highlighter']))
                            <div id="{{$new->id}}" class="col-lg-12 col-sm-6">
                                <article
                                    class="style_article__IayJx style_articleGrid__LHxgp undefined flex-sm-column align-items-top style_mobileSmall__SYPwG d-flex light-bg br-lg c-transition"
                                    id="{{$new->id}}"><a
                                        class="style_postimg__ftSiV style_postimg__pbfkX d-block mb-0 mb-sm-2 overflow-hidden br-md position-relative a-transition"
                                        href="{{route('news.details',$new->slug)}}"><span
                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 62.5% 0px 0px;"></span><img
                                                alt="Team India ODI."
                                                sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px"
                                                src="{{getImageUrl($new->img)}}" decoding="async" data-nimg="responsive"
                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span></a>
                                    <div class="d-flex flex-column flex-grow-1">
                                        <h4 class="small-head mb-2"><a class="overflow-hidden line-clamp-3"
                                                href="{{route('news.details',$new->slug)}}">{{ $new->title }}</a></h4>
                                        <div
                                            class="style_articleInfo__WqisT style_articleInfo__LJyqf text-muted d-flex mt-auto">
                                            <span class="d-flex align-items-center"><span
                                                    class="style_icon__Ukkjh style_icon__h3wFw d-block"><span
                                                        style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                            style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                            alt="Calender" sizes="100vw"
                                                            src="https://www.crictracker.com/_next/static/media/calender-icon.23e624a9.svg"
                                                            decoding="async" data-nimg="responsive"
                                                            style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>{{Carbon\Carbon::parse($new->created_at)->format('d
                                                M Y')}}</span><span class="d-flex align-items-center"><span
                                                    class="style_icon__Ukkjh style_icon__h3wFw d-block"><span
                                                        style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                            style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                            alt="Clock" sizes="100vw"
                                                            src="https://www.crictracker.com/_next/static/media/clock-icon.c7a46c6e.svg"
                                                            decoding="async" data-nimg="responsive"
                                                            style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>{{$new->min}}
                                                Min</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @else
                            <div id="{{$new->id}}" class="col-12">
                                <article id="{{$new->id}}"
                                    class="style_article__IayJx style_articleSmall__SMJc6 undefined light-bg br-lg c-transition">
                                    <div class="gx-2 gx-md-3 row">
                                        <div class="col-sm-3 col-12"><a
                                                class="style_postimg__ftSiV mb-2 mb-sm-0 d-block br-md overflow-hidden position-relative a-transition"
                                                href="{{route('news.details',[$new->slug])}}"><span
                                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 62.5% 0px 0px;"></span><img
                                                        alt="David Warner"
                                                        sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px"
                                                        src="{{ getImageUrl($new->img) }}" decoding="async"
                                                        data-nimg="responsive"
                                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span></a>
                                        </div>
                                        <div class="d-flex flex-column justify-content-between col-sm-9 col-12">
                                            <div>
                                                <h3 class="small-head mb-2"><a class="overflow-hidden line-clamp-3"
                                                        href="{{route('news.details',[$new->slug])}}">{!! $new->title
                                                        !!}</a></h3>
                                                <p class="d-none d-sm-block">{!! $new->short_description !!}</p>
                                            </div>
                                            <div class="style_articleInfo__WqisT text-muted d-flex"><span
                                                    class="d-flex align-items-center"><span
                                                        class="style_icon__Ukkjh d-block"><span
                                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                alt="Calender" sizes="100vw"
                                                                src="https://www.crictracker.com/_next/static/media/calender-icon.23e624a9.svg"
                                                                decoding="async" data-nimg="responsive"
                                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>{{Carbon\Carbon::parse($new->created_at)->format('d
                                                    M Y')}}</span><span class="d-flex align-items-center"><span
                                                        class="style_icon__Ukkjh d-block"><span
                                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                alt="Clock" sizes="100vw"
                                                                src="https://www.crictracker.com/_next/static/media/clock-icon.c7a46c6e.svg"
                                                                decoding="async" data-nimg="responsive"
                                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>{{$new->min}}
                                                    Min</span></div>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- NEWS SECTION END -->

                    <!-- VIDEOS SECTION START -->
                    <!-- <div class="style_seriesHome__Jnsnk videos-data hide tabs-data">
                        <h4 class="text-uppercase">Videos</h4>
                    </div> -->
                    <!-- VIDEOS SECTION END -->

                    <!-- FIXTURES SECTION START -->
                    <div class="style_seriesHome__Jnsnk fixtures-data hide tabs-data">
                        <h4 class="text-uppercase">fixtures</h4>
                        <form class="d-flex align-items-center mb-3" action="{{ route('season.details',$cId) }}"
                            method="get">
                            <div class="style_filter__C0s78 flex-grow-1 row">
                                <div class="col">
                                    <div class="form_formGroup__0jaCW mb-0">
                                        <select class="" name="team" id="team">
                                            <option value="" selected>ALL Team</option>
                                            @foreach ($teams['teams'] as $team)
                                            <option {{ $team['tid']==Request::get('team') ? 'selected' : '' }}
                                                value="{{ $team['tid'] }}">{{ $team['title'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form_formGroup__0jaCW mb-0">
                                        <select class="" name="venue" id="venue">
                                            <option value="" selected>ALL Venue</option>
                                            @foreach ($matchs as $venue)
                                            <option {{ $venue['venue']['venue_id']==Request::get('venue') ? 'selected'
                                                : '' }} value="{{ $venue['venue']['venue_id'] }}">
                                                {{$venue['venue']['name'],
                                                $venue['venue']['location'],$venue['venue']['country']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="theme-btn outline-btn small-btn ms-2 ms-md-3 btn btn-primary">Search</button>
                        </form>


                        <div class="undefined">

                            @foreach ($response as $fixtures)
                            <div class="style_fixturesList__BfccH mb-3 " id="{{$fixtures['match_id']}}">
                                <div class="style_fixturesItem__aBs0G common-box mb-2 p-md-3 br-md false">

                                    <div
                                        class="style_head__9u_y_ mb-md-2 pb-md-2 d-flex flex-column flex-md-row xsmall-text">
                                        <p class="style_matchTime__L9427 mb-2 pb-2 mb-md-0 pb-md-0 font-semi">{{
                                            Carbon\Carbon::parse($fixtures['date_start'])->format('d M Y, D, h:i A')
                                            }} IST</p>
                                        <div
                                            class="undefined d-flex align-items-center justify-content-between flex-grow-1">
                                            <p class="d-flex align-items-start style_matchStatus__r9UVQ text-success">
                                                <span
                                                    class="d-inline-flex align-items-center me-1 style_completed__EYra3">Result</span>
                                                {{ $fixtures['status_note'] }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="style_content__OMegF d-flex flex-column flex-md-row align-items-center">
                                        <div class="style_infoList__GrEIP d-flex flex-wrap flex-md-column xsmall-text">
                                            <p class="font-semi text-dark"><span class="text-capitalize">test</span> -
                                                {{ordinal($fixtures['match_number'])}}
                                                {{ $fixtures['format_str'] }}
                                            </p>
                                            <p class="text-muted">{{$fixtures['venue']['name'],
                                                $fixtures['venue']['location'], $fixtures['venue']['country']}}</p>
                                        </div>
                                        <div class="style_teams__hQsmA mt-2 mt-md-0 font-semi flex-grow-1">
                                            <div
                                                class="style_team__SeosN d-flex align-items-center justify-content-between mt-1 mb-2 mb-md-3">
                                                <div class="style_name__O798i d-flex align-items-center">
                                                    <div class="style_icon__ECf4T flex-shrink-0"><span
                                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                alt="West Indies"
                                                                sizes="(max-width: 767px) 40px, (max-width: 991px) 40px, (max-width: 1190px) 200px, 40px"
                                                                src="{{ $fixtures['teama']['thumb_url'] }}"
                                                                decoding="async" data-nimg="responsive"
                                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                                                    </div>
                                                    <p>
                                                        {{$fixtures['teama']['name']}}
                                                        @if ($fixtures['teama']['team_id'] ==
                                                        $fixtures['winning_team_id'])
                                                        <span class="style_winner__P6fXE ms-2 d-inline-block"><svg
                                                                width="24px" height="24px" viewBox="0 0 24 24"
                                                                version="1.1" xmlns="http://www.w3.org/2000/svg">

                                                                <g id="cup-icon" stroke="none" stroke-width="1"
                                                                    fill="none" fill-rule="evenodd">
                                                                    <path
                                                                        d="M19,5 L17,5 L17,3 L7,3 L7,5 L5,5 C3.9,5 3,5.9 3,7 L3,8 C3,10.55 4.92,12.63 7.39,12.94 C8.02,14.44 9.37,15.57 11,15.9 L11,19 L7,19 L7,21 L17,21 L17,19 L13,19 L13,15.9 C14.63,15.57 15.98,14.44 16.61,12.94 C19.08,12.63 21,10.55 21,8 L21,7 C21,5.9 20.1,5 19,5 Z M5,8 L5,7 L7,7 L7,10.82 C5.84,10.4 5,9.3 5,8 Z M19,8 C19,9.3 18.16,10.4 17,10.82 L17,7 L19,7 L19,8 Z"
                                                                        id="Shape" fill="#0E3778" fill-rule="nonzero">
                                                                    </path>
                                                                </g>
                                                            </svg></span>
                                                        @endif
                                                    </p>
                                                </div>
                                                <p class="undefined">{{ $fixtures['teama']['scores_full'] }}</p>
                                            </div>
                                            <div
                                                class="style_team__SeosN d-flex align-items-center justify-content-between mb-1">
                                                <div class="style_name__O798i d-flex align-items-center">
                                                    <div class="style_icon__ECf4T flex-shrink-0"><span
                                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                                alt="India"
                                                                sizes="(max-width: 767px) 40px, (max-width: 991px) 40px, (max-width: 1190px) 200px, 40px"
                                                                src="{{$fixtures['teamb']['thumb_url']}}"
                                                                decoding="async" data-nimg="responsive"
                                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                                                    </div>
                                                    <p>{{$fixtures['teamb']['name']}}
                                                        @if ($fixtures['teamb']['team_id'] ==
                                                        $fixtures['winning_team_id'])
                                                        <span class="style_winner__P6fXE ms-2 d-inline-block"><svg
                                                                width="24px" height="24px" viewBox="0 0 24 24"
                                                                version="1.1" xmlns="http://www.w3.org/2000/svg">

                                                                <g id="cup-icon" stroke="none" stroke-width="1"
                                                                    fill="none" fill-rule="evenodd">
                                                                    <path
                                                                        d="M19,5 L17,5 L17,3 L7,3 L7,5 L5,5 C3.9,5 3,5.9 3,7 L3,8 C3,10.55 4.92,12.63 7.39,12.94 C8.02,14.44 9.37,15.57 11,15.9 L11,19 L7,19 L7,21 L17,21 L17,19 L13,19 L13,15.9 C14.63,15.57 15.98,14.44 16.61,12.94 C19.08,12.63 21,10.55 21,8 L21,7 C21,5.9 20.1,5 19,5 Z M5,8 L5,7 L7,7 L7,10.82 C5.84,10.4 5,9.3 5,8 Z M19,8 C19,9.3 18.16,10.4 17,10.82 L17,7 L19,7 L19,8 Z"
                                                                        id="Shape" fill="#0E3778" fill-rule="nonzero">
                                                                    </path>
                                                                </g>
                                                            </svg></span>
                                                    </p>
                                                    @endif
                                                </div>
                                                <p class="undefined">{{$fixtures['teamb']['scores_full']}}</p>
                                            </div>
                                        </div>
                                        <div class="style_infoList__GrEIP d-none d-md-block font-semi xsmall-text">
                                            <p><a
                                                    href="/live-scores/wi-vs-ind-1st-test-india-tour-of-west-indies-12-jul-2023/full-scorecard/">Scorecard</a>
                                            </p>
                                            <p><a
                                                    href="/live-scores/wi-vs-ind-1st-test-india-tour-of-west-indies-12-jul-2023/">Full
                                                    Commentary</a></p>
                                            <p><a href="/west-indies-vs-india/news/">News</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- FIXTURES SECTION END -->

                    <!-- STATS SECTION START -->
                    <div class="style_seriesHome__Jnsnk stats-data hide tabs-data">
                        <div class="mt-4 gx-2 gx-md-3 row">
                            @foreach ($states['stat_types'] as $statesKey => $state)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="table-responsive">
                                    <table
                                        class="undefined undefined undefined text-center font-semi text-nowrap table">
                                        <thead>
                                            <tr>
                                                <th class="">{{$state['group_title']}} Stats</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class=" align-top">
                                                    <div class="d-flex flex-column">
                                                        @foreach ($state['types'] as $stateTypes)
                                                        <a class="theme-btn outline-btn small-btn outline-light mb-2"
                                                            href="#">{{$stateTypes}}</a>
                                                        @endforeach
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- STATS SECTION END -->

                    <!-- FANTACY SECTION START -->
                    <div class="style_seriesHome__Jnsnk fantasy-data hide tabs-data">
                        <div class="undefined mt-4" id="648c1c46d66cffc597f2a49d">
                            @foreach ($farticles as $f_match)
                            @php $m_details = getMatchDetails($f_match->match_id); @endphp
                            <p class="font-semi mb-2">{{ Carbon\Carbon::parse($m_details['date_start'])->format('d M Y')
                                }}</p>
                            <div
                                class="style_item__Xv7US d-flex flex-column flex-md-row align-items-center common-box text-center">
                                <div class="style_matchInfo__e5NfA col-md-5 pe-md-2">
                                    <p class="undefined mb-0">Match starts at
                                        {{Carbon\Carbon::parse($m_details['date_start'])->format('h:i A')}} IST</p>
                                    <div class="undefined d-flex align-items-center justify-content-center">
                                        <div class="undefined d-flex align-items-center">
                                            <div class="style_flag__T_7st me-2"><span
                                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                        alt="{{$m_details['teama']['name']}}" sizes="100vw"
                                                        src="{{$m_details['teama']['thumb_url']}}" decoding="async"
                                                        data-nimg="responsive"
                                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                                            </div>
                                            <p class="big-text font-semi mb-0">{{$m_details['teama']['name']}}</p>
                                        </div>
                                        <p class="undefined mb-0 ms-4 me-4">V</p>
                                        <div class="undefined d-flex align-items-center">
                                            <div class="style_flag__T_7st me-2"><span
                                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                        alt="{{$m_details['teamb']['name']}}" sizes="100vw"
                                                        src="{{$m_details['teamb']['thumb_url']}}" decoding="async"
                                                        data-nimg="responsive"
                                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                                            </div>
                                            <p class="big-text font-semi mb-0">{{$m_details['teamb']['name']}}</p>
                                        </div>
                                    </div>
                                    <p class="text-muted font-semi mb-0">{{ ordinal($m_details['match_number']) }}
                                        {{$m_details['format_str']}} - {{$m_details['venue']['location']}}</p>
                                </div>
                                <div class="undefined col-md-7 ps-md-2 text-uppercase font-semi">
                                    <div class="d-flex justify-content-center align-items-center flex-wrap"><a
                                            class="style_tipsBtn__a5OIV style_dream11__jLZNg d-flex align-items-center mb-1 mt-1 mb-md-2 mt-sm-2"
                                            href="/fantasy-cricket-tips/dream11-ind-vs-wi-dream11-prediction-playing-xi-fantasy-cricket-tips-injury-updates-pitch-report-for-1st-odi/"><span
                                                class="style_icon__g0nt8 d-block me-2 rounded-circle overflow-hidden"><span
                                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                        alt="Dream 11"
                                                        src="https://www.crictracker.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fdream11-icon.ddcccae1.png&amp;w=1900&amp;q=75"
                                                        decoding="async" data-nimg="responsive" sizes="100vw"
                                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span></span><span>{{$f_match->fantasy->name}}</span></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- FANTACY SECTION END -->

                    <!-- SQAD SECTION START -->
                    <div class="style_seriesHome__Jnsnk squads-data hide tabs-data">

                        <div class="undefined d-flex justify-content-between align-items-center mb-2">
                            <h4 class="text-uppercase mb-0"><span class="text-capitalize">{{$squads[$type]['title']}}
                                    Squad</span></h4>
                            <div class="style_filterStats__pfxfP">
                                <select
                                    class="style_selectNative__gg_ys style_formControl__3Z2Uk style_formSelect__UYPE5 br-sm">
                                    <option disabled="" value="">Team</option>
                                    <option {{ $type==0 ? 'selected' : '' }} value="0">{{$squads[0]['title']}}</option>
                                    <option {{ $type==1 ? 'selected' : '' }} value="1">{{$squads[1]['title']}}</option>
                                </select>
                            </div>
                        </div>

                        <h3 class="small-head">Batsmen</h3>
                        @foreach ($bat as $bats)
                        @include('include.players',['squad' => $bats,'title' => 'Batsmen'])
                        @endforeach
                        <h3 class="small-head">All Rounder</h3>
                        @foreach ($all as $alls)
                        @include('include.players',['squad' => $alls,'title' => 'All Rounder'])
                        @endforeach
                        <h3 class="small-head">Wicket Keeper</h3>
                        @foreach ($wk as $wks)
                        @include('include.players',['squad' => $wks,'title' => 'Wicket Keeper'])
                        @endforeach
                        <h3 class="small-head">Bowler</h3>
                        @foreach ($bowl as $bowls)
                        @include('include.players',['squad' => $bowls,'title' => 'Bowler'])
                        @endforeach
                    </div>
                    <!-- SQUAD SECTION END -->

                    <!-- ARCHIEVES SECTION START -->
                    <div class="style_seriesHome__Jnsnk archives-data hide tabs-data">
                        <h4 class="text-uppercase">Archieves</h4>
                    </div>
                    <!-- ARCHIEVES SECTION END -->
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
    $(function(){
    if ("{{Request::has('q')}}") {
        
        var tab = "{{Request::get('q')}}";
    }else{
        var tab = localStorage.getItem('type',"{{Request::get('q')}}");
    }

    if (tab != null) {
        
        $('.'+tab).click()
    }else{

        $('.home p').click()
    }
})
    
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

$('.style_selectNative__gg_ys').change(function(){
    localStorage.setItem('type','squads');
    window.location.href = "{{ route('season.details',$cId) }}?type="+$(this).val()
})
</script>
@endsection