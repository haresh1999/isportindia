@extends('layout.main')

@section('content')
<section class="style_articleBlockSec__Eg4q3 common-section false">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-start">
            <div class="left-content  col-lg-9">
                <section class="style_matchHeader__gxEVw mb-01">

                    <section class="style_matchHeader__gxEVw mb-01">
                        <div
                            class="style_head__vMFYW light-bg br-md d-md-flex align-items-start justify-content-between position-relative mb-01 overflow-hidden">
                            <div>
                                <h1 class="me-4 me-md-0">{{$response['title']}}, {{$response['subtitle']}} - Live
                                    Cricket Score
                                </h1>
                                <p class="small-text text-muted mb-0"><span><a class="text-decoration-underline"
                                            href="{{ route('season.details',$response['competition']['cid']) }}">{{$response['competition']['title']}},
                                            {{$response['competition']['season']}}</a></span><span> | {{
                                        Carbon\Carbon::parse($response['date_start'])->format('d M Y, D, h:m A') }}
                                        IST</span><span> |
                                        {{$response['venue']['name']}}, {{$response['venue']['location']}}, {{
                                        $response['venue']['country'] }}</span></p>
                            </div>
                            <div class="style_btns__OWjEK d-flex justify-content-end"><button type="button"
                                    class="style_share__oYEEa d-inline-flex align-items-center justify-content-center flex-shrink-0 text-primary btn btn-link"><svg
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="share-icon" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                            <path
                                                d="M13.4,8.64 L13.4,4.8 L20.4,11.52 L13.4,18.24 L13.4,14.304 C8.4,14.304 4.9,15.84 2.4,19.2 C3.4,14.4 6.4,9.6 13.4,8.64 Z"
                                                id="Path" fill="#FFFFFF" fill-rule="nonzero"></path>
                                        </g>
                                    </svg></button></div>
                        </div>
                    </section>

                    <div class="style_matchInfo__YSv4r light-bg d-md-flex br-md">
                        <div class="undefined flex-grow-1">
                            <div class="d-flex align-items-center">
                                @if ($response['status_str'] == 'Completed')
                                <span class="style_badge__03sAu live me-2 me-xl-3 badge bg-success">
                                    <span>Result</span>
                                </span>
                                @else
                                <span class="style_badge__03sAu live me-2 me-xl-3 badge bg-danger">
                                    <span>Live</span>
                                </span>
                                @endif
                                {{ $response['status_note'] }}
                            </div>
                            <div
                                class="undefined d-flex align-items-center justify-content-between justify-content-md-start flex-shrink-0 mt-3 mt-md-3 mb-1">
                                <div class="style_name__f_ChH d-flex align-items-center">
                                    <div class="style_flag__hfzkg"><span
                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                alt="SXI"
                                                sizes="(max-width: 767px) 24px, (max-width: 991px) 24px, (max-width: 1190px) 200px, 24px"
                                                src="{{$response['teama']['logo_url']}}" decoding="async"
                                                data-nimg="responsive"
                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                                    </div>
                                    <p class="big-text font-semi">{{$response['teama']['short_name']}}</p>
                                </div>
                                <p class="undefined text-secondary big-text font-semi">
                                    {{$response['teama']['scores_full']}}</p>
                            </div>
                            <div
                                class="undefined d-flex align-items-center justify-content-between justify-content-md-start flex-shrink-0 mt-3 mt-md-3 mb-1">
                                <div class="style_name__f_ChH d-flex align-items-center">
                                    <div class="style_flag__hfzkg"><span
                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                alt="LXI"
                                                sizes="(max-width: 767px) 24px, (max-width: 991px) 24px, (max-width: 1190px) 200px, 24px"
                                                src="{{$response['teamb']['logo_url']}}" decoding="async"
                                                data-nimg="responsive"
                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                                    </div>
                                    <p class="big-text font-semi">{{$response['teamb']['short_name']}}</p>
                                </div>
                                <div>
                                    <p class="undefined text-primary big-text font-semi">
                                        {{$response['teamb']['scores_full']}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="style_info__OrukW text-md-end">
                            <p class="text-secondary">Current Run Rate : 4.29|Required Run Rate : 5.79</p>
                        </div>
                    </div>
                </section>
                <section
                    class="style_recentOver__0QPAb light-bg d-flex text-center align-items-center py-2 position-relative br-md overflow-hidden">
                    <p class="style_label__sOmM6 mb-0">Recent</p>
                    <div class="style_overSlider__q_DcC over-slider xsmall-text">
                        <div class="style_slider__UbtNO style_navTransparent__LdCAg   position-relative">
                            <button onclick="scrollContent(-1)" id="scroll_1_prev"
                                class="style_arrow__bXMF0 style_prev__wdbiv light-bg position-absolute top-50 start-0">Prev</button>
                            <div id="c-slider" class="style_inner__csGhV slider-track d-flex undefined" id="c-slider"
                                style="gap: 0px;">

                                @foreach ($ball_by_balls as $over => $ball_by_ball)
                                <div>
                                    <div class="style_list__lGEnK d-flex align-items-center px-1 px-xl-2">
                                        <span
                                            class="style_run__Qmv5g style_over__tb1dj h-auto text-muted rounded-pill mx-1 mx-xl-2 px-1 border-0">{{
                                            $over }}
                                            <span class="d-block">Ov</span>
                                        </span>

                                        @foreach ($ball_by_ball as $bbb)
                                        @if ($bbb['event'] == 'wicket')
                                        <span
                                            class="style_run__Qmv5g undefined bg-danger border-danger text-white rounded-pill mx-1 mx-xl-2 px-1">W</span>
                                        @elseif($bbb['event'] == 'ball')
                                        @if ($bbb['run'] == 0)
                                        <span class="style_run__Qmv5g rounded-pill mx-1 mx-xl-2 px-1">0</span>
                                        @elseif(in_array($bbb['run'],[1,2,3,4,5,6]) && $bbb['four'] == false &&
                                        $bbb['six'] == false)
                                        @if ($bbb['wideball'])
                                        <span
                                            class="style_run__Qmv5g undefined bg-info border-info rounded-pill mx-1 mx-xl-2 px-1">{{$bbb['run']}}Wd</span>
                                        @elseif($bbb['noball'])
                                        <span
                                            class="style_run__Qmv5g undefined bg-info border-info rounded-pill mx-1 mx-xl-2 px-1">{{$bbb['bye_run']}}Nb</span>
                                        @elseif($bbb['bye_run'] != 0)
                                        <span
                                            class="style_run__Qmv5g undefined bg-info border-info rounded-pill mx-1 mx-xl-2 px-1">{{$bbb['bye_run']}}b</span>
                                        @elseif($bbb['legbye_run'] != 0)
                                        <span
                                            class="style_run__Qmv5g undefined bg-info border-info rounded-pill mx-1 mx-xl-2 px-1">{{$bbb['legbye_run']}}lb</span>
                                        @else
                                        <span
                                            class="style_run__Qmv5g undefined bg-info border-info rounded-pill mx-1 mx-xl-2 px-1">{{$bbb['run']}}</span>
                                        @endif
                                        @elseif($bbb['four'] == true)
                                        <span
                                            class="style_run__Qmv5g bg-success border-success text-white rounded-pill mx-1 mx-xl-2 px-1">4</span>
                                        @elseif($bbb['six'] == true)
                                        <span
                                            class="style_run__Qmv5g style_runPrimary__rxN5p bg-primary text-white rounded-pill mx-1 mx-xl-2 px-1">6</span>
                                        @endif
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <div onclick="scrollContent(1)" id="scroll_1_next"
                                class="style_arrow__bXMF0 undefined light-bg position-absolute top-50 end-0">Next</div>
                        </div>
                    </div>
                </section>

                <div
                    class="style_commonNav__oQmFF undefined style_stickyNav__I_pcA  mt-3 text-uppercase scroll-list flex-nowrap text-nowrap nav nav-pills">
                    <div class="style_item___mmv9 nav-item"><a
                            id="/live-scores/lxi-vs-sxi-match-12-t20-pondicherry-t20-tournament-04-jul-2023/"
                            class="false nav-link" target="_self"
                            href="/live-scores/lxi-vs-sxi-match-12-t20-pondicherry-t20-tournament-04-jul-2023/">Commentary</a>
                    </div>
                    <div class="style_item___mmv9 nav-item"><a
                            id="/live-scores/lxi-vs-sxi-match-12-t20-pondicherry-t20-tournament-04-jul-2023/full-scorecard/"
                            class="style_active__nlf9x nav-link" target="_self"
                            href="/live-scores/lxi-vs-sxi-match-12-t20-pondicherry-t20-tournament-04-jul-2023/full-scorecard/">Scorecard</a>
                    </div>
                    <div class="style_item___mmv9 nav-item"><a id="/pondicherry-t20-league/standings/"
                            class="false nav-link" target="_blank"
                            href="/pondicherry-t20-league/standings/">Standings</a></div>
                    <div class="style_item___mmv9 nav-item"><a
                            id="/live-scores/lxi-vs-sxi-match-12-t20-pondicherry-t20-tournament-04-jul-2023/overs/"
                            class="false nav-link" target="_self"
                            href="/live-scores/lxi-vs-sxi-match-12-t20-pondicherry-t20-tournament-04-jul-2023/overs/">Overs</a>
                    </div>
                    <div class="style_item___mmv9 nav-item"><a
                            id="/live-scores/lxi-vs-sxi-match-12-t20-pondicherry-t20-tournament-04-jul-2023/news/"
                            class="false nav-link" target="_self"
                            href="/live-scores/lxi-vs-sxi-match-12-t20-pondicherry-t20-tournament-04-jul-2023/news/">News</a>
                    </div>
                    <div class="style_item___mmv9 nav-item"><a id="/pondicherry-t20-league/stats/"
                            class="false nav-link" target="_self" href="/pondicherry-t20-league/stats/">Stats</a></div>
                    <div class="style_item___mmv9 nav-item"><a
                            id="/live-scores/lxi-vs-sxi-match-12-t20-pondicherry-t20-tournament-04-jul-2023/fantasy-tips/"
                            class="false nav-link" target="_self"
                            href="/live-scores/lxi-vs-sxi-match-12-t20-pondicherry-t20-tournament-04-jul-2023/fantasy-tips/">Fantasy
                            Tips</a></div>
                    <div class="style_item___mmv9 nav-item"><a
                            id="/live-scores/lxi-vs-sxi-match-12-t20-pondicherry-t20-tournament-04-jul-2023/fixtures-and-results/"
                            class="false nav-link" target="_self"
                            href="/live-scores/lxi-vs-sxi-match-12-t20-pondicherry-t20-tournament-04-jul-2023/fixtures-and-results/">Upcoming</a>
                    </div>
                    <div class="style_item___mmv9 nav-item"><a
                            id="/live-scores/lxi-vs-sxi-match-12-t20-pondicherry-t20-tournament-04-jul-2023/results/"
                            class="false nav-link" target="_self"
                            href="/live-scores/lxi-vs-sxi-match-12-t20-pondicherry-t20-tournament-04-jul-2023/results/">Results</a>
                    </div>
                </div>
                <section class="style_scorecards__Aw5Zl">
                    <div class="accordion">
                        @foreach ($response['innings'] as $innings)
                        <div onclick="accordionClickHandler(this)" class="accordion-item">
                            <h2 class="style_scoreHead__8Qy8g accordion-header"><button type="button"
                                    aria-expanded="true" class="accordion-button">
                                    <div
                                        class="undefined d-flex justify-content-between align-items-center flex-grow-1 pe-1">
                                        {{$innings['short_name']}} <span>{{$innings['scores_full']}}</span></div>
                                </button></h2>
                            <div class="accordion-collapse collapse show" style="">
                                <div class="undefined p-0 my-2 bg-transparent accordion-body">
                                    <div class="style_scorecardTable__4bErc">
                                        <div class="table-responsive">
                                            <table
                                                class="undefined bordered br-sm overflow-hidden undefined text-center font-semi text-nowrap table">
                                                <thead>
                                                    <tr>
                                                        <th class="">Batter</th>
                                                        <th class="">
                                                            <span class="d-none d-sm-inline">Runs</span><span
                                                                class="d-sm-none">R</span>
                                                        </th>
                                                        <th class="">
                                                            <span class="d-none d-sm-inline">Balls</span><span
                                                                class="d-sm-none">B</span>
                                                        </th>
                                                        <th class="">4s</th>
                                                        <th class="">6s</th>
                                                        <th class="">SR</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($innings['batsmen'] as $bat)
                                                    <tr class="undefined">
                                                        <td>
                                                            <span class="d-flex flex-column flex-md-row">
                                                                <span class="style_batterName__PG3_C d-flex ">
                                                                    <span
                                                                        class="d-none d-sm-block">{{$bat['name']}}</span>
                                                                    <span
                                                                        class="d-block d-sm-none">{{$bat['name']}}</span>
                                                                    <span class="ps-1">
                                                                        @if (in_array($bat['role'],['bat','wkbat']))
                                                                        <span
                                                                            class="d-flex text-center text-light xsmall-text">
                                                                            <span class="style_icon__hTxaO">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <g clip-path="url(#clip0_677_858)">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M15.806 6.21117L13.4774 10.2012C13.2107 10.6758 12.914 11.1352 12.558 11.6838C12.914 11.4172 13.388 11.1352 13.9374 10.7645L17.956 8.15517L15.806 6.21117ZM15.524 5.6485C15.346 5.6485 15.1534 5.6485 15.0647 5.6485C14.4114 5.6485 13.848 5.92984 13.4774 6.3005L3.70404 16.3412C3.52604 16.4298 3.33337 16.7118 3.33337 17.1718C3.33337 17.4532 3.42204 17.7358 3.61471 18.1058C3.98537 18.6692 4.44537 19.2185 4.83071 19.4998C5.29071 19.9598 6.31404 20.8052 7.24804 20.7158C7.61937 20.7158 7.90071 20.6118 8.07937 20.3305L17.956 10.3938C18.416 9.8305 18.6087 9.0885 18.5054 8.43584L15.524 5.6485ZM21.2934 3.7945C21.2934 3.5125 21.2047 3.2305 20.9227 2.94917C20.7447 2.7705 20.3734 2.6665 20.092 2.6665C19.7214 2.6665 19.4394 2.7705 19.1574 3.0525L16.3694 5.92984L18.1347 7.60517L21.026 4.71317C21.2047 4.4465 21.3974 4.16517 21.2934 3.7945Z"
                                                                                            fill="#045DE9"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        @elseif ($bat['role'] == 'bowl')
                                                                        <span
                                                                            class="d-flex text-center text-light xsmall-text"><span
                                                                                class="style_icon__hTxaO"><svg
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <g clip-path="url(#clip0_677_851)">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M19.2281 8.58073C19.3111 8.75379 19.3935 8.92561 19.4902 9.09866C19.8346 10.0508 20 11.0029 20 12.0375C20 16.4533 16.4584 20 12.0483 20C9.62304 20 7.55583 18.9648 6.08084 17.3154C5.99845 17.233 5.90181 17.1436 5.8188 17.0605C7.63822 15.0663 9.71906 13.342 12.0483 11.8651C14.2116 10.4856 16.6374 9.44354 19.2281 8.58073ZM18.3602 7.1938C18.5393 7.37368 18.6223 7.54611 18.7047 7.71855C18.7871 7.80167 18.8837 7.9741 18.9667 8.06342C16.3754 8.92561 13.9501 10.0508 11.7863 11.4371C9.45764 12.8172 7.37618 14.639 5.47437 16.6257C5.39198 16.4533 5.21295 16.2808 5.12994 16.1084C5.04755 16.0185 5.04755 15.9291 4.95091 15.846C6.86635 13.6868 9.01657 11.8651 11.4418 10.3957C13.5227 9.09866 15.8519 7.9741 18.3602 7.1938ZM17.0643 5.81431C17.2439 5.98674 17.4093 6.15918 17.6707 6.33161C17.7538 6.42155 17.9328 6.59399 18.0158 6.76643C15.5075 7.54611 13.2613 8.58073 11.1798 9.96767C8.76816 11.4371 6.59068 13.1689 4.68886 15.3287C4.60647 15.0663 4.52346 14.7215 4.44107 14.4591C4.35868 14.3766 4.35868 14.2041 4.26204 14.1142C6.08084 12.0375 8.16168 10.3125 10.4909 8.92561C12.4894 7.62923 14.722 6.67711 17.0643 5.81431ZM12.0483 4C13.6881 4 15.2455 4.51731 16.5408 5.46943C14.2946 6.24229 12.1307 7.28436 10.1465 8.49141C7.98265 9.87835 5.90181 11.5202 4.17903 13.4245C4.09664 12.9896 4 12.4723 4 12.0375C4 7.62923 7.63822 4 12.0483 4Z"
                                                                                            fill="#045DE9"></path>
                                                                                    </g>
                                                                                </svg></span></span>
                                                                        @elseif ($bat['role'] == 'wk')
                                                                        <span
                                                                            class="style_captain__4Adix d-block bg-primary text-light text-center xsmall-text rounded-circle">wk</span>
                                                                        @elseif ($bat['role'] == 'all')
                                                                        <span
                                                                            class="d-flex text-center text-light xsmall-text"><span
                                                                                class="style_icon__hTxaO"><svg
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24" version="1.1">
                                                                                    <g id="allrounder-icon"
                                                                                        stroke="none" stroke-width="1"
                                                                                        fill="none" fill-rule="evenodd">
                                                                                        <path
                                                                                            d="M16.806,7.21133333 L14.4773333,11.2013333 C14.2106667,11.676 13.914,12.1353333 13.558,12.684 C13.914,12.4173333 14.388,12.1353333 14.9373333,11.7646667 L18.956,9.15533333 L16.806,7.21133333 Z M16.524,6.64866667 C16.346,6.64866667 16.1533333,6.64866667 16.0646667,6.64866667 C15.4113333,6.64866667 14.848,6.93 14.4773333,7.30066667 L4.704,17.3413333 C4.526,17.43 4.33333333,17.712 4.33333333,18.172 C4.33333333,18.4533333 4.422,18.736 4.61466667,19.106 C4.98533333,19.6693333 5.44533333,20.2186667 5.83066667,20.5 C6.29066667,20.96 7.314,21.8053333 8.248,21.716 C8.61933333,21.716 8.90066667,21.612 9.07933333,21.3306667 L18.956,11.394 C19.416,10.8306667 19.6086667,10.0886667 19.5053333,9.436 L16.524,6.64866667 Z M22.2933333,4.79466667 C22.2933333,4.51266667 22.2046667,4.23066667 21.9226667,3.94933333 C21.7446667,3.77066667 21.3733333,3.66666667 21.092,3.66666667 C20.7213333,3.66666667 20.4393333,3.77066667 20.1573333,4.05266667 L17.3693333,6.93 L19.1346667,8.60533333 L22.026,5.71333333 C22.2046667,5.44666667 22.3973333,5.16533333 22.2933333,4.79466667 L22.2933333,4.79466667 Z"
                                                                                            id="Fill-26" fill="#757A82">
                                                                                        </path>
                                                                                        <path
                                                                                            d="M10.6140623,6.29036635 C10.6555676,6.37689475 10.6967632,6.46280287 10.7450829,6.54933127 C10.9172991,7.02539252 11,7.50145377 11,8.01876333 C11,10.2266331 9.22920861,12 7.02415983,12 C5.81152238,12 4.77791544,11.4823803 4.04042125,10.6577244 C3.99922565,10.6164761 3.95090599,10.5718162 3.90940065,10.5302578 C4.81911104,9.53316534 5.85953229,8.67098275 7.02415983,7.93254507 C8.10577668,7.24279899 9.31872387,6.72176778 10.6140623,6.29036635 Z M10.1801146,5.59689862 C10.2696299,5.68683853 10.3111352,5.77305679 10.3523308,5.85927505 C10.3935264,5.90083349 10.4418461,5.98705175 10.4833514,6.03171157 C9.18770327,6.46280287 7.97506582,7.02539252 6.89313923,7.71855011 C5.72882143,8.40860632 4.68809044,9.31948052 3.73718445,10.3128513 C3.69598885,10.2266331 3.60647359,10.1404148 3.56496825,10.0541965 C3.52377265,10.0092266 3.52377265,9.96456678 3.475453,9.92300833 C4.4331733,8.84341927 5.50828558,7.93254507 6.72092303,7.19782904 C7.76134428,6.54933127 8.92597181,5.98705175 10.1801146,5.59689862 Z M9.53213567,4.90715255 C9.62196066,4.99337081 9.70466161,5.07958907 9.83537246,5.16580733 C9.87687781,5.21077728 9.96639306,5.29699554 10.0078984,5.3832138 C8.75375561,5.77305679 7.63063342,6.29036635 6.58990243,6.98383408 C5.38407929,7.71855011 4.29533839,8.58445435 3.3444324,9.66435356 C3.3032368,9.53316534 3.26173145,9.36072882 3.22053585,9.22954061 C3.17934025,9.1882923 3.17934025,9.10207405 3.1310206,9.05710409 C4.04042125,8.01876333 5.0808425,7.1562706 6.24547003,6.46280287 C7.24469568,5.81461524 8.36100356,5.33855398 9.53213567,4.90715255 Z M7.02415983,4 C7.84404522,4 8.62273502,4.25865478 9.27040421,4.73471603 C8.14728202,5.12114751 7.06535543,5.64217872 6.07325383,6.24570653 C4.99132724,6.93917426 3.95090599,7.76010855 3.08951525,8.71223105 C3.04831965,8.49482458 3,8.2361698 3,8.01876333 C3,5.81461524 4.81911104,4 7.02415983,4 L7.02415983,4 Z"
                                                                                            id="Fill-60" fill="#757A82">
                                                                                        </path>
                                                                                    </g>
                                                                                </svg></span></span>
                                                                        @endif
                                                                    </span>
                                                                </span>
                                                                <span class="style_subText__tojVi text-secondary">{{
                                                                    $bat['how_out'] }}</span>
                                                            </span>
                                                        </td>
                                                        <td>{{$bat['runs']}}</td>
                                                        <td>{{$bat['balls_faced']}}</td>
                                                        <td>{{$bat['fours']}}</td>
                                                        <td>{{$bat['sixes']}}</td>
                                                        <td>{{$bat['strike_rate']}}</td>
                                                    </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="6" class="style_YetToBat__5Inz0">
                                                            <span class="text-uppercase font-bold">Yet To Bat: </span>
                                                            <span class="style_subText__tojVi text-wrap ms-1">
                                                                <span>
                                                                    {{Arr::join(Arr::pluck($innings['did_not_bat'],'name'),
                                                                    ',') }}
                                                                </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-uppercase font-bold">
                                                            <span class="d-flex flex-column flex-md-row">
                                                                <span>Extra</span>
                                                                <span class="style_subText__tojVi">( b -
                                                                    {{$innings['extra_runs']['byes']}}, w -
                                                                    {{$innings['extra_runs']['wides']}}, no -
                                                                    {{$innings['extra_runs']['noballs']}}, lb -
                                                                    {{$innings['extra_runs']['legbyes']}}, p -
                                                                    {{$innings['extra_runs']['penalty']}} )</span>
                                                            </span>
                                                        </td>
                                                        <td>{{$innings['extra_runs']['total']}}</td>
                                                        <td colspan="4"></td>
                                                    </tr>
                                                    <tr class="highlight">
                                                        <td class="text-uppercase font-bold">
                                                            <span class="d-flex flex-column flex-md-row">
                                                                <span>Total</span>
                                                                <span class="style_subText__tojVi">(
                                                                    {{$innings['equations']['runrate'] }} Run Rate
                                                                    )</span>
                                                            </span>
                                                        </td>
                                                        <td>{{$innings['equations']['runs']}}
                                                            ({{$innings['equations']['wickets']}} Wkts,
                                                            {{$innings['equations']['overs']}} Ov)</td>
                                                        <td colspan="4"> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <section class="undefined  common-box p-0 mb-3 br-sm overflow-hidden">
                                        <div class="style_head__Fqbtu style_item__g1PsB">
                                            <p class="text-uppercase text-primary font-bold mb-0">Fall of Wickets</p>
                                        </div>
                                        <div class="style_content__ggGPw style_item__g1PsB">
                                            <p class="mb-0 text-secondary">
                                                @foreach ($innings['fows'] as $fow)
                                                <span
                                                    class="text-dark font-semi">{{$fow['score_at_dismissal']}}-{{$fow['number']}}</span>({{$fow['name']}},{{$fow['overs_at_dismissal']}})
                                                @endforeach
                                            </p>
                                        </div>
                                    </section>
                                    <div class="style_personTbl__gB9id">
                                        <div class="table-responsive">
                                            <table
                                                class="undefined bordered br-sm overflow-hidden undefined text-center font-semi text-nowrap table">
                                                <thead>
                                                    <tr>
                                                        <th class="">Bowler</th>
                                                        <th class="">Ov</th>
                                                        <th class="">M</th>
                                                        <th class="">R</th>
                                                        <th class="">W</th>
                                                        <th class="">NB</th>
                                                        <th class="">WD</th>
                                                        <th class="">Eco</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($innings['bowlers'] as $bow)
                                                    <tr class="undefined">
                                                        <td>{{$bow['name']}}</td>
                                                        <td>{{$bow['overs']}}</td>
                                                        <td>{{$bow['maidens']}}</td>
                                                        <td>{{$bow['runs_conceded']}}</td>
                                                        <td>{{$bow['wickets']}}</td>
                                                        <td>{{$bow['noballs']}}</td>
                                                        <td>{{$bow['wides']}}</td>
                                                        <td>{{$bow['econ']}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
                <section>
                    <section class="undefined">
                        <h4 class="text-uppercase">Info</h4>
                        <div class="undefined font-semi mb-4 br-sm overflow-hidden">
                            <div class="style_item__pM095 d-flex light-bg">
                                <p class="style_label__fPW4v mb-0 text-muted text-uppercase flex-shrink-0">
                                    Series</p>
                                <p class="mb-0">{{$response['title']}}</p>
                            </div>
                            <div class="style_item__pM095 d-flex light-bg">
                                <p class="style_label__fPW4v mb-0 text-muted text-uppercase flex-shrink-0">Date
                                    &amp; Time</p>
                                <p class="mb-0">
                                    {{ Carbon\Carbon::parse($response['date_start_ist'])->format('d M Y, D, h:i A') }}
                                    IST
                                </p>
                            </div>
                            <div class="style_item__pM095 d-flex light-bg">
                                <p class="style_label__fPW4v mb-0 text-muted text-uppercase flex-shrink-0">Toss
                                </p>
                                <p class="mb-0">Lions {{$response['toss']['text']}}</p>
                            </div>
                            <div class="style_item__pM095 d-flex light-bg">
                                <p class="style_label__fPW4v mb-0 text-muted text-uppercase flex-shrink-0">Venue
                                </p>
                                <p class="mb-0">
                                    {{$response['venue']['name']}},
                                    {{$response['venue']['location']}},
                                    {{$response['venue']['country']}}
                                </p>
                            </div>
                            <div class="style_item__pM095 d-flex light-bg">
                                <p class="style_label__fPW4v mb-0 text-muted text-uppercase flex-shrink-0">
                                    Umpires</p>
                                <p class="mb-0">{{$response['umpires']}}</p>
                            </div>
                            <div class="style_item__pM095 d-flex light-bg">
                                <p class="style_label__fPW4v mb-0 text-muted text-uppercase flex-shrink-0">Match
                                    Referee</p>
                                <p class="mb-0">{{$response['referee']}}</p>
                            </div>
                        </div>
                    </section>

                    <div class="style_matchInfoBlock__0lvEF common-box">
                        <section class="common-section pb-0">
                            <div class="style_list__LLnjJ row">
                                <div class="col-sm-6">
                                    <section
                                        class="style_item__s1zmQ d-flex d-sm-block align-items-center justify-content-between mb-1 mb-md-4">
                                        <p
                                            class="undefined style_itemTitle__FpABN text-primary font-bold text-uppercase d-flex align-items-center">
                                            <span class="style_icon__V8Zis me-2"><span
                                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                        alt="weather"
                                                        src="/_next/static/media/weather-icon.f34916df.svg"
                                                        decoding="async" data-nimg="responsive"
                                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                                        sizes="100vw"><noscript></noscript></span></span><span>Weather
                                            </span>
                                        </p>
                                        <div class="big-text font-semi">Overcast Clouds</div>
                                    </section>
                                </div>
                                <div class="col-sm-6">
                                    <section id="pitch"
                                        class="style_item__s1zmQ d-flex d-sm-block align-items-center justify-content-between mb-1 mb-md-4">
                                        <p
                                            class="undefined style_itemTitle__FpABN text-primary font-bold text-uppercase d-flex align-items-center">
                                            <span class="style_icon__V8Zis me-2"><span
                                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                        alt="pitch" src="/_next/static/media/pitch-icon.f758c203.svg"
                                                        decoding="async" data-nimg="responsive"
                                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                                        sizes="100vw"
                                                        srcset="/_next/static/media/pitch-icon.f758c203.svg 450w, /_next/static/media/pitch-icon.f758c203.svg 992w, /_next/static/media/pitch-icon.f758c203.svg 1200w, /_next/static/media/pitch-icon.f758c203.svg 1900w"><noscript></noscript></span></span><span>Pitch
                                                Condition</span>
                                        </p>
                                        <div class="big-text font-semi">Balanced</div>
                                    </section>
                                </div>
                                <div class="col-sm-6">
                                    <section
                                        class="style_item__s1zmQ d-flex d-sm-block align-items-center justify-content-between mb-1 mb-md-4">
                                        <p
                                            class="undefined style_itemTitle__FpABN text-primary font-bold text-uppercase d-flex align-items-center">
                                            <span class="style_icon__V8Zis me-2"><span
                                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                        alt="Score" src="/_next/static/media/flag-icon.542afdb5.svg"
                                                        decoding="async" data-nimg="responsive"
                                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                                        sizes="100vw"
                                                        srcset="/_next/static/media/flag-icon.542afdb5.svg 450w, /_next/static/media/flag-icon.542afdb5.svg 992w, /_next/static/media/flag-icon.542afdb5.svg 1200w, /_next/static/media/flag-icon.542afdb5.svg 1900w"><noscript></noscript></span></span><span>Avg
                                                1st Inning Score</span>
                                        </p>
                                        <div class="big-text font-semi">162</div>
                                    </section>
                                </div>
                                <div class="col-sm-6">
                                    <section
                                        class="style_item__s1zmQ d-flex d-sm-block align-items-center justify-content-between mb-1 mb-md-4">
                                        <p
                                            class="undefined style_itemTitle__FpABN text-primary font-bold text-uppercase d-flex align-items-center">
                                            <span class="style_icon__V8Zis me-2"><span
                                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                        alt="Prediction"
                                                        src="/_next/static/media/wincup-icon.babed16b.svg"
                                                        decoding="async" data-nimg="responsive"
                                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                                        sizes="100vw"
                                                        srcset="/_next/static/media/wincup-icon.babed16b.svg 450w, /_next/static/media/wincup-icon.babed16b.svg 992w, /_next/static/media/wincup-icon.babed16b.svg 1200w, /_next/static/media/wincup-icon.babed16b.svg 1900w"><noscript></noscript></span></span><span>Win
                                                Prediction</span>
                                        </p>
                                        <div class="big-text font-semi">Sharks XI</div>
                                    </section>
                                </div>
                            </div>
                        </section>
                    </div>
                    <section>
                        <h4 class="text-uppercase">Preview</h4>
                        <div class="common-box big-text">
                            @foreach ($response['match_notes'] as $notes)
                            {{ $notes, }}
                            @endforeach
                        </div>
                    </section>

                    <h4 class="text-uppercase">Playing XI</h4>
                    <section class="style_matchSquads__eYjbS common-box">
                        <div class="d-flex g-1">
                            <h3 class="small-head w-50 overflow-hidden text-nowrap">{{ $response['teama']['name'] }}
                            </h3>
                            <h3 class="small-head w-50 overflow-hidden text-nowrap text-end">
                                {{$response['teamb']['name']}}</h3>
                        </div>
                        <div class="undefined d-flex">
                            <div class="style_teamItem__bJEoh flex-grow-1">
                                @foreach ($player['team_a'] as $t1)
                                <div class="style_item__cs_jk d-flex align-items-center">
                                    <div class="style_playerImg__T6Ohg rounded-circle overflow-hidden flex-shrink-0">
                                        <div class="w-100 position-relative overflow-hidden rounded-circle"
                                            style="background-color: rgb(210, 211, 211);">
                                            <div class="w-100">
                                                <span
                                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                        alt="{{$t1['title']}}"
                                                        src="{{$t1['thumb_url']}}&amp;w=1900&amp;q=75" decoding="async"
                                                        data-nimg="responsive"
                                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                                        sizes="100vw"><noscript></noscript></span>
                                            </div>
                                            <div class="position-absolute w-100 h-100 bottom-0 start-0"><span
                                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                        alt="{{$t1['title']}}"
                                                        src="https://www.crictracker.com/_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fteam%2Fjersey%2F300x300%2Findia_8cdea.png&amp;w=1900&amp;q=75"
                                                        decoding="async" data-nimg="responsive"
                                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                                        sizes="100vw"><noscript></noscript></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="style_playerinfo__888H9 d-flex px-1 px-md-2 align-items-center flex-wrap flex-sm-nowrap">
                                        <span class="style_name__os3XG">{{$t1['title']}}</span>
                                        @if ($t1['playing_role'] == 'bat')
                                        <span class="d-flex text-center text-light xsmall-text">
                                            <span class="style_icon__hTxaO">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_677_858)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M15.806 6.21117L13.4774 10.2012C13.2107 10.6758 12.914 11.1352 12.558 11.6838C12.914 11.4172 13.388 11.1352 13.9374 10.7645L17.956 8.15517L15.806 6.21117ZM15.524 5.6485C15.346 5.6485 15.1534 5.6485 15.0647 5.6485C14.4114 5.6485 13.848 5.92984 13.4774 6.3005L3.70404 16.3412C3.52604 16.4298 3.33337 16.7118 3.33337 17.1718C3.33337 17.4532 3.42204 17.7358 3.61471 18.1058C3.98537 18.6692 4.44537 19.2185 4.83071 19.4998C5.29071 19.9598 6.31404 20.8052 7.24804 20.7158C7.61937 20.7158 7.90071 20.6118 8.07937 20.3305L17.956 10.3938C18.416 9.8305 18.6087 9.0885 18.5054 8.43584L15.524 5.6485ZM21.2934 3.7945C21.2934 3.5125 21.2047 3.2305 20.9227 2.94917C20.7447 2.7705 20.3734 2.6665 20.092 2.6665C19.7214 2.6665 19.4394 2.7705 19.1574 3.0525L16.3694 5.92984L18.1347 7.60517L21.026 4.71317C21.2047 4.4465 21.3974 4.16517 21.2934 3.7945Z"
                                                            fill="#045DE9"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </span>
                                        @elseif ($t1['playing_role'] == 'bowl')
                                        <span class="d-flex text-center text-light xsmall-text"><span
                                                class="style_icon__hTxaO"><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_677_851)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M19.2281 8.58073C19.3111 8.75379 19.3935 8.92561 19.4902 9.09866C19.8346 10.0508 20 11.0029 20 12.0375C20 16.4533 16.4584 20 12.0483 20C9.62304 20 7.55583 18.9648 6.08084 17.3154C5.99845 17.233 5.90181 17.1436 5.8188 17.0605C7.63822 15.0663 9.71906 13.342 12.0483 11.8651C14.2116 10.4856 16.6374 9.44354 19.2281 8.58073ZM18.3602 7.1938C18.5393 7.37368 18.6223 7.54611 18.7047 7.71855C18.7871 7.80167 18.8837 7.9741 18.9667 8.06342C16.3754 8.92561 13.9501 10.0508 11.7863 11.4371C9.45764 12.8172 7.37618 14.639 5.47437 16.6257C5.39198 16.4533 5.21295 16.2808 5.12994 16.1084C5.04755 16.0185 5.04755 15.9291 4.95091 15.846C6.86635 13.6868 9.01657 11.8651 11.4418 10.3957C13.5227 9.09866 15.8519 7.9741 18.3602 7.1938ZM17.0643 5.81431C17.2439 5.98674 17.4093 6.15918 17.6707 6.33161C17.7538 6.42155 17.9328 6.59399 18.0158 6.76643C15.5075 7.54611 13.2613 8.58073 11.1798 9.96767C8.76816 11.4371 6.59068 13.1689 4.68886 15.3287C4.60647 15.0663 4.52346 14.7215 4.44107 14.4591C4.35868 14.3766 4.35868 14.2041 4.26204 14.1142C6.08084 12.0375 8.16168 10.3125 10.4909 8.92561C12.4894 7.62923 14.722 6.67711 17.0643 5.81431ZM12.0483 4C13.6881 4 15.2455 4.51731 16.5408 5.46943C14.2946 6.24229 12.1307 7.28436 10.1465 8.49141C7.98265 9.87835 5.90181 11.5202 4.17903 13.4245C4.09664 12.9896 4 12.4723 4 12.0375C4 7.62923 7.63822 4 12.0483 4Z"
                                                            fill="#045DE9"></path>
                                                    </g>
                                                </svg></span></span>
                                        @elseif ($t1['playing_role'] == 'wk')
                                        <span
                                            class="style_captain__4Adix d-block bg-primary text-light text-center xsmall-text rounded-circle">wk</span>
                                        @elseif ($t1['playing_role'] == 'all')
                                        <span class="d-flex text-center text-light xsmall-text"><span
                                                class="style_icon__hTxaO"><svg width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g id="allrounder-icon" stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <path
                                                            d="M16.806,7.21133333 L14.4773333,11.2013333 C14.2106667,11.676 13.914,12.1353333 13.558,12.684 C13.914,12.4173333 14.388,12.1353333 14.9373333,11.7646667 L18.956,9.15533333 L16.806,7.21133333 Z M16.524,6.64866667 C16.346,6.64866667 16.1533333,6.64866667 16.0646667,6.64866667 C15.4113333,6.64866667 14.848,6.93 14.4773333,7.30066667 L4.704,17.3413333 C4.526,17.43 4.33333333,17.712 4.33333333,18.172 C4.33333333,18.4533333 4.422,18.736 4.61466667,19.106 C4.98533333,19.6693333 5.44533333,20.2186667 5.83066667,20.5 C6.29066667,20.96 7.314,21.8053333 8.248,21.716 C8.61933333,21.716 8.90066667,21.612 9.07933333,21.3306667 L18.956,11.394 C19.416,10.8306667 19.6086667,10.0886667 19.5053333,9.436 L16.524,6.64866667 Z M22.2933333,4.79466667 C22.2933333,4.51266667 22.2046667,4.23066667 21.9226667,3.94933333 C21.7446667,3.77066667 21.3733333,3.66666667 21.092,3.66666667 C20.7213333,3.66666667 20.4393333,3.77066667 20.1573333,4.05266667 L17.3693333,6.93 L19.1346667,8.60533333 L22.026,5.71333333 C22.2046667,5.44666667 22.3973333,5.16533333 22.2933333,4.79466667 L22.2933333,4.79466667 Z"
                                                            id="Fill-26" fill="#757A82"></path>
                                                        <path
                                                            d="M10.6140623,6.29036635 C10.6555676,6.37689475 10.6967632,6.46280287 10.7450829,6.54933127 C10.9172991,7.02539252 11,7.50145377 11,8.01876333 C11,10.2266331 9.22920861,12 7.02415983,12 C5.81152238,12 4.77791544,11.4823803 4.04042125,10.6577244 C3.99922565,10.6164761 3.95090599,10.5718162 3.90940065,10.5302578 C4.81911104,9.53316534 5.85953229,8.67098275 7.02415983,7.93254507 C8.10577668,7.24279899 9.31872387,6.72176778 10.6140623,6.29036635 Z M10.1801146,5.59689862 C10.2696299,5.68683853 10.3111352,5.77305679 10.3523308,5.85927505 C10.3935264,5.90083349 10.4418461,5.98705175 10.4833514,6.03171157 C9.18770327,6.46280287 7.97506582,7.02539252 6.89313923,7.71855011 C5.72882143,8.40860632 4.68809044,9.31948052 3.73718445,10.3128513 C3.69598885,10.2266331 3.60647359,10.1404148 3.56496825,10.0541965 C3.52377265,10.0092266 3.52377265,9.96456678 3.475453,9.92300833 C4.4331733,8.84341927 5.50828558,7.93254507 6.72092303,7.19782904 C7.76134428,6.54933127 8.92597181,5.98705175 10.1801146,5.59689862 Z M9.53213567,4.90715255 C9.62196066,4.99337081 9.70466161,5.07958907 9.83537246,5.16580733 C9.87687781,5.21077728 9.96639306,5.29699554 10.0078984,5.3832138 C8.75375561,5.77305679 7.63063342,6.29036635 6.58990243,6.98383408 C5.38407929,7.71855011 4.29533839,8.58445435 3.3444324,9.66435356 C3.3032368,9.53316534 3.26173145,9.36072882 3.22053585,9.22954061 C3.17934025,9.1882923 3.17934025,9.10207405 3.1310206,9.05710409 C4.04042125,8.01876333 5.0808425,7.1562706 6.24547003,6.46280287 C7.24469568,5.81461524 8.36100356,5.33855398 9.53213567,4.90715255 Z M7.02415983,4 C7.84404522,4 8.62273502,4.25865478 9.27040421,4.73471603 C8.14728202,5.12114751 7.06535543,5.64217872 6.07325383,6.24570653 C4.99132724,6.93917426 3.95090599,7.76010855 3.08951525,8.71223105 C3.04831965,8.49482458 3,8.2361698 3,8.01876333 C3,5.81461524 4.81911104,4 7.02415983,4 L7.02415983,4 Z"
                                                            id="Fill-60" fill="#757A82"></path>
                                                    </g>
                                                </svg></span></span>
                                        @elseif ($t1['playing_role'] == 'wkbat')
                                        <span class="d-flex text-center text-light xsmall-text">
                                            <span class="style_icon__hTxaO">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_677_858)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M15.806 6.21117L13.4774 10.2012C13.2107 10.6758 12.914 11.1352 12.558 11.6838C12.914 11.4172 13.388 11.1352 13.9374 10.7645L17.956 8.15517L15.806 6.21117ZM15.524 5.6485C15.346 5.6485 15.1534 5.6485 15.0647 5.6485C14.4114 5.6485 13.848 5.92984 13.4774 6.3005L3.70404 16.3412C3.52604 16.4298 3.33337 16.7118 3.33337 17.1718C3.33337 17.4532 3.42204 17.7358 3.61471 18.1058C3.98537 18.6692 4.44537 19.2185 4.83071 19.4998C5.29071 19.9598 6.31404 20.8052 7.24804 20.7158C7.61937 20.7158 7.90071 20.6118 8.07937 20.3305L17.956 10.3938C18.416 9.8305 18.6087 9.0885 18.5054 8.43584L15.524 5.6485ZM21.2934 3.7945C21.2934 3.5125 21.2047 3.2305 20.9227 2.94917C20.7447 2.7705 20.3734 2.6665 20.092 2.6665C19.7214 2.6665 19.4394 2.7705 19.1574 3.0525L16.3694 5.92984L18.1347 7.60517L21.026 4.71317C21.2047 4.4465 21.3974 4.16517 21.2934 3.7945Z"
                                                            fill="#045DE9"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </span>
                                        <span
                                            class="style_captain__4Adix d-block bg-primary text-light text-center xsmall-text rounded-circle">wk</span>
                                        @endif

                                        <div class="d-flex align-items-center gap-2"></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="style_teamItem__bJEoh flex-grow-1">
                                @foreach ($player['team_b'] as $t2)
                                <div class="style_item__cs_jk d-flex align-items-center">
                                    <div class="style_playerImg__T6Ohg rounded-circle overflow-hidden flex-shrink-0">
                                        <div class="w-100 position-relative overflow-hidden rounded-circle"
                                            style="background-color: rgb(210, 211, 211);">
                                            <div class="w-100"><span
                                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                        alt="{{$t2['title']}}"
                                                        src="{{$t2['thumb_url']}}&amp;w=1900&amp;q=75" decoding="async"
                                                        data-nimg="responsive"
                                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                                        sizes="100vw"><noscript></noscript></span>
                                            </div>
                                            <div class="position-absolute w-100 h-100 bottom-0 start-0"><span
                                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                        alt="{{$t2['title']}}"
                                                        src="https://www.crictracker.com/_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fteam%2Fjersey%2F300x300%2Findia_8cdea.png&amp;w=1900&amp;q=75"
                                                        decoding="async" data-nimg="responsive"
                                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                                        sizes="100vw"><noscript></noscript></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="style_playerinfo__888H9 d-flex px-1 px-md-2 align-items-center flex-wrap flex-sm-nowrap">
                                        <span class="style_name__os3XG">{{$t2['title']}}</span>
                                        @if ($t2['playing_role'] == 'bat')
                                        <span class="d-flex text-center text-light xsmall-text">
                                            <span class="style_icon__hTxaO">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_677_858)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M15.806 6.21117L13.4774 10.2012C13.2107 10.6758 12.914 11.1352 12.558 11.6838C12.914 11.4172 13.388 11.1352 13.9374 10.7645L17.956 8.15517L15.806 6.21117ZM15.524 5.6485C15.346 5.6485 15.1534 5.6485 15.0647 5.6485C14.4114 5.6485 13.848 5.92984 13.4774 6.3005L3.70404 16.3412C3.52604 16.4298 3.33337 16.7118 3.33337 17.1718C3.33337 17.4532 3.42204 17.7358 3.61471 18.1058C3.98537 18.6692 4.44537 19.2185 4.83071 19.4998C5.29071 19.9598 6.31404 20.8052 7.24804 20.7158C7.61937 20.7158 7.90071 20.6118 8.07937 20.3305L17.956 10.3938C18.416 9.8305 18.6087 9.0885 18.5054 8.43584L15.524 5.6485ZM21.2934 3.7945C21.2934 3.5125 21.2047 3.2305 20.9227 2.94917C20.7447 2.7705 20.3734 2.6665 20.092 2.6665C19.7214 2.6665 19.4394 2.7705 19.1574 3.0525L16.3694 5.92984L18.1347 7.60517L21.026 4.71317C21.2047 4.4465 21.3974 4.16517 21.2934 3.7945Z"
                                                            fill="#045DE9"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </span>
                                        @elseif ($t2['playing_role'] == 'bowl')
                                        <span class="d-flex text-center text-light xsmall-text"><span
                                                class="style_icon__hTxaO"><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_677_851)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M19.2281 8.58073C19.3111 8.75379 19.3935 8.92561 19.4902 9.09866C19.8346 10.0508 20 11.0029 20 12.0375C20 16.4533 16.4584 20 12.0483 20C9.62304 20 7.55583 18.9648 6.08084 17.3154C5.99845 17.233 5.90181 17.1436 5.8188 17.0605C7.63822 15.0663 9.71906 13.342 12.0483 11.8651C14.2116 10.4856 16.6374 9.44354 19.2281 8.58073ZM18.3602 7.1938C18.5393 7.37368 18.6223 7.54611 18.7047 7.71855C18.7871 7.80167 18.8837 7.9741 18.9667 8.06342C16.3754 8.92561 13.9501 10.0508 11.7863 11.4371C9.45764 12.8172 7.37618 14.639 5.47437 16.6257C5.39198 16.4533 5.21295 16.2808 5.12994 16.1084C5.04755 16.0185 5.04755 15.9291 4.95091 15.846C6.86635 13.6868 9.01657 11.8651 11.4418 10.3957C13.5227 9.09866 15.8519 7.9741 18.3602 7.1938ZM17.0643 5.81431C17.2439 5.98674 17.4093 6.15918 17.6707 6.33161C17.7538 6.42155 17.9328 6.59399 18.0158 6.76643C15.5075 7.54611 13.2613 8.58073 11.1798 9.96767C8.76816 11.4371 6.59068 13.1689 4.68886 15.3287C4.60647 15.0663 4.52346 14.7215 4.44107 14.4591C4.35868 14.3766 4.35868 14.2041 4.26204 14.1142C6.08084 12.0375 8.16168 10.3125 10.4909 8.92561C12.4894 7.62923 14.722 6.67711 17.0643 5.81431ZM12.0483 4C13.6881 4 15.2455 4.51731 16.5408 5.46943C14.2946 6.24229 12.1307 7.28436 10.1465 8.49141C7.98265 9.87835 5.90181 11.5202 4.17903 13.4245C4.09664 12.9896 4 12.4723 4 12.0375C4 7.62923 7.63822 4 12.0483 4Z"
                                                            fill="#045DE9"></path>
                                                    </g>
                                                </svg></span></span>
                                        @elseif ($t2['playing_role'] == 'wk')
                                        <span
                                            class="style_captain__4Adix d-block bg-primary text-light text-center xsmall-text rounded-circle">wk</span>

                                        @elseif ($t2['playing_role'] == 'all')
                                        <span class="d-flex text-center text-light xsmall-text"><span
                                                class="style_icon__hTxaO"><svg width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g id="allrounder-icon" stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <path
                                                            d="M16.806,7.21133333 L14.4773333,11.2013333 C14.2106667,11.676 13.914,12.1353333 13.558,12.684 C13.914,12.4173333 14.388,12.1353333 14.9373333,11.7646667 L18.956,9.15533333 L16.806,7.21133333 Z M16.524,6.64866667 C16.346,6.64866667 16.1533333,6.64866667 16.0646667,6.64866667 C15.4113333,6.64866667 14.848,6.93 14.4773333,7.30066667 L4.704,17.3413333 C4.526,17.43 4.33333333,17.712 4.33333333,18.172 C4.33333333,18.4533333 4.422,18.736 4.61466667,19.106 C4.98533333,19.6693333 5.44533333,20.2186667 5.83066667,20.5 C6.29066667,20.96 7.314,21.8053333 8.248,21.716 C8.61933333,21.716 8.90066667,21.612 9.07933333,21.3306667 L18.956,11.394 C19.416,10.8306667 19.6086667,10.0886667 19.5053333,9.436 L16.524,6.64866667 Z M22.2933333,4.79466667 C22.2933333,4.51266667 22.2046667,4.23066667 21.9226667,3.94933333 C21.7446667,3.77066667 21.3733333,3.66666667 21.092,3.66666667 C20.7213333,3.66666667 20.4393333,3.77066667 20.1573333,4.05266667 L17.3693333,6.93 L19.1346667,8.60533333 L22.026,5.71333333 C22.2046667,5.44666667 22.3973333,5.16533333 22.2933333,4.79466667 L22.2933333,4.79466667 Z"
                                                            id="Fill-26" fill="#757A82"></path>
                                                        <path
                                                            d="M10.6140623,6.29036635 C10.6555676,6.37689475 10.6967632,6.46280287 10.7450829,6.54933127 C10.9172991,7.02539252 11,7.50145377 11,8.01876333 C11,10.2266331 9.22920861,12 7.02415983,12 C5.81152238,12 4.77791544,11.4823803 4.04042125,10.6577244 C3.99922565,10.6164761 3.95090599,10.5718162 3.90940065,10.5302578 C4.81911104,9.53316534 5.85953229,8.67098275 7.02415983,7.93254507 C8.10577668,7.24279899 9.31872387,6.72176778 10.6140623,6.29036635 Z M10.1801146,5.59689862 C10.2696299,5.68683853 10.3111352,5.77305679 10.3523308,5.85927505 C10.3935264,5.90083349 10.4418461,5.98705175 10.4833514,6.03171157 C9.18770327,6.46280287 7.97506582,7.02539252 6.89313923,7.71855011 C5.72882143,8.40860632 4.68809044,9.31948052 3.73718445,10.3128513 C3.69598885,10.2266331 3.60647359,10.1404148 3.56496825,10.0541965 C3.52377265,10.0092266 3.52377265,9.96456678 3.475453,9.92300833 C4.4331733,8.84341927 5.50828558,7.93254507 6.72092303,7.19782904 C7.76134428,6.54933127 8.92597181,5.98705175 10.1801146,5.59689862 Z M9.53213567,4.90715255 C9.62196066,4.99337081 9.70466161,5.07958907 9.83537246,5.16580733 C9.87687781,5.21077728 9.96639306,5.29699554 10.0078984,5.3832138 C8.75375561,5.77305679 7.63063342,6.29036635 6.58990243,6.98383408 C5.38407929,7.71855011 4.29533839,8.58445435 3.3444324,9.66435356 C3.3032368,9.53316534 3.26173145,9.36072882 3.22053585,9.22954061 C3.17934025,9.1882923 3.17934025,9.10207405 3.1310206,9.05710409 C4.04042125,8.01876333 5.0808425,7.1562706 6.24547003,6.46280287 C7.24469568,5.81461524 8.36100356,5.33855398 9.53213567,4.90715255 Z M7.02415983,4 C7.84404522,4 8.62273502,4.25865478 9.27040421,4.73471603 C8.14728202,5.12114751 7.06535543,5.64217872 6.07325383,6.24570653 C4.99132724,6.93917426 3.95090599,7.76010855 3.08951525,8.71223105 C3.04831965,8.49482458 3,8.2361698 3,8.01876333 C3,5.81461524 4.81911104,4 7.02415983,4 L7.02415983,4 Z"
                                                            id="Fill-60" fill="#757A82"></path>
                                                    </g>
                                                </svg></span></span>
                                        @elseif ($t2['playing_role'] == 'wkbat')
                                        <span class="d-flex text-center text-light xsmall-text">
                                            <span class="style_icon__hTxaO">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_677_858)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M15.806 6.21117L13.4774 10.2012C13.2107 10.6758 12.914 11.1352 12.558 11.6838C12.914 11.4172 13.388 11.1352 13.9374 10.7645L17.956 8.15517L15.806 6.21117ZM15.524 5.6485C15.346 5.6485 15.1534 5.6485 15.0647 5.6485C14.4114 5.6485 13.848 5.92984 13.4774 6.3005L3.70404 16.3412C3.52604 16.4298 3.33337 16.7118 3.33337 17.1718C3.33337 17.4532 3.42204 17.7358 3.61471 18.1058C3.98537 18.6692 4.44537 19.2185 4.83071 19.4998C5.29071 19.9598 6.31404 20.8052 7.24804 20.7158C7.61937 20.7158 7.90071 20.6118 8.07937 20.3305L17.956 10.3938C18.416 9.8305 18.6087 9.0885 18.5054 8.43584L15.524 5.6485ZM21.2934 3.7945C21.2934 3.5125 21.2047 3.2305 20.9227 2.94917C20.7447 2.7705 20.3734 2.6665 20.092 2.6665C19.7214 2.6665 19.4394 2.7705 19.1574 3.0525L16.3694 5.92984L18.1347 7.60517L21.026 4.71317C21.2047 4.4465 21.3974 4.16517 21.2934 3.7945Z"
                                                            fill="#045DE9"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </span>
                                        <span
                                            class="style_captain__4Adix d-block bg-primary text-light text-center xsmall-text rounded-circle">wk</span>
                                        @endif
                                        <div class="d-flex align-items-center gap-2"></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                        <p class="style_reserve__vHC_0 py-1 my-2 text-center text-uppercase">SQUAD</p>
                        <div class="undefined d-flex">
                            <div class="style_teamItem__bJEoh flex-grow-1">
                                @foreach ($player['team_a_squad'] as $t1s)
                                <div class="style_item__cs_jk d-flex align-items-center">
                                    <div class="style_playerImg__T6Ohg rounded-circle overflow-hidden flex-shrink-0">
                                        <div class="w-100 position-relative overflow-hidden rounded-circle"
                                            style="background-color: rgb(210, 211, 211);">
                                            <div class="w-100">
                                                <span
                                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                        alt="{{$t1s['title']}}"
                                                        src="{{$t1s['thumb_url']}}&amp;w=1900&amp;q=75" decoding="async"
                                                        data-nimg="responsive"
                                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                                        sizes="100vw"><noscript></noscript></span>
                                            </div>
                                            <div class="position-absolute w-100 h-100 bottom-0 start-0"><span
                                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                        alt="{{$t1s['title']}}"
                                                        src="https://www.crictracker.com/_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fteam%2Fjersey%2F300x300%2Findia_8cdea.png&amp;w=1900&amp;q=75"
                                                        decoding="async" data-nimg="responsive"
                                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                                        sizes="100vw"><noscript></noscript></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="style_playerinfo__888H9 d-flex px-1 px-md-2 align-items-center flex-wrap flex-sm-nowrap">
                                        <span class="style_name__os3XG">{{$t1s['title']}}</span>
                                        @if ($t1s['playing_role'] == 'bat')
                                        <span class="d-flex text-center text-light xsmall-text">
                                            <span class="style_icon__hTxaO">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_677_858)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M15.806 6.21117L13.4774 10.2012C13.2107 10.6758 12.914 11.1352 12.558 11.6838C12.914 11.4172 13.388 11.1352 13.9374 10.7645L17.956 8.15517L15.806 6.21117ZM15.524 5.6485C15.346 5.6485 15.1534 5.6485 15.0647 5.6485C14.4114 5.6485 13.848 5.92984 13.4774 6.3005L3.70404 16.3412C3.52604 16.4298 3.33337 16.7118 3.33337 17.1718C3.33337 17.4532 3.42204 17.7358 3.61471 18.1058C3.98537 18.6692 4.44537 19.2185 4.83071 19.4998C5.29071 19.9598 6.31404 20.8052 7.24804 20.7158C7.61937 20.7158 7.90071 20.6118 8.07937 20.3305L17.956 10.3938C18.416 9.8305 18.6087 9.0885 18.5054 8.43584L15.524 5.6485ZM21.2934 3.7945C21.2934 3.5125 21.2047 3.2305 20.9227 2.94917C20.7447 2.7705 20.3734 2.6665 20.092 2.6665C19.7214 2.6665 19.4394 2.7705 19.1574 3.0525L16.3694 5.92984L18.1347 7.60517L21.026 4.71317C21.2047 4.4465 21.3974 4.16517 21.2934 3.7945Z"
                                                            fill="#045DE9"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </span>
                                        @elseif ($t1s['playing_role'] == 'bowl')
                                        <span class="d-flex text-center text-light xsmall-text"><span
                                                class="style_icon__hTxaO"><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_677_851)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M19.2281 8.58073C19.3111 8.75379 19.3935 8.92561 19.4902 9.09866C19.8346 10.0508 20 11.0029 20 12.0375C20 16.4533 16.4584 20 12.0483 20C9.62304 20 7.55583 18.9648 6.08084 17.3154C5.99845 17.233 5.90181 17.1436 5.8188 17.0605C7.63822 15.0663 9.71906 13.342 12.0483 11.8651C14.2116 10.4856 16.6374 9.44354 19.2281 8.58073ZM18.3602 7.1938C18.5393 7.37368 18.6223 7.54611 18.7047 7.71855C18.7871 7.80167 18.8837 7.9741 18.9667 8.06342C16.3754 8.92561 13.9501 10.0508 11.7863 11.4371C9.45764 12.8172 7.37618 14.639 5.47437 16.6257C5.39198 16.4533 5.21295 16.2808 5.12994 16.1084C5.04755 16.0185 5.04755 15.9291 4.95091 15.846C6.86635 13.6868 9.01657 11.8651 11.4418 10.3957C13.5227 9.09866 15.8519 7.9741 18.3602 7.1938ZM17.0643 5.81431C17.2439 5.98674 17.4093 6.15918 17.6707 6.33161C17.7538 6.42155 17.9328 6.59399 18.0158 6.76643C15.5075 7.54611 13.2613 8.58073 11.1798 9.96767C8.76816 11.4371 6.59068 13.1689 4.68886 15.3287C4.60647 15.0663 4.52346 14.7215 4.44107 14.4591C4.35868 14.3766 4.35868 14.2041 4.26204 14.1142C6.08084 12.0375 8.16168 10.3125 10.4909 8.92561C12.4894 7.62923 14.722 6.67711 17.0643 5.81431ZM12.0483 4C13.6881 4 15.2455 4.51731 16.5408 5.46943C14.2946 6.24229 12.1307 7.28436 10.1465 8.49141C7.98265 9.87835 5.90181 11.5202 4.17903 13.4245C4.09664 12.9896 4 12.4723 4 12.0375C4 7.62923 7.63822 4 12.0483 4Z"
                                                            fill="#045DE9"></path>
                                                    </g>
                                                </svg></span></span>
                                        @elseif ($t1s['playing_role'] == 'wk')
                                        <span
                                            class="style_captain__4Adix d-block bg-primary text-light text-center xsmall-text rounded-circle">wk</span>
                                        @elseif ($t1s['playing_role'] == 'all')
                                        <span class="d-flex text-center text-light xsmall-text"><span
                                                class="style_icon__hTxaO"><svg width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g id="allrounder-icon" stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <path
                                                            d="M16.806,7.21133333 L14.4773333,11.2013333 C14.2106667,11.676 13.914,12.1353333 13.558,12.684 C13.914,12.4173333 14.388,12.1353333 14.9373333,11.7646667 L18.956,9.15533333 L16.806,7.21133333 Z M16.524,6.64866667 C16.346,6.64866667 16.1533333,6.64866667 16.0646667,6.64866667 C15.4113333,6.64866667 14.848,6.93 14.4773333,7.30066667 L4.704,17.3413333 C4.526,17.43 4.33333333,17.712 4.33333333,18.172 C4.33333333,18.4533333 4.422,18.736 4.61466667,19.106 C4.98533333,19.6693333 5.44533333,20.2186667 5.83066667,20.5 C6.29066667,20.96 7.314,21.8053333 8.248,21.716 C8.61933333,21.716 8.90066667,21.612 9.07933333,21.3306667 L18.956,11.394 C19.416,10.8306667 19.6086667,10.0886667 19.5053333,9.436 L16.524,6.64866667 Z M22.2933333,4.79466667 C22.2933333,4.51266667 22.2046667,4.23066667 21.9226667,3.94933333 C21.7446667,3.77066667 21.3733333,3.66666667 21.092,3.66666667 C20.7213333,3.66666667 20.4393333,3.77066667 20.1573333,4.05266667 L17.3693333,6.93 L19.1346667,8.60533333 L22.026,5.71333333 C22.2046667,5.44666667 22.3973333,5.16533333 22.2933333,4.79466667 L22.2933333,4.79466667 Z"
                                                            id="Fill-26" fill="#757A82"></path>
                                                        <path
                                                            d="M10.6140623,6.29036635 C10.6555676,6.37689475 10.6967632,6.46280287 10.7450829,6.54933127 C10.9172991,7.02539252 11,7.50145377 11,8.01876333 C11,10.2266331 9.22920861,12 7.02415983,12 C5.81152238,12 4.77791544,11.4823803 4.04042125,10.6577244 C3.99922565,10.6164761 3.95090599,10.5718162 3.90940065,10.5302578 C4.81911104,9.53316534 5.85953229,8.67098275 7.02415983,7.93254507 C8.10577668,7.24279899 9.31872387,6.72176778 10.6140623,6.29036635 Z M10.1801146,5.59689862 C10.2696299,5.68683853 10.3111352,5.77305679 10.3523308,5.85927505 C10.3935264,5.90083349 10.4418461,5.98705175 10.4833514,6.03171157 C9.18770327,6.46280287 7.97506582,7.02539252 6.89313923,7.71855011 C5.72882143,8.40860632 4.68809044,9.31948052 3.73718445,10.3128513 C3.69598885,10.2266331 3.60647359,10.1404148 3.56496825,10.0541965 C3.52377265,10.0092266 3.52377265,9.96456678 3.475453,9.92300833 C4.4331733,8.84341927 5.50828558,7.93254507 6.72092303,7.19782904 C7.76134428,6.54933127 8.92597181,5.98705175 10.1801146,5.59689862 Z M9.53213567,4.90715255 C9.62196066,4.99337081 9.70466161,5.07958907 9.83537246,5.16580733 C9.87687781,5.21077728 9.96639306,5.29699554 10.0078984,5.3832138 C8.75375561,5.77305679 7.63063342,6.29036635 6.58990243,6.98383408 C5.38407929,7.71855011 4.29533839,8.58445435 3.3444324,9.66435356 C3.3032368,9.53316534 3.26173145,9.36072882 3.22053585,9.22954061 C3.17934025,9.1882923 3.17934025,9.10207405 3.1310206,9.05710409 C4.04042125,8.01876333 5.0808425,7.1562706 6.24547003,6.46280287 C7.24469568,5.81461524 8.36100356,5.33855398 9.53213567,4.90715255 Z M7.02415983,4 C7.84404522,4 8.62273502,4.25865478 9.27040421,4.73471603 C8.14728202,5.12114751 7.06535543,5.64217872 6.07325383,6.24570653 C4.99132724,6.93917426 3.95090599,7.76010855 3.08951525,8.71223105 C3.04831965,8.49482458 3,8.2361698 3,8.01876333 C3,5.81461524 4.81911104,4 7.02415983,4 L7.02415983,4 Z"
                                                            id="Fill-60" fill="#757A82"></path>
                                                    </g>
                                                </svg></span></span>
                                        @elseif ($t1s['playing_role'] == 'wkbat')
                                        <span class="d-flex text-center text-light xsmall-text">
                                            <span class="style_icon__hTxaO">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_677_858)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M15.806 6.21117L13.4774 10.2012C13.2107 10.6758 12.914 11.1352 12.558 11.6838C12.914 11.4172 13.388 11.1352 13.9374 10.7645L17.956 8.15517L15.806 6.21117ZM15.524 5.6485C15.346 5.6485 15.1534 5.6485 15.0647 5.6485C14.4114 5.6485 13.848 5.92984 13.4774 6.3005L3.70404 16.3412C3.52604 16.4298 3.33337 16.7118 3.33337 17.1718C3.33337 17.4532 3.42204 17.7358 3.61471 18.1058C3.98537 18.6692 4.44537 19.2185 4.83071 19.4998C5.29071 19.9598 6.31404 20.8052 7.24804 20.7158C7.61937 20.7158 7.90071 20.6118 8.07937 20.3305L17.956 10.3938C18.416 9.8305 18.6087 9.0885 18.5054 8.43584L15.524 5.6485ZM21.2934 3.7945C21.2934 3.5125 21.2047 3.2305 20.9227 2.94917C20.7447 2.7705 20.3734 2.6665 20.092 2.6665C19.7214 2.6665 19.4394 2.7705 19.1574 3.0525L16.3694 5.92984L18.1347 7.60517L21.026 4.71317C21.2047 4.4465 21.3974 4.16517 21.2934 3.7945Z"
                                                            fill="#045DE9"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </span>
                                        <span
                                            class="style_captain__4Adix d-block bg-primary text-light text-center xsmall-text rounded-circle">wk</span>
                                        @endif

                                        <div class="d-flex align-items-center gap-2"></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="style_teamItem__bJEoh flex-grow-1">
                                @foreach ($player['team_b_squad'] as $t2s)
                                <div class="style_item__cs_jk d-flex align-items-center">
                                    <div class="style_playerImg__T6Ohg rounded-circle overflow-hidden flex-shrink-0">
                                        <div class="w-100 position-relative overflow-hidden rounded-circle"
                                            style="background-color: rgb(210, 211, 211);">
                                            <div class="w-100"><span
                                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                        alt="{{$t2s['title']}}"
                                                        src="{{$t2s['thumb_url']}}&amp;w=1900&amp;q=75" decoding="async"
                                                        data-nimg="responsive"
                                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                                        sizes="100vw"><noscript></noscript></span>
                                            </div>
                                            <div class="position-absolute w-100 h-100 bottom-0 start-0"><span
                                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                        alt="{{$t2s['title']}}"
                                                        src="https://www.crictracker.com/_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fteam%2Fjersey%2F300x300%2Findia_8cdea.png&amp;w=1900&amp;q=75"
                                                        decoding="async" data-nimg="responsive"
                                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                                        sizes="100vw"><noscript></noscript></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="style_playerinfo__888H9 d-flex px-1 px-md-2 align-items-center flex-wrap flex-sm-nowrap">
                                        <span class="style_name__os3XG">{{$t2s['title']}}</span>
                                        @if ($t2s['playing_role'] == 'bat')
                                        <span class="d-flex text-center text-light xsmall-text">
                                            <span class="style_icon__hTxaO">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_677_858)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M15.806 6.21117L13.4774 10.2012C13.2107 10.6758 12.914 11.1352 12.558 11.6838C12.914 11.4172 13.388 11.1352 13.9374 10.7645L17.956 8.15517L15.806 6.21117ZM15.524 5.6485C15.346 5.6485 15.1534 5.6485 15.0647 5.6485C14.4114 5.6485 13.848 5.92984 13.4774 6.3005L3.70404 16.3412C3.52604 16.4298 3.33337 16.7118 3.33337 17.1718C3.33337 17.4532 3.42204 17.7358 3.61471 18.1058C3.98537 18.6692 4.44537 19.2185 4.83071 19.4998C5.29071 19.9598 6.31404 20.8052 7.24804 20.7158C7.61937 20.7158 7.90071 20.6118 8.07937 20.3305L17.956 10.3938C18.416 9.8305 18.6087 9.0885 18.5054 8.43584L15.524 5.6485ZM21.2934 3.7945C21.2934 3.5125 21.2047 3.2305 20.9227 2.94917C20.7447 2.7705 20.3734 2.6665 20.092 2.6665C19.7214 2.6665 19.4394 2.7705 19.1574 3.0525L16.3694 5.92984L18.1347 7.60517L21.026 4.71317C21.2047 4.4465 21.3974 4.16517 21.2934 3.7945Z"
                                                            fill="#045DE9"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </span>
                                        @elseif ($t2s['playing_role'] == 'bowl')
                                        <span class="d-flex text-center text-light xsmall-text"><span
                                                class="style_icon__hTxaO"><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_677_851)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M19.2281 8.58073C19.3111 8.75379 19.3935 8.92561 19.4902 9.09866C19.8346 10.0508 20 11.0029 20 12.0375C20 16.4533 16.4584 20 12.0483 20C9.62304 20 7.55583 18.9648 6.08084 17.3154C5.99845 17.233 5.90181 17.1436 5.8188 17.0605C7.63822 15.0663 9.71906 13.342 12.0483 11.8651C14.2116 10.4856 16.6374 9.44354 19.2281 8.58073ZM18.3602 7.1938C18.5393 7.37368 18.6223 7.54611 18.7047 7.71855C18.7871 7.80167 18.8837 7.9741 18.9667 8.06342C16.3754 8.92561 13.9501 10.0508 11.7863 11.4371C9.45764 12.8172 7.37618 14.639 5.47437 16.6257C5.39198 16.4533 5.21295 16.2808 5.12994 16.1084C5.04755 16.0185 5.04755 15.9291 4.95091 15.846C6.86635 13.6868 9.01657 11.8651 11.4418 10.3957C13.5227 9.09866 15.8519 7.9741 18.3602 7.1938ZM17.0643 5.81431C17.2439 5.98674 17.4093 6.15918 17.6707 6.33161C17.7538 6.42155 17.9328 6.59399 18.0158 6.76643C15.5075 7.54611 13.2613 8.58073 11.1798 9.96767C8.76816 11.4371 6.59068 13.1689 4.68886 15.3287C4.60647 15.0663 4.52346 14.7215 4.44107 14.4591C4.35868 14.3766 4.35868 14.2041 4.26204 14.1142C6.08084 12.0375 8.16168 10.3125 10.4909 8.92561C12.4894 7.62923 14.722 6.67711 17.0643 5.81431ZM12.0483 4C13.6881 4 15.2455 4.51731 16.5408 5.46943C14.2946 6.24229 12.1307 7.28436 10.1465 8.49141C7.98265 9.87835 5.90181 11.5202 4.17903 13.4245C4.09664 12.9896 4 12.4723 4 12.0375C4 7.62923 7.63822 4 12.0483 4Z"
                                                            fill="#045DE9"></path>
                                                    </g>
                                                </svg></span></span>
                                        @elseif ($t2s['playing_role'] == 'wk')
                                        <span
                                            class="style_captain__4Adix d-block bg-primary text-light text-center xsmall-text rounded-circle">wk</span>

                                        @elseif ($t2s['playing_role'] == 'all')
                                        <span class="d-flex text-center text-light xsmall-text"><span
                                                class="style_icon__hTxaO"><svg width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g id="allrounder-icon" stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <path
                                                            d="M16.806,7.21133333 L14.4773333,11.2013333 C14.2106667,11.676 13.914,12.1353333 13.558,12.684 C13.914,12.4173333 14.388,12.1353333 14.9373333,11.7646667 L18.956,9.15533333 L16.806,7.21133333 Z M16.524,6.64866667 C16.346,6.64866667 16.1533333,6.64866667 16.0646667,6.64866667 C15.4113333,6.64866667 14.848,6.93 14.4773333,7.30066667 L4.704,17.3413333 C4.526,17.43 4.33333333,17.712 4.33333333,18.172 C4.33333333,18.4533333 4.422,18.736 4.61466667,19.106 C4.98533333,19.6693333 5.44533333,20.2186667 5.83066667,20.5 C6.29066667,20.96 7.314,21.8053333 8.248,21.716 C8.61933333,21.716 8.90066667,21.612 9.07933333,21.3306667 L18.956,11.394 C19.416,10.8306667 19.6086667,10.0886667 19.5053333,9.436 L16.524,6.64866667 Z M22.2933333,4.79466667 C22.2933333,4.51266667 22.2046667,4.23066667 21.9226667,3.94933333 C21.7446667,3.77066667 21.3733333,3.66666667 21.092,3.66666667 C20.7213333,3.66666667 20.4393333,3.77066667 20.1573333,4.05266667 L17.3693333,6.93 L19.1346667,8.60533333 L22.026,5.71333333 C22.2046667,5.44666667 22.3973333,5.16533333 22.2933333,4.79466667 L22.2933333,4.79466667 Z"
                                                            id="Fill-26" fill="#757A82"></path>
                                                        <path
                                                            d="M10.6140623,6.29036635 C10.6555676,6.37689475 10.6967632,6.46280287 10.7450829,6.54933127 C10.9172991,7.02539252 11,7.50145377 11,8.01876333 C11,10.2266331 9.22920861,12 7.02415983,12 C5.81152238,12 4.77791544,11.4823803 4.04042125,10.6577244 C3.99922565,10.6164761 3.95090599,10.5718162 3.90940065,10.5302578 C4.81911104,9.53316534 5.85953229,8.67098275 7.02415983,7.93254507 C8.10577668,7.24279899 9.31872387,6.72176778 10.6140623,6.29036635 Z M10.1801146,5.59689862 C10.2696299,5.68683853 10.3111352,5.77305679 10.3523308,5.85927505 C10.3935264,5.90083349 10.4418461,5.98705175 10.4833514,6.03171157 C9.18770327,6.46280287 7.97506582,7.02539252 6.89313923,7.71855011 C5.72882143,8.40860632 4.68809044,9.31948052 3.73718445,10.3128513 C3.69598885,10.2266331 3.60647359,10.1404148 3.56496825,10.0541965 C3.52377265,10.0092266 3.52377265,9.96456678 3.475453,9.92300833 C4.4331733,8.84341927 5.50828558,7.93254507 6.72092303,7.19782904 C7.76134428,6.54933127 8.92597181,5.98705175 10.1801146,5.59689862 Z M9.53213567,4.90715255 C9.62196066,4.99337081 9.70466161,5.07958907 9.83537246,5.16580733 C9.87687781,5.21077728 9.96639306,5.29699554 10.0078984,5.3832138 C8.75375561,5.77305679 7.63063342,6.29036635 6.58990243,6.98383408 C5.38407929,7.71855011 4.29533839,8.58445435 3.3444324,9.66435356 C3.3032368,9.53316534 3.26173145,9.36072882 3.22053585,9.22954061 C3.17934025,9.1882923 3.17934025,9.10207405 3.1310206,9.05710409 C4.04042125,8.01876333 5.0808425,7.1562706 6.24547003,6.46280287 C7.24469568,5.81461524 8.36100356,5.33855398 9.53213567,4.90715255 Z M7.02415983,4 C7.84404522,4 8.62273502,4.25865478 9.27040421,4.73471603 C8.14728202,5.12114751 7.06535543,5.64217872 6.07325383,6.24570653 C4.99132724,6.93917426 3.95090599,7.76010855 3.08951525,8.71223105 C3.04831965,8.49482458 3,8.2361698 3,8.01876333 C3,5.81461524 4.81911104,4 7.02415983,4 L7.02415983,4 Z"
                                                            id="Fill-60" fill="#757A82"></path>
                                                    </g>
                                                </svg></span></span>
                                        @elseif ($t2s['playing_role'] == 'wkbat')
                                        <span class="d-flex text-center text-light xsmall-text">
                                            <span class="style_icon__hTxaO">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_677_858)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M15.806 6.21117L13.4774 10.2012C13.2107 10.6758 12.914 11.1352 12.558 11.6838C12.914 11.4172 13.388 11.1352 13.9374 10.7645L17.956 8.15517L15.806 6.21117ZM15.524 5.6485C15.346 5.6485 15.1534 5.6485 15.0647 5.6485C14.4114 5.6485 13.848 5.92984 13.4774 6.3005L3.70404 16.3412C3.52604 16.4298 3.33337 16.7118 3.33337 17.1718C3.33337 17.4532 3.42204 17.7358 3.61471 18.1058C3.98537 18.6692 4.44537 19.2185 4.83071 19.4998C5.29071 19.9598 6.31404 20.8052 7.24804 20.7158C7.61937 20.7158 7.90071 20.6118 8.07937 20.3305L17.956 10.3938C18.416 9.8305 18.6087 9.0885 18.5054 8.43584L15.524 5.6485ZM21.2934 3.7945C21.2934 3.5125 21.2047 3.2305 20.9227 2.94917C20.7447 2.7705 20.3734 2.6665 20.092 2.6665C19.7214 2.6665 19.4394 2.7705 19.1574 3.0525L16.3694 5.92984L18.1347 7.60517L21.026 4.71317C21.2047 4.4465 21.3974 4.16517 21.2934 3.7945Z"
                                                            fill="#045DE9"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </span>
                                        <span
                                            class="style_captain__4Adix d-block bg-primary text-light text-center xsmall-text rounded-circle">wk</span>
                                        @endif
                                        <div class="d-flex align-items-center gap-2"></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </section>
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
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    $(function(){
        scrollContent(-1)
    })
</script>
@endsection