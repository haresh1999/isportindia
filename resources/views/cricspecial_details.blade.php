@extends('layout.main')

@section('content')
<section class="style_articleBlockSec__Eg4q3 common-section false">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-lg-8 col-md-11 left-content">
                <section class="style_articleBlock__7galq common-box position-relative overflow-hidden">
                    <div class="d-flex flex-wrap flex-md-nowrap align-items-start justify-content-between false">
                        <nav aria-label="breadcrumb" class="style_breadcrumb__lfaU_ text-capitalize">
                            <ol class="breadcrumb">
                                <li class="style_item__p9Ik3 mb-1"><a href="/">Home</a></li>
                            </ol>
                        </nav>
                        <p class="text-danger style_liveUpdate___7DmX mb-0">
                            <span class="style_liveIcon__nYZ5O"></span>Live
                        </p>
                    </div>
                    <article>
                        <h1 class="style_title__1dJo7">
                            {{ $res->title }}
                        </h1>
                        <h2 class="style_subTitle___67cW small-head mb-2 mb-md-3 pt-2 pt-md-3">
                            {!! Str::limit($res->description, 256, '...') !!}
                        </h2>
                        <div class="undefined d-flex flex-wrap align-items-start mb-2 mb-md-3">
                            <div class="style_author__Kem0w font-semi">
                                <div class="undefined pe-2 my-1 mb-md-2 mt-md-0"><a class="text-capitalize "
                                        href="/author/ctstaff/"><span class="text-muted">By </span>{{ $res->user->name
                                        }} <span
                                            class="style_verfied__NQDlI d-inline-block rounded-circle align-text-top"></span></a>
                                </div>
                                <p class="undefined w-100 xsmall-text font-semi mb-0"><time
                                        class="op-published d-none d-md-inline-block"
                                        datetime="2023-06-14T09:30:18.000Z">Published - {{
                                        Carbon\Carbon::parse($res->created_at)->format('M d, Y H:m') }} IST
                                        |&nbsp;</time><time class="op-modified"
                                        datetime="2023-06-14T16:12:22.650Z">Updated - {{
                                        Carbon\Carbon::parse($res->updated_at)->format('M d, Y H:m') }}
                                        IST</time></p>
                            </div>
                            <div class="ms-auto">
                                <p class="style_views__04sMk d-flex align-items-center mb-1"><span
                                        class="style_iconOuter__jQd_D"><svg width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <g id="view-icon" stroke="none" stroke-width="1" fill="none"
                                                fill-rule="evenodd">
                                                <polygon id="Path-5" fill="#21CB00"
                                                    points="12.296317 11.7509766 14.5676618 15.8931362 4.28571429 19.6648996 10.4598214 15 6.75209263 11.7509766 16.4330357 6.85714286">
                                                </polygon>
                                                <polyline id="Path-6" stroke="#21CB00" stroke-width="1.71428571"
                                                    points="10.4330357 4.28571429 19.0044643 4.28571429 19.0044643 12.8571429">
                                                </polyline>
                                            </g>
                                        </svg></span> View : {{$res->views}}</p>

                                {{-- <p class="style_views__04sMk style_duration__EM9F7 mb-0 d-flex align-items-center">
                                    <span class="style_iconOuter__jQd_D"><svg width="14px" height="14px"
                                            viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <g id="clock-icon" stroke="none" stroke-width="1" fill="none"
                                                fill-rule="evenodd">
                                                <g id="Group" transform="translate(0.200000, 0.200000)" fill="#757A82"
                                                    fill-rule="nonzero">
                                                    <path
                                                        d="M6.7875,0.96 C3.5675,0.96 0.96,3.57333333 0.96,6.79333333 C0.96,10.0133333 3.5675,12.6266667 6.7875,12.6266667 C10.0133333,12.6266667 12.6266667,10.0133333 12.6266667,6.79333333 C12.6266667,3.57333333 10.0133333,0.96 6.7875,0.96 Z M6.79333333,11.46 C4.215,11.46 2.12666667,9.37166667 2.12666667,6.79333333 C2.12666667,4.215 4.215,2.12666667 6.79333333,2.12666667 C9.37166667,2.12666667 11.46,4.215 11.46,6.79333333 C11.46,9.37166667 9.37166667,11.46 6.79333333,11.46 Z"
                                                        id="Shape"></path>
                                                    <polygon id="Path"
                                                        points="7.125 3.91666667 6.25 3.91666667 6.25 7.41666667 9.3125 9.25416667 9.75 8.53666667 7.125 6.97916667">
                                                    </polygon>
                                                </g>
                                            </g>
                                        </svg></span>10866 Min Read
                                </p> --}}
                            </div>
                        </div>
                        <figure class="op-tracker mb-0 order-2 order-md-1">
                            <div class="style_postImg__QxVUm position-relative overflow-hidden"><span
                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 62.5% 0px 0px;"></span><img
                                        fetchpriority="high" alt="Lanka Premier League"
                                        sizes="(max-width: 767px) 240px, (max-width: 991px) 320px, (max-width: 1190px) 360px, (max-width: 1400px) 700px, (max-width: 1920px) 800px"
                                        src="{{ getImageUrl($res->img) }}" decoding="async" data-nimg="responsive"
                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span>

                                {{-- <div class="style_captionBlock__4sWuT">
                                    <div class="style_icon__aSBC0 rounded-circle overflow-hidden"><span
                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                alt="info" src="/_next/static/media/info-icon.bac5163c.svg"
                                                decoding="async" data-nimg="responsive" sizes="100vw"
                                                srcset="/_next/static/media/info-icon.bac5163c.svg 450w, /_next/static/media/info-icon.bac5163c.svg 992w, /_next/static/media/info-icon.bac5163c.svg 1200w, /_next/static/media/info-icon.bac5163c.svg 1900w"
                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                                    </div>
                                    <div class="style_caption__3gJa4 xsmall-text d-inline-block">Lanka Premier
                                        League. (Photo Source: Twitter)</div>
                                </div> --}}
                            </div>
                        </figure>
                        <div class="style_articleActionsMob__dRhgP text-center">
                            <div
                                class="style_shareList__84nbJ d-flex align-items-start justify-content-center mb-2 mb-md-3">
                                <button type="button"
                                    class="style_item__2FXS3 undefined   d-flex justify-content-center align-items-center position-relative btn btn-link"><span
                                        class="style_icon__hy_xe d-block"><span
                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                alt="clap" sizes="100vw"
                                                srcset="/_next/static/media/clap-theme-icon.e7c59412.svg 450w, /_next/static/media/clap-theme-icon.e7c59412.svg 992w, /_next/static/media/clap-theme-icon.e7c59412.svg 1200w, /_next/static/media/clap-theme-icon.e7c59412.svg 1900w"
                                                src="/_next/static/media/clap-theme-icon.e7c59412.svg" decoding="async"
                                                data-nimg="responsive"
                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span><span
                                        class="ms-2">{{$res->likes}}</span>
                                    <span
                                        class="style_currentClap__T63UC d-block text-center bg-secondary rounded-circle"></span></button>
                            </div>
                        </div>
                        <div class="d-flex d-md-none flex-column" style="height: 260px;"></div>
                        <div class="style_commonContent__Aq_YG  ">
                            <div class="undefined text-break" id="content">
                                {!! $res->description !!}
                            </div>
                        </div>
                    </article>
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
                        @foreach (getSeasons('seasons/2021/competitions') as $val)
                        <a class="cs-item common-box d-block overflow-hidden text-nowrap mb-2"
                            href="{{ getSeasonsDetailsUrl($val['matches_url']) }}">{{$val['title']}}</a>
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
                        <div id="carousel" class="style_inner__csGhV slider-track d-flex style_single__wL76r"
                            id="c-slider" style="gap: 15px">
                            @foreach ($cric as $key => $cri)
              <div data-slick-index="{{++$key}}">
                <article class="style_item__CjFgl">
                  <div class="block-img">
                    <a href="{{route('cricspecial.details',[$cri->id,$cri->slug])}}"><span style="
                              box-sizing: border-box;
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
                                box-sizing: border-box;
                                display: block;
                                width: initial;
                                height: initial;
                                background: none;
                                opacity: 1;
                                border: 0px;
                                margin: 0px;
                                padding: 62.5% 0px 0px;
                              "></span><img alt="Shijit Chandran."
                          sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px"
                          src="{{ getImageUrl($cri->img) }}" decoding="async" data-nimg="responsive"
                          class="style_postimg__rYHSo" style="
                                position: absolute;
                                inset: 0px;
                                box-sizing: border-box;
                                padding: 0px;
                                border: none;
                                margin: auto;
                                display: block;
                                width: 0px;
                                height: 0px;
                                min-width: 100%;
                                max-width: 100%;
                                min-height: 100%;
                                max-height: 100%;
                              " /></span></a>
                  </div>
                  <span class="undefined my-2 badge bg-secondary">Cricket Appeal</span>
                  <h4 class="small-head mb-0 overflow-hidden">
                    <a href="{{route('cricspecial.details',[$cri->id,$cri->slug])}}">{{ $cri->short_description }} </a>
                  </h4>
                </article>
              </div>
              @endforeach
                        </div>
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
                        <article class="d-flex align-items-start"><b class="num">1</b>
                            <div class="desc flex-grow-1"><span class="badge bg-primary">Social Tracker</span>
                                <h4 class="small-head mb-0"><a class="overflow-hidden"
                                        href="/social-tracker-cricket/just-two-young-boys-from-baroda-who-never-gave-up-hardik-pandyas-heartwarming-photo-with-brother-krunal-wins-internet/">'Just
                                        two young boys from Baroda who never gave up' - Hardik Pandya's
                                        heartwarming photo with brother Krunal wins internet</a></h4>
                            </div>
                        </article>
                        <article class="d-flex align-items-start"><b class="num">2</b>
                            <div class="desc flex-grow-1"><span class="badge bg-primary">Stats Mania</span>
                                <h4 class="small-head mb-0"><a class="overflow-hidden"
                                        href="/cricket-stats-mania/rr-vs-srh-match-52-ipl-2023-stats-review-yashasvi-jaiswals-feat-srhs-record-chase-and-other-stats/">RR
                                        vs SRH, Match 52 IPL 2023 Stats Review: Yashasvi Jaiswal's feat, SRH's
                                        record chase and other stats</a></h4>
                            </div>
                        </article>
                        <article class="d-flex align-items-start"><b class="num">3</b>
                            <div class="desc flex-grow-1"><span class="badge bg-primary">Twitter
                                    Reactions</span>
                                <h4 class="small-head mb-0"><a class="overflow-hidden"
                                        href="/twitter-reactions-cricket/twitter-reactions-new-zealand-down-pakistan-despite-iftikhar-ahmeds-fighting-knock-in-karachi/">Twitter
                                        Reactions: New Zealand down Pakistan despite Iftikhar Ahmed's fighting
                                        knock in Karachi</a></h4>
                            </div>
                        </article>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection