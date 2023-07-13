@extends('layout.main')

@section('style')
<style>
  .style_arrow__bXMF0 {
    width: 26px;
    height: 60px;
    transform: translateY(-50%);
    font-size: 0;
    z-index: 5;
    background: var(--light-mode-bg);
    border-radius: 13px;
    border: 3px solid var(--theme-color-light);
    cursor: pointer;
    position: absolute;
  }

  .style_arrow__bXMF0:active {
    background: #E76161;
  }
</style>
@endsection

@section('content')
<div style="height: 259px">
  <section class="style_scorecardSlider__sPmoX scorecard-slider pt-0 overflow-hidden pb-3">
    <div class="container">
      <div class="style_scorecardNav__b0jAi xsmall-text text-nowrap scroll-list d-flex pb-1">
        <div class="d-flex m-auto">
          @php $matchs = getMatch();@endphp
          @php $slugs = array_unique(Arr::pluck($matchs,'short_title')); @endphp
          <button type="button"
            class="style_active__3p7K4 font-bold text-uppercase rounded-3 btn btn-link category_button"
            onclick="categoryClickHandler('all')" category="all">
            All Matches ({{count($slugs)}})
          </button>
          @foreach ($slugs as $series)
          <button category="{{Str::slug($series)}}" type="button"
            class="font-bold text-uppercase btn btn-link category_button"
            onclick="categoryClickHandler('{{ Str::slug($series) }}')">{{$series}}</button>
          @endforeach
        </div>
      </div>

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
                      <span class="danger-text text-capitalize">• {{$val['status_str']}} </span><span
                        class="style_dark__duIOp"> -
                        {{$val['subtitle']}}</span> -
                      {{$val['venue']['name']}}
                    </p>
                  </div>
                  <p class="style_series__ggX10 font-medium text-nowrap overflow-hidden my-2">
                    {{$val['short_title']}}
                  </p>
                  <div class="style_head__CLILr">
                    <div class="style_team__wJ2ZX d-flex justify-content-between position-relative xsmall-text">
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
                            </span><img alt="{{$val['teama']['name']}}" src="{{ $val['teama']['logo_url'] }}"
                              decoding="async" data-nimg="responsive" style="
                        position: absolute;
                        inset: 0px;
                        padding: 0px;
                        border: none;
                        display: block;
                        width: 0px;
                        min-width: 100%;
                        max-width: 100%;
                        max-height: 100%;"
                              sizes="(max-width: 767px) 24px, (max-width: 991px) 24px, (max-width: 1190px) 200px, 24px"
                              srcset="{{$val['teama']['logo_url']}} 40w,{{$val['teama']['logo_url']}} 80w,{{$val['teama']['logo_url']}} 120w,{{$val['teama']['logo_url']}} 240w,{{$val['teama']['logo_url']}} 450w,{{$val['teama']['logo_url']}}  992w,{{$val['teama']['logo_url']}} 1200w,{{$val['teama']['logo_url']}} 1900w">&gt;
                          </span>
                        </div>
                        <span>{{$val['teama']['name']}}</span>
                      </div>
                      <p></p>
                    </div>
                    <div class="style_team__wJ2ZX d-flex justify-content-between position-relative xsmall-text">
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
                              max-height: 100%;"
                              sizes="(max-width: 767px) 24px, (max-width: 991px) 24px, (max-width: 1190px) 200px, 24px"
                              srcset="{{ $val['teamb']['logo_url'] }} 40w,{{ $val['teamb']['logo_url'] }} 80w,{{ $val['teamb']['logo_url'] }} 120w,{{ $val['teamb']['logo_url'] }} 240w,{{ $val['teamb']['logo_url'] }} 450w,{{ $val['teamb']['logo_url'] }} 992w,{{ $val['teamb']['logo_url'] }} 1200w,{{ $val['teamb']['logo_url'] }} 1900w">&gt;
                          </span>
                        </div>
                        <span>{{$val['teamb']['name']}}</span>
                      </div>
                      <p></p>
                    </div>
                  </div>
                  <p class="style_result__gMwNw danger-text text-nowrap font-medium my-2 overflow-hidden">
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
          <div id="category-slider-track" class="style_inner__csGhV slider-track d-flex" style="gap: 0" id="c-slider">

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

<div style="min-height: 90px" class="d-none d-md-block mt-2 container"></div>

<div class="common-section">
  <div class="style_homeContainer__89N3q container">
    <div class="row">
      <div class="style_commonSidebar__uyNzj order-1 order-lg-0 common-sidebar bt-width  d-lg-block col-lg-3">
        <div class="style_cricSpecial__YjEar cric-special widget p-3">
          <h3
            class="small-head d-flex align-items-center text-uppercase justify-content-center justify-content-md-start">
            <span class="style_icon__5WxUf me-2"><span style="
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
                      padding: 100% 0px 0px;
                    "></span><img alt="winner" sizes="100vw" srcset="
                      /_next/static/media/star-fill-icon.b0baf1fe.svg  450w,
                      /_next/static/media/star-fill-icon.b0baf1fe.svg  992w,
                      /_next/static/media/star-fill-icon.b0baf1fe.svg 1200w,
                      /_next/static/media/star-fill-icon.b0baf1fe.svg 1900w
                    " src="/_next/static/media/star-fill-icon.b0baf1fe.svg" decoding="async" data-nimg="responsive"
                  style="
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
                    " /></span></span><span>CricSpecial</span>
          </h3>
          <div class="style_slider__UbtNO process-arrow position-relative">
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
                  fill="var(--theme-color-light)"></path>
              </svg></span>Trending News
          </h3>
          <div class="trendingList">
            @include('layout.news')
          </div>
        </div>
      </div>
      <div class="style_centerContent__xrgF5 col-lg-6">
        <div class="style_articleTab__eD_8W text-uppercase equal-width-nav mb-3 mb-md-4 overflow-hidden nav nav-pills">
          <div class="nav-item">
            <button type="button"
              class="style_navLink__OPMT9 style_active__SJTCU w-100 nav-link position-relative rounded-0 d-flex align-items-center justify-content-center btn btn-primary">
              <span class="style_icon__Q0gNi me-1 me-lg-2 my-1"><span style="
                      box-sizing: border-box;
                      display: block;
                      overflow: hidden;
                      width: initial;
                      height: initial;
                      background: none;
                      opacity: 1;
                      border: 0;
                      margin: 0;
                      padding: 0;
                      position: relative;
                    "><span style="
                        box-sizing: border-box;
                        display: block;
                        width: initial;
                        height: initial;
                        background: none;
                        opacity: 1;
                        border: 0;
                        margin: 0;
                        padding: 0;
                        padding-top: 100%;
                      "></span><img alt="facebook" src="/_next/static/media/note-icon.772472aa.svg" decoding="async"
                    data-nimg="responsive" style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        bottom: 0;
                        right: 0;
                        box-sizing: border-box;
                        padding: 0;
                        border: none;
                        margin: auto;
                        display: block;
                        width: 0;
                        height: 0;
                        min-width: 100%;
                        max-width: 100%;
                        min-height: 100%;
                        max-height: 100%;
                      " sizes="100vw" srcset="
                        /_next/static/media/note-icon.772472aa.svg  450w,
                        /_next/static/media/note-icon.772472aa.svg  992w,
                        /_next/static/media/note-icon.772472aa.svg 1200w,
                        /_next/static/media/note-icon.772472aa.svg 1900w
                      " /> </span></span><span>Articles</span>
            </button>
          </div>
          <div class="nav-item">
            <button type="button"
              class="style_navLink__OPMT9 false nav-link position-relative rounded-0 d-flex align-items-center justify-content-center w-100 btn btn-primary">
              <span class="style_icon__Q0gNi me-1 me-lg-2 my-1"><span style="
                      box-sizing: border-box;
                      display: block;
                      overflow: hidden;
                      width: initial;
                      height: initial;
                      background: none;
                      opacity: 1;
                      border: 0;
                      margin: 0;
                      padding: 0;
                      position: relative;
                    "><span style="
                        box-sizing: border-box;
                        display: block;
                        width: initial;
                        height: initial;
                        background: none;
                        opacity: 1;
                        border: 0;
                        margin: 0;
                        padding: 0;
                        padding-top: 100%;
                      "></span><img alt="facebook" src="/_next/static/media/fantasy-tips-icon.4c94a664.svg"
                    decoding="async" data-nimg="responsive" style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        bottom: 0;
                        right: 0;
                        box-sizing: border-box;
                        padding: 0;
                        border: none;
                        margin: auto;
                        display: block;
                        width: 0;
                        height: 0;
                        min-width: 100%;
                        max-width: 100%;
                        min-height: 100%;
                        max-height: 100%;
                      " sizes="100vw" srcset="
                        /_next/static/media/fantasy-tips-icon.4c94a664.svg  450w,
                        /_next/static/media/fantasy-tips-icon.4c94a664.svg  992w,
                        /_next/static/media/fantasy-tips-icon.4c94a664.svg 1200w,
                        /_next/static/media/fantasy-tips-icon.4c94a664.svg 1900w
                      " /> </span></span><span>Fantasy</span>
            </button>
          </div>
          <div class="nav-item">
            <button type="button"
              class="style_navLink__OPMT9 false nav-link position-relative rounded-0 d-flex align-items-center justify-content-center w-100 btn btn-primary">
              <span class="style_icon__Q0gNi me-1 me-lg-2 my-1"><span style="
                      box-sizing: border-box;
                      display: block;
                      overflow: hidden;
                      width: initial;
                      height: initial;
                      background: none;
                      opacity: 1;
                      border: 0;
                      margin: 0;
                      padding: 0;
                      position: relative;
                    "><span style="
                        box-sizing: border-box;
                        display: block;
                        width: initial;
                        height: initial;
                        background: none;
                        opacity: 1;
                        border: 0;
                        margin: 0;
                        padding: 0;
                        padding-top: 100%;
                      "></span><img alt="facebook" src="/_next/static/media/video-icon.c292e83c.svg" decoding="async"
                    data-nimg="responsive" style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        bottom: 0;
                        right: 0;
                        box-sizing: border-box;
                        padding: 0;
                        border: none;
                        margin: auto;
                        display: block;
                        width: 0;
                        height: 0;
                        min-width: 100%;
                        max-width: 100%;
                        min-height: 100%;
                        max-height: 100%;
                      " sizes="100vw" srcset="
                        /_next/static/media/video-icon.c292e83c.svg  450w,
                        /_next/static/media/video-icon.c292e83c.svg  992w,
                        /_next/static/media/video-icon.c292e83c.svg 1200w,
                        /_next/static/media/video-icon.c292e83c.svg 1900w
                      " /> </span></span><span>Videos</span>
            </button>
          </div>
        </div>
        <section class="style_homeArticles__4e_Na">
          <h4 class="line-title text-uppercase text-center overflow-hidden">
            <span class="rounded-pill position-relative d-inline-block">Latest Updates</span>
          </h4>

          {{-- LATEST UPDATE START --}}
          {{-- LATEST UPDATE HIGHLIGHTER START--}}
          @if ($latestUpdateHighlighter)
          <article id="{{$latestUpdateHighlighter->id}}"
            class="style_article__IayJx style_articleMedium__ME07j undefined">
            <div class="row-8 row">
              <div class="col-sm-6 col-5">
                <a href="{{ route('post.details',[$latestUpdateHighlighter->slug]) }}">
                  <div class="style_postimg__ftSiV undefined block-img">
                    <span style="
                                  box-sizing: border-box;
                                  display: block;
                                  overflow: hidden;
                                  width: initial;
                                  height: initial;
                                  background: none;
                                  opacity: 1;
                                  border: 0;
                                  margin: 0;
                                  padding: 0;
                                  position: relative;
                                "><span style="
                                    box-sizing: border-box;
                                    display: block;
                                    width: initial;
                                    height: initial;
                                    background: none;
                                    opacity: 1;
                                    border: 0;
                                    margin: 0;
                                    padding: 0;
                                    padding-top: 62.5%;
                                  "></span>
                      <img alt="Andre Russell and Sunil Narine" src="{{getImageUrl($latestUpdateHighlighter->img)}}"
                        decoding="async" data-nimg="responsive" style="
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
                                  "
                        sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px" />
                    </span>
                  </div>
                </a>
              </div>
              <div class="d-flex flex-column justify-content-between col-sm-6 col-7">
                <div>
                  <h3 class="small-head mb-1">
                    <a href="{{ route('post.details',[$latestUpdateHighlighter->slug]) }}">{{
                      $latestUpdateHighlighter->title }}</a>
                  </h3>
                  <p class="style_desc__jLYw_ style_desc__zP5qm">
                    {!! Str::limit($latestUpdateHighlighter->description, 256, '...') !!}
                  </p>
                </div>
                <div class="style_articleInfo__WqisT undefined d-flex">
                  <span class="d-flex align-items-center"><span class="style_icon__Ukkjh undefined d-block"><span style="
                                    box-sizing: border-box;
                                    display: block;
                                    overflow: hidden;
                                    width: initial;
                                    height: initial;
                                    background: none;
                                    opacity: 1;
                                    border: 0;
                                    margin: 0;
                                    padding: 0;
                                    position: relative;
                                  "><span style="
                                      box-sizing: border-box;
                                      display: block;
                                      width: initial;
                                      height: initial;
                                      background: none;
                                      opacity: 1;
                                      border: 0;
                                      margin: 0;
                                      padding: 0;
                                      padding-top: 100%;
                                    "></span>
                        <img alt="Calender" src="/_next/static/media/calender-icon.23e624a9.svg" decoding="async"
                          data-nimg="responsive" style="
                                      position: absolute;
                                      top: 0;
                                      left: 0;
                                      bottom: 0;
                                      right: 0;
                                      box-sizing: border-box;
                                      padding: 0;
                                      border: none;
                                      margin: auto;
                                      display: block;
                                      width: 0;
                                      height: 0;
                                      min-width: 100%;
                                      max-width: 100%;
                                      min-height: 100%;
                                      max-height: 100%;
                                    " sizes="100vw" /> </span></span>{{
                    Carbon\Carbon::parse($latestUpdateHighlighter->created_at)->format('m M
                    Y') }}</span><span class="d-flex align-items-center"><span
                      class="style_icon__Ukkjh undefined d-block"><span style="
                                    box-sizing: border-box;
                                    display: block;
                                    overflow: hidden;
                                    width: initial;
                                    height: initial;
                                    background: none;
                                    opacity: 1;
                                    border: 0;
                                    margin: 0;
                                    padding: 0;
                                    position: relative;
                                  "><span style="
                                      box-sizing: border-box;
                                      display: block;
                                      width: initial;
                                      height: initial;
                                      background: none;
                                      opacity: 1;
                                      border: 0;
                                      margin: 0;
                                      padding: 0;
                                      padding-top: 100%;
                                    "></span><img alt="Clock" src="/_next/static/media/clock-icon.c7a46c6e.svg"
                          decoding="async" data-nimg="responsive" style="
                                      position: absolute;
                                      top: 0;
                                      left: 0;
                                      bottom: 0;
                                      right: 0;
                                      box-sizing: border-box;
                                      padding: 0;
                                      border: none;
                                      margin: auto;
                                      display: block;
                                      width: 0;
                                      height: 0;
                                      min-width: 100%;
                                      max-width: 100%;
                                      min-height: 100%;
                                      max-height: 100%;
                                    " sizes="100vw" /> </span></span>{{ $latestUpdateHighlighter->min }} Min </span>
                </div>
              </div>
            </div>
          </article>
          @endif

          {{-- LATEST UPDATE HIGHLIGHTER END --}}

          {{-- LATEST UPDATE NORMAL START --}}
          @foreach ($latestUpdateNormal as $lun)
          <article id="{{$lun->id}}" class="style_article__IayJx style_articleSmall__SMJc6 undefined">
            <div class="row-8 row">
              <div class="col-sm-3 col-5">
                <a class="style_postimg__ftSiV undefined d-block block-img"
                  href="{{route('post.details',[$lun->slug])}}"><span style="
                              box-sizing: border-box;
                              display: block;
                              overflow: hidden;
                              width: initial;
                              height: initial;
                              background: none;
                              opacity: 1;
                              border: 0;
                              margin: 0;
                              padding: 0;
                              position: relative;
                            "><span style="
                                box-sizing: border-box;
                                display: block;
                                width: initial;
                                height: initial;
                                background: none;
                                opacity: 1;
                                border: 0;
                                margin: 0;
                                padding: 0;
                                padding-top: 62.5%;
                              "></span><img alt="India Red" src="{{ getImageUrl($lun->img) }}" decoding="async"
                      data-nimg="responsive" style="
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
                              "
                      sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px" />
                  </span></a>
              </div>
              <div class="d-flex flex-column justify-content-between col-sm-9 col-7">
                <div>
                  <h4 class="small-head mb-2">
                    <a href="{{ route('post.details',[$lun->slug]) }}">
                      {{ $lun->title }}
                    </a>
                  </h4>
                </div>
                <div class="style_articleInfo__WqisT d-flex">
                  <span class="d-flex align-items-center"><span class="style_icon__Ukkjh d-block"><span style="
                                  box-sizing: border-box;
                                  display: block;
                                  overflow: hidden;
                                  width: initial;
                                  height: initial;
                                  background: none;
                                  opacity: 1;
                                  border: 0;
                                  margin: 0;
                                  padding: 0;
                                  position: relative;
                                "><span style="
                                    box-sizing: border-box;
                                    display: block;
                                    width: initial;
                                    height: initial;
                                    background: none;
                                    opacity: 1;
                                    border: 0;
                                    margin: 0;
                                    padding: 0;
                                    padding-top: 100%;
                                  "></span><img alt="Calender" src="/_next/static/media/calender-icon.23e624a9.svg"
                          decoding="async" data-nimg="responsive" style="
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    bottom: 0;
                                    right: 0;
                                    box-sizing: border-box;
                                    padding: 0;
                                    border: none;
                                    margin: auto;
                                    display: block;
                                    width: 0;
                                    height: 0;
                                    min-width: 100%;
                                    max-width: 100%;
                                    min-height: 100%;
                                    max-height: 100%;
                                  " sizes="100vw" /></span></span>{{ Carbon\Carbon::parse($lun->created_at)->format('d
                    M
                    Y') }}</span><span class="d-flex align-items-center"><span class="style_icon__Ukkjh d-block"><span
                        style="
                                  box-sizing: border-box;
                                  display: block;
                                  overflow: hidden;
                                  width: initial;
                                  height: initial;
                                  background: none;
                                  opacity: 1;
                                  border: 0;
                                  margin: 0;
                                  padding: 0;
                                  position: relative;
                                "><span style="
                                    box-sizing: border-box;
                                    display: block;
                                    width: initial;
                                    height: initial;
                                    background: none;
                                    opacity: 1;
                                    border: 0;
                                    margin: 0;
                                    padding: 0;
                                    padding-top: 100%;
                                  "></span><img alt="Clock" src="/_next/static/media/clock-icon.c7a46c6e.svg"
                          decoding="async" data-nimg="responsive" style="
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    bottom: 0;
                                    right: 0;
                                    box-sizing: border-box;
                                    padding: 0;
                                    border: none;
                                    margin: auto;
                                    display: block;
                                    width: 0;
                                    height: 0;
                                    min-width: 100%;
                                    max-width: 100%;
                                    min-height: 100%;
                                    max-height: 100%;
                                  " sizes="100vw" /></span></span>{{ $lun->min }} Min
                  </span>
                </div>
              </div>
            </div>
          </article>
          @endforeach
          {{-- LATEST UPDATE NORMAL END --}}

          {{-- LATEST UPDATE ONE LINER START --}}
          <article class="style_article__IayJx style_articleList__HOi_f py-0">
            @foreach ($latestUpdateOneLiner as $luol)
            <h4 id="648881141024650a1b84c88b" class="small-head mb-0">
              <a class="d-flex align-items-center" href="{{route('post.details',[$luol->slug])}}"><svg width="20"
                  height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3.66667 2H15.3333C16.25 2 17 2.75 17 3.66667V12L12 17H3.66667C2.75 17 2 16.25 2 15.3333V3.66667C2 2.75 2.75 2 3.66667 2ZM15.3333 11.1667V3.66667H3.66667V15.3333H11.1667V11.1667H15.3333ZM9.5 11.1667H5.33333V9.5H9.5V11.1667ZM5.33333 7.83333H13.6667V6.16667H5.33333V7.83333Z"
                    fill="#757A82"></path>
                </svg><span class="style_textTruncate__R9wLD">{{ $luol->title }}</span></a>
            </h4>
            @endforeach
          </article>
          {{-- LATEST UPDATE ONE LINER END --}}
          {{-- LATEST UPDATE END --}}
        </section>



        {{-- SEASON UPDATE START --}}

        {{-- LATEST UPDATE HIGHLIGHTER START --}}
        @foreach ($seasonsUpdateHighlighter as $suh)
        @php $match = getCompetitionsMatches($suh->cid) @endphp
        <section id="{{route('post.details',[$suh->slug])}}" class="style_homeArticles__4e_Na">
          <h4 class="line-title text-uppercase text-center overflow-hidden">
            <a class="rounded-pill position-relative d-inline-block" href="{{route('post.details',[$suh->slug])}}"><span
                class="d-none d-md-block text-nowrap overflow-hidden">{{$match['competition']['title']}}</span><span
                class="d-block d-md-none text-nowrap overflow-hidden">{{$match['competition']['title']}}</span></a>
          </h4>
          <div class="style_seriesInfo__LBbez text-center">
            <p>{{$match['title']}}</p>
            <div class="style_btnList__6CLwB text-nowrap scroll-list d-flex">
              <nav class="font-semi d-flex me-auto ms-auto text-uppercase">
                <a href="/t20/tnpl/fixtures/">Fixtures</a>
                <a href="/t20/tnpl/standings/">Standings</a>
                <a href="/t20/tnpl/stats/">Stats</a><a href="/t20/tnpl/squads/">Squads</a>
                <a href="/t20/tnpl/fantasy-tips/">Fantasy Tips</a>
              </nav>
            </div>
            <div class="">
              <div class="style_liveMatchCard__tNdaO d-flex flex-column align-items-center mb-2 position-relative">
                <div
                  class="w-100 position-relative d-flex flex-column flex-sm-row align-items-sm-center justify-content-between">
                  <a class="style_scoreCardLink__PeqzJ"
                    href="/live-scores/dd-vs-trichy-match-4-t20-tamil-nadu-premier-league-14-jun-2023/"></a>
                  <div class="style_team__SgPqc flex-shrink-0 text-start mb-2 mb-sm-0">
                    <div class="style_name__KSXfd d-flex align-items-center">
                      <div class="style_teamImg__LLq3Z flex-shrink-0 rounded-circle overflow-hidden">
                        <span style="
                                  box-sizing: border-box;
                                  display: block;
                                  overflow: hidden;
                                  width: initial;
                                  height: initial;
                                  background: none;
                                  opacity: 1;
                                  border: 0;
                                  margin: 0;
                                  padding: 0;
                                  position: relative;
                                "><span style="
                                    box-sizing: border-box;
                                    display: block;
                                    width: initial;
                                    height: initial;
                                    background: none;
                                    opacity: 1;
                                    border: 0;
                                    margin: 0;
                                    padding: 0;
                                    padding-top: 100%;
                                  "></span><img alt="{{$match['teama']['name']}}" src="{{$match['teama']['logo_url']}}"
                            decoding="async" data-nimg="responsive" style="
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    bottom: 0;
                                    right: 0;
                                    box-sizing: border-box;
                                    padding: 0;
                                    border: none;
                                    margin: auto;
                                    display: block;
                                    width: 0;
                                    height: 0;
                                    min-width: 100%;
                                    max-width: 100%;
                                    min-height: 100%;
                                    max-height: 100%;
                                  " />
                        </span>
                      </div>
                      <div
                        class="d-flex align-items-center align-items-sm-start flex-sm-column flex-grow-1 flex-sm-grow-0 justify-content-between justify-content-sm-start">
                        <b class="mx-1">{{$match['teama']['name']}}</b>
                        <p class="style_score__yQMk7 font-semi"></p>
                      </div>
                    </div>
                  </div>
                  <div class="style_info__5CTrf text-start text-sm-center">
                    <span class="style_badge__q5297 live mb-1 badge bg-primary"><span>Upcoming</span></span>
                    <p class="d-inline d-sm-block">
                      Match {{$match['match_number']}}
                      <!-- -->,
                      <!-- -->{{$match['venue']['name']}}
                    </p>
                    <p class="d-inline d-sm-block">
                      Match starts at {{ Carbon\Carbon::parse($match['date_start'])->format('d M Y, D, h:i A') }} IST
                    </p>
                  </div>
                  <div class="style_team__SgPqc flex-shrink-0 text-end mb-2 mb-sm-0">
                    <div
                      class="style_name__KSXfd d-flex align-items-center justify-content-end flex-row-reverse flex-sm-row">
                      <div
                        class="d-flex align-items-center align-items-sm-end flex-sm-column flex-grow-1 flex-sm-grow-0 justify-content-between justify-content-sm-center">
                        <b class="mx-1">{{$match['teamb']['name']}}</b>
                        <p class="style_score__yQMk7 font-semi"></p>
                      </div>
                      <div class="style_teamImg__LLq3Z flex-shrink-0 rounded-circle overflow-hidden">
                        <span style="
                                  box-sizing: border-box;
                                  display: block;
                                  overflow: hidden;
                                  width: initial;
                                  height: initial;
                                  background: none;
                                  opacity: 1;
                                  border: 0;
                                  margin: 0;
                                  padding: 0;
                                  position: relative;
                                "><span style="
                                    box-sizing: border-box;
                                    display: block;
                                    width: initial;
                                    height: initial;
                                    background: none;
                                    opacity: 1;
                                    border: 0;
                                    margin: 0;
                                    padding: 0;
                                    padding-top: 100%;
                                  "></span>
                          <img alt="{{$match['teamb']['name']}}" src="{{ $match['teamb']['logo_url']  }}"
                            decoding="async" data-nimg="responsive" style="
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    bottom: 0;
                                    right: 0;
                                    box-sizing: border-box;
                                    padding: 0;
                                    border: none;
                                    margin: auto;
                                    display: block;
                                    width: 0;
                                    height: 0;
                                    min-width: 100%;
                                    max-width: 100%;
                                    min-height: 100%;
                                    max-height: 100%;
                                  " />
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <article class="style_article__IayJx undefined" id="{{$suh->cid}}">
            <a class="style_postimg__ftSiV d-block block-img mb-2 mb-md-3"
              href="{{route('post.details',[$suh->slug])}}"><span style="
                        box-sizing: border-box;
                        display: block;
                        overflow: hidden;
                        width: initial;
                        height: initial;
                        background: none;
                        opacity: 1;
                        border: 0;
                        margin: 0;
                        padding: 0;
                        position: relative;
                      "><span style="
                          box-sizing: border-box;
                          display: block;
                          width: initial;
                          height: initial;
                          background: none;
                          opacity: 1;
                          border: 0;
                          margin: 0;
                          padding: 0;
                          padding-top: 62.5%;
                        "></span><img alt="{{$suh->cid}}" src="{{getImageUrl($suh->img)}}" decoding="async"
                  data-nimg="responsive" style="position: absolute;
                          top: 0;
                          left: 0;
                          bottom: 0;
                          right: 0;
                          box-sizing: border-box;
                          padding: 0;
                          border: none;
                          margin: auto;
                          display: block;
                          width: 0;
                          height: 0;
                          min-width: 100%;
                          max-width: 100%;
                          min-height: 100%;
                          max-height: 100%;
                          background-size: cover;
                          background-position: 0% 0%;
                          background-image: url('{{getImageUrl($suh->img)}}');
                        " /> </span></a>
            <h3 class="small-head mb-2">
              <a href="{{route('post.details',[$suh->slug])}}">{{ $suh->title }} </a>
            </h3>
            <div class="style_articleInfo__WqisT d-flex">
              <span class="d-flex align-items-center"><span class="style_icon__Ukkjh d-block"><span style="
                            box-sizing: border-box;
                            display: block;
                            overflow: hidden;
                            width: initial;
                            height: initial;
                            background: none;
                            opacity: 1;
                            border: 0;
                            margin: 0;
                            padding: 0;
                            position: relative;
                          "><span style="
                              box-sizing: border-box;
                              display: block;
                              width: initial;
                              height: initial;
                              background: none;
                              opacity: 1;
                              border: 0;
                              margin: 0;
                              padding: 0;
                              padding-top: 100%;
                            "></span><img alt="Calender" src="/_next/static/media/calender-icon.23e624a9.svg"
                      decoding="async" data-nimg="responsive" style="
                              position: absolute;
                              top: 0;
                              left: 0;
                              bottom: 0;
                              right: 0;
                              box-sizing: border-box;
                              padding: 0;
                              border: none;
                              margin: auto;
                              display: block;
                              width: 0;
                              height: 0;
                              min-width: 100%;
                              max-width: 100%;
                              min-height: 100%;
                              max-height: 100%;
                            " /> </span></span>{{ Carbon\Carbon::parse($suh->created_at)->format('d M Y')
                }}</span><span class="d-flex align-items-center"><span class="style_icon__Ukkjh d-block"><span style="
                            box-sizing: border-box;
                            display: block;
                            overflow: hidden;
                            width: initial;
                            height: initial;
                            background: none;
                            opacity: 1;
                            border: 0;
                            margin: 0;
                            padding: 0;
                            position: relative;
                          "><span style="
                              box-sizing: border-box;
                              display: block;
                              width: initial;
                              height: initial;
                              background: none;
                              opacity: 1;
                              border: 0;
                              margin: 0;
                              padding: 0;
                              padding-top: 100%;
                            "></span><img alt="Clock" src="/_next/static/media/clock-icon.c7a46c6e.svg"
                      decoding="async" data-nimg="responsive" style="
                              position: absolute;
                              top: 0;
                              left: 0;
                              bottom: 0;
                              right: 0;
                              box-sizing: border-box;
                              padding: 0;
                              border: none;
                              margin: auto;
                              display: block;
                              width: 0;
                              height: 0;
                              min-width: 100%;
                              max-width: 100%;
                              min-height: 100%;
                              max-height: 100%;
                            " /> </span></span>{{ $suh->min }} Min</span>
            </div>
          </article>
          {{-- NORMAL --}}
          @php $articles = DB::table('articles')
          ->where('cid',$suh->cid)
          ->where('category', 'seasons_update')
          ->where('type', 'normal')
          ->where('status', 1)
          ->latest()
          ->limit(3)
          ->get();
          @endphp

          @foreach ($articles as $article)
          <article id="{{$article->id}}" class="style_article__IayJx style_articleSmall__SMJc6 undefined">
            <div class="row-8 row">
              <div class="col-sm-3 col-5">
                <a class="style_postimg__ftSiV undefined d-block block-img"
                  href="{{route('post.details',[$article->slug])}}"><span style="
                        box-sizing: border-box;
                        display: block;
                        overflow: hidden;
                        width: initial;
                        height: initial;
                        background: none;
                        opacity: 1;
                        border: 0;
                        margin: 0;
                        padding: 0;
                        position: relative;
                      "><span style="
                          box-sizing: border-box;
                          display: block;
                          width: initial;
                          height: initial;
                          background: none;
                          opacity: 1;
                          border: 0;
                          margin: 0;
                          padding: 0;
                          padding-top: 62.5%;
                        "></span><img alt="Dindigul Dragons" src="{{getImageUrl($article->img)}}" decoding="async"
                      data-nimg="responsive" style="
                          position: absolute;
                          top: 0;
                          left: 0;
                          bottom: 0;
                          right: 0;
                          box-sizing: border-box;
                          padding: 0;
                          border: none;
                          margin: auto;
                          display: block;
                          width: 0;
                          height: 0;
                          min-width: 100%;
                          max-width: 100%;
                          min-height: 100%;
                          max-height: 100%;
                          background-size: cover;
                          background-position: 0% 0%;
                          background-image: url('{{getImageUrl($article->img)}}');
                        " /> </span></a>
              </div>
              <div class="d-flex flex-column justify-content-between col-sm-9 col-7">
                <div>
                  <h4 class="small-head mb-2">
                    <a href="{{route('post.details',[$article->slug])}}">{{ $article->title }}</a>
                  </h4>
                </div>
                <div class="style_articleInfo__WqisT d-flex">
                  <span class="d-flex align-items-center"><span class="style_icon__Ukkjh d-block"><span style="
                            box-sizing: border-box;
                            display: block;
                            overflow: hidden;
                            width: initial;
                            height: initial;
                            background: none;
                            opacity: 1;
                            border: 0;
                            margin: 0;
                            padding: 0;
                            position: relative;
                          "><span style="
                              box-sizing: border-box;
                              display: block;
                              width: initial;
                              height: initial;
                              background: none;
                              opacity: 1;
                              border: 0;
                              margin: 0;
                              padding: 0;
                              padding-top: 100%;
                            "></span><img alt="Calender" src="/_next/static/media/calender-icon.23e624a9.svg"
                          decoding="async" data-nimg="responsive" style="
                              position: absolute;
                              top: 0;
                              left: 0;
                              bottom: 0;
                              right: 0;
                              box-sizing: border-box;
                              padding: 0;
                              border: none;
                              margin: auto;
                              display: block;
                              width: 0;
                              height: 0;
                              min-width: 100%;
                              max-width: 100%;
                              min-height: 100%;
                              max-height: 100%;
                            " /> </span></span>{{Carbon\Carbon::parse($article->created_at)->format('d M
                    Y')}}</span><span class="d-flex align-items-center"><span class="style_icon__Ukkjh d-block"><span
                        style="
                            box-sizing: border-box;
                            display: block;
                            overflow: hidden;
                            width: initial;
                            height: initial;
                            background: none;
                            opacity: 1;
                            border: 0;
                            margin: 0;
                            padding: 0;
                            position: relative;
                          "><span style="
                              box-sizing: border-box;
                              display: block;
                              width: initial;
                              height: initial;
                              background: none;
                              opacity: 1;
                              border: 0;
                              margin: 0;
                              padding: 0;
                              padding-top: 100%;
                            "></span><img alt="Clock" src="/_next/static/media/clock-icon.c7a46c6e.svg"
                          decoding="async" data-nimg="responsive" style="
                              position: absolute;
                              top: 0;
                              left: 0;
                              bottom: 0;
                              right: 0;
                              box-sizing: border-box;
                              padding: 0;
                              border: none;
                              margin: auto;
                              display: block;
                              width: 0;
                              height: 0;
                              min-width: 100%;
                              max-width: 100%;
                              min-height: 100%;
                              max-height: 100%;
                            " /> </span></span>{{$article->min}} Min</span>
                </div>
              </div>
            </div>
          </article>
          @endforeach

          {{-- ONE LINER --}}
          @php $articlesOneLiner = DB::table('articles')
          ->where('cid',$suh->cid)
          ->where('category', 'seasons_update')
          ->where('type', 'one_liner')
          ->where('status', 1)
          ->latest()
          ->limit(3)
          ->get();
          @endphp

          <article class="style_article__IayJx style_articleList__HOi_f py-0">
            @foreach ($articlesOneLiner as $aOL)
            <h4 id="{{$aOL->id}}" class="small-head mb-0">
              <a class="d-flex align-items-center" href="{{route('post.details',[$aOL->slug])}}"><svg width="20"
                  height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3.66667 2H15.3333C16.25 2 17 2.75 17 3.66667V12L12 17H3.66667C2.75 17 2 16.25 2 15.3333V3.66667C2 2.75 2.75 2 3.66667 2ZM15.3333 11.1667V3.66667H3.66667V15.3333H11.1667V11.1667H15.3333ZM9.5 11.1667H5.33333V9.5H9.5V11.1667ZM5.33333 7.83333H13.6667V6.16667H5.33333V7.83333Z"
                    fill="#757A82"></path>
                </svg><span class="style_textTruncate__R9wLD">{{$aOL->title}}</span></a>
            </h4>
            @endforeach
          </article>

        </section>
        @endforeach
        {{-- LATEST UPDATE HIGHLIGHTER END --}}
        {{-- SEASON UPDATE END --}}
      </div>
      <div class="style_commonSidebar__uyNzj common-sidebar bt-width  d-lg-block col-lg-3">
        <div class="style_rankingTab__ZG_Ko widget">
          <div class="style_title__x0MLg d-flex justify-content-between align-items-center">
            <h3
              class="widget-title small-head mb-0 d-flex align-items-center text-uppercase justify-content-center justify-content-md-start">
              <span class="style_icon__GYJGs icon me-1"><span style="
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
                        padding: 100% 0px 0px;
                      "></span><img alt="winner" sizes="100vw" srcset="
                        /_next/static/media/rank-icon-dark.1d932f7d.svg  450w,
                        /_next/static/media/rank-icon-dark.1d932f7d.svg  992w,
                        /_next/static/media/rank-icon-dark.1d932f7d.svg 1200w,
                        /_next/static/media/rank-icon-dark.1d932f7d.svg 1900w
                      " src="/_next/static/media/rank-icon-dark.1d932f7d.svg" decoding="async" data-nimg="responsive"
                    style="
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
                      " /></span></span><span>Ranking</span>
            </h3>
            <a class="theme-text font-semi" href="/icc-rankings/">Visit All</a>
          </div>
          <div class="style_tabContainer__K8v4c">
            <div class="style_navTab__SVIAC text-uppercase equal-width-nav nav nav-pills">
              <div class="nav-item">
                <a role="button" class="active nav-link nav-link" tabindex="0">Test</a>
              </div>
              <div class="nav-item">
                <a role="button" class="false nav-link nav-link" tabindex="0">ODI</a>
              </div>
              <div class="nav-item">
                <a role="button" class="false nav-link nav-link" tabindex="0">T20i</a>
              </div>
            </div>
            <div class="style_simpleTab__KhKGx simple-tab nav">
              <div class="nav-item">
                <a role="button" class="active nav-link nav-link" tabindex="0">Teams</a>
              </div>
              <div class="nav-item">
                <a role="button" class="false nav-link nav-link" tabindex="0">Batting</a>
              </div>
              <div class="nav-item">
                <a role="button" class="false nav-link nav-link" tabindex="0">Bowling</a>
              </div>
            </div>
            <div class="table-item_itemCard__qI76x">
              <div class="table-item_item__nbsco table-item_head___plQ3 d-flex align-items-center">
                <p class="mb-0">Rank</p>
                <p class="mb-0 flex-grow-1">Team</p>
                <p class="mb-0">Rating</p>
              </div>

              {{-- TEST TEAM RANKING START--}}

              {{-- TEAM --}}
              @php $data = getIccRanking() @endphp
              @php $lastUpdate = \Carbon\Carbon::parse($data['modified'])->format('M d, Y, H:m') @endphp
              @php $rank = $data['response']['ranks'] @endphp

              @for ($i = 0; $i < 5; $i++) <div class="table-item_item__nbsco d-flex align-items-center">
                <p class="mb-0 flex-shrink-0">{{$rank['teams']['tests'][$i]['rank']}}</p>
                <div class="undefined d-flex align-items-center flex-grow-1">
                  <div>
                    <p class="mb-0">{{$rank['teams']['tests'][$i]['team']}}</p>
                  </div>
                </div>
                <p class="mb-0 flex-shrink-0">{{$rank['teams']['tests'][$i]['rating']}}</p>
            </div>
            @endfor

            {{-- Batting --}}
            @for ($i = 0; $i < 5; $i++) <div class="table-item_item__nbsco d-flex align-items-center">
              <p class="mb-0 flex-shrink-0">{{$rank['batsmen']['tests'][$i]['rank']}}</p>
              <div class="undefined d-flex align-items-center flex-grow-1">
                <div>
                  <p class="mb-0">{{$rank['batsmen']['tests'][$i]['player']}}</p>
                </div>
              </div>
              <p class="mb-0 flex-shrink-0">{{$rank['batsmen']['tests'][$i]['rating']}}</p>
          </div>
          @endfor
          {{-- Bowling --}}
          @for ($i = 0; $i < 5; $i++) <div class="table-item_item__nbsco d-flex align-items-center">
            <p class="mb-0 flex-shrink-0">{{$rank['bowlers']['tests'][$i]['rank']}}</p>
            <div class="undefined d-flex align-items-center flex-grow-1">
              <div>
                <p class="mb-0">{{$rank['bowlers']['tests'][$i]['player']}}</p>
              </div>
            </div>
            <p class="mb-0 flex-shrink-0">{{$rank['bowlers']['tests'][$i]['rating']}}</p>
        </div>
        @endfor

        {{-- TEST TEAM RANKING END --}}

        {{-- ODI TEAM RANKING START --}}

        @for ($i = 0; $i < 5; $i++) <div class="table-item_item__nbsco d-flex align-items-center">
          <p class="mb-0 flex-shrink-0">{{$rank['teams']['odis'][$i]['rank']}}</p>
          <div class="undefined d-flex align-items-center flex-grow-1">
            <div>
              <p class="mb-0">{{$rank['teams']['odis'][$i]['team']}}</p>
            </div>
          </div>
          <p class="mb-0 flex-shrink-0">{{$rank['teams']['odis'][$i]['rating']}}</p>
      </div>
      @endfor

      {{-- Batting --}}
      @for ($i = 0; $i < 5; $i++) <div class="table-item_item__nbsco d-flex align-items-center">
        <p class="mb-0 flex-shrink-0">{{$rank['batsmen']['odis'][$i]['rank']}}</p>
        <div class="undefined d-flex align-items-center flex-grow-1">
          <div>
            <p class="mb-0">{{$rank['batsmen']['odis'][$i]['player']}}</p>
          </div>
        </div>
        <p class="mb-0 flex-shrink-0">{{$rank['batsmen']['odis'][$i]['rating']}}</p>
    </div>
    @endfor
    {{-- Bowling --}}
    @for ($i = 0; $i < 5; $i++) <div class="table-item_item__nbsco d-flex align-items-center">
      <p class="mb-0 flex-shrink-0">{{$rank['bowlers']['odis'][$i]['rank']}}</p>
      <div class="undefined d-flex align-items-center flex-grow-1">
        <div>
          <p class="mb-0">{{$rank['bowlers']['odis'][$i]['player']}}</p>
        </div>
      </div>
      <p class="mb-0 flex-shrink-0">{{$rank['bowlers']['odis'][$i]['rating']}}</p>
  </div>
  @endfor
  {{-- ODI TEAM RANKING END --}}

  {{-- T20 TEAM RANKING START --}}

  @for ($i = 0; $i < 5; $i++) <div class="table-item_item__nbsco d-flex align-items-center">
    <p class="mb-0 flex-shrink-0">{{$rank['teams']['t20s'][$i]['rank']}}</p>
    <div class="undefined d-flex align-items-center flex-grow-1">
      <div>
        <p class="mb-0">{{$rank['teams']['t20s'][$i]['team']}}</p>
      </div>
    </div>
    <p class="mb-0 flex-shrink-0">{{$rank['teams']['t20s'][$i]['rating']}}</p>
</div>
@endfor

{{-- Batting --}}
@for ($i = 0; $i < 5; $i++) <div class="table-item_item__nbsco d-flex align-items-center">
  <p class="mb-0 flex-shrink-0">{{$rank['batsmen']['t20s'][$i]['rank']}}</p>
  <div class="undefined d-flex align-items-center flex-grow-1">
    <div>
      <p class="mb-0">{{$rank['batsmen']['t20s'][$i]['player']}}</p>
    </div>
  </div>
  <p class="mb-0 flex-shrink-0">{{$rank['batsmen']['t20s'][$i]['rating']}}</p>
  </div>
  @endfor
  {{-- Bowling --}}
  @for ($i = 0; $i < 5; $i++) <div class="table-item_item__nbsco d-flex align-items-center">
    <p class="mb-0 flex-shrink-0">{{$rank['bowlers']['t20s'][$i]['rank']}}</p>
    <div class="undefined d-flex align-items-center flex-grow-1">
      <div>
        <p class="mb-0">{{$rank['bowlers']['t20s'][$i]['player']}}</p>
      </div>
    </div>
    <p class="mb-0 flex-shrink-0">{{$rank['bowlers']['t20s'][$i]['rating']}}</p>
    </div>
    @endfor
    {{-- T20 TEAM RANKING END --}}

    <p class="card-footer-note text-center">
      Last Updated On {{ $lastUpdate }} IST
    </p>
    </div>
    </div>
    </div>

    <section class="widget">
      <div class="widget-title">
        <h3 class="small-head d-flex align-items-center text-uppercase mb-0">
          <span class="icon me-1"><span style="
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
                        padding: 100% 0px 0px;
                      "></span><img alt="winner" sizes="100vw" srcset="
                        /_next/static/media/cup-dark-icon.133e379b.svg  450w,
                        /_next/static/media/cup-dark-icon.133e379b.svg  992w,
                        /_next/static/media/cup-dark-icon.133e379b.svg 1200w,
                        /_next/static/media/cup-dark-icon.133e379b.svg 1900w
                      " src="/_next/static/media/cup-dark-icon.133e379b.svg" decoding="async" data-nimg="responsive"
                style="
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
                      " /></span></span><span>Current Series</span>
        </h3>
      </div>
      <div class="font-semi">
        @foreach (getSeasons('seasons/2021/competitions') as $val)
        <a class="cs-item common-box d-block overflow-hidden text-nowrap mb-2"
          href="{{ getSeasonsDetailsUrl($val['matches_url']) }}">{{$val['title']}}</a>
        @endforeach
      </div>
    </section>

    {{-- TOP TEAMS --}}
    <section class="widget">
      <div class="widget-title">
        <h3 class="small-head d-flex align-items-center text-uppercase mb-0">
          <span class="icon me-1"><span style="
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
                        padding: 100% 0px 0px;
                      "></span><img alt="winner" src="./_next/static/media/earth-dark-icon.3958b272.svg"
                decoding="async" data-nimg="responsive" style="
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
                      " /></span></span>Top Teams
        </h3>
      </div>
      <div class="undefined d-flex flex-wrap font-semi text-center justify-content-between">
        <a class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
          href="/cricket-teams/australia/">
          <div class="style_flag__W_wsf position-absolute">
            <span style="
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
                        padding: 100% 0px 0px;
                      "></span><img alt="team" sizes="100vw" src="./images/country/country_flag.webp" decoding="async"
                data-nimg="responsive" style="
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
                      " /></span>
          </div>
          <span class="style_name__cp86h position-relative">Australia</span>
        </a><a class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
          href="/cricket-teams/pakistan/">
          <div class="style_flag__W_wsf position-absolute">
            <span style="
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
                        padding: 100% 0px 0px;
                      "></span><img alt="team" src="./images/country/country_flag.webp" decoding="async"
                data-nimg="responsive" style="
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
                      " />
              ></span>
          </div>
          <span class="style_name__cp86h position-relative">Pakistan</span>
        </a><a class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
          href="/cricket-teams/india/">
          <div class="style_flag__W_wsf position-absolute">
            <span style="
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
                        padding: 100% 0px 0px;
                      "></span><img alt="team" src="./images/country/country_flag.webp" decoding="async"
                data-nimg="responsive" style="
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
                      " />
              ></span>
          </div>
          <span class="style_name__cp86h position-relative">India</span>
        </a><a class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
          href="/cricket-teams/new-zealand/">
          <div class="style_flag__W_wsf position-absolute">
            <span style="
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
                        padding: 100% 0px 0px;
                      "></span><img alt="team" src="./images/country/country_flag.webp" decoding="async"
                data-nimg="responsive" style="
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
                      " />
              ></span>
          </div>
          <span class="style_name__cp86h position-relative">New Zealand</span>
        </a><a class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
          href="/cricket-teams/england/">
          <div class="style_flag__W_wsf position-absolute">
            <span style="
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
                        padding: 100% 0px 0px;
                      "></span><img alt="team" src="./images/country/country_flag.webp" decoding="async"
                data-nimg="responsive" style="
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
                      " />
              ></span>
          </div>
          <span class="style_name__cp86h position-relative">England</span>
        </a><a class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
          href="/cricket-teams/south-africa/">
          <div class="style_flag__W_wsf position-absolute">
            <span style="
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
                        padding: 100% 0px 0px;
                      "></span><img alt="team" src="./images/country/country_flag.webp" decoding="async"
                data-nimg="responsive" style="
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
                      " />
              ></span>
          </div>
          <span class="style_name__cp86h position-relative">South Africa</span>
        </a><a class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
          href="/cricket-teams/bangladesh/">
          <div class="style_flag__W_wsf position-absolute">
            <span style="
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
                        padding: 100% 0px 0px;
                      "></span><img alt="team" sizes="100vw" src="./images/country/country_flag.webp" decoding="async"
                data-nimg="responsive" style="
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
                      " /></span>
          </div>
          <span class="style_name__cp86h position-relative">Bangladesh</span>
        </a><a class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
          href="/cricket-teams/afghanistan/">
          <div class="style_flag__W_wsf position-absolute">
            <span style="
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
                        padding: 100% 0px 0px;
                      "></span><img alt="team" sizes="100vw" src="./images/country/country_flag.webp" decoding="async"
                data-nimg="responsive" style="
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
                      " /></span>
          </div>
          <span class="style_name__cp86h position-relative">Afghanistan</span>
        </a><a class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
          href="/cricket-teams/sri-lanka/">
          <div class="style_flag__W_wsf position-absolute">
            <span style="
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
                        padding: 100% 0px 0px;
                      "></span><img alt="team" src="./images/country/country_flag.webp" decoding="async"
                data-nimg="responsive" style="
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
                      " />
              ></span>
          </div>
          <span class="style_name__cp86h position-relative">Sri Lanka</span>
        </a><a class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
          href="/cricket-teams/west-indies/">
          <div class="style_flag__W_wsf position-absolute">
            <span style="
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
                        padding: 100% 0px 0px;
                      "></span><img alt="team" src="./images/country/country_flag.webp" decoding="async"
                data-nimg="responsive" style="
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
                      " />
              ></span>
          </div>
          <span class="style_name__cp86h position-relative">West Indies</span>
        </a>
      </div>
    </section>
    </div>
    </div>
    </div>
    </div>

    @endsection

    @section('script')
    <script>
      const all_matches_list = document.querySelectorAll('#all_matches .banner_match')
  const categoryClickHandler = (category) => {
      console.log(all_matches_list, '########')
      ///buttons logic
      const buttons = document.querySelectorAll('.category_button');
      buttons.forEach(button => {
          if (category == button.getAttribute('category')) {
              button.classList.add('style_active__3p7K4');
              return
          }
          button.classList.remove('style_active__3p7K4');
      })

      //// filter logic
      let all_matches = document.querySelector('#all_matches')
      let category_matches = document.querySelector('#category_matches')
      if (category == 'all') {
          all_matches.style.display = 'block'
          category_matches.style.display = 'none'
          let allContainer = document.querySelector('.all-slider-track');
          while (allContainer.firstChild) {
              allContainer.removeChild(allContainer.firstChild);
          }
          all_matches_list.forEach(each => {
              allContainer.appendChild(each);

          })
      }
      else {
          all_matches.style.display = 'none'
          category_matches.style.display = 'block'

          let filteredItems = []
          let categoryContainer = document.querySelector('#category-slider-track');
          while (categoryContainer.firstChild) {
              categoryContainer.removeChild(categoryContainer.firstChild);
          }
          all_matches_list.forEach(each => {
              if (each.getAttribute('category') == category) {
                  filteredItems.push(each)
                  categoryContainer.appendChild(each);
              }
          })
          if (!filteredItems?.length) {
              $('#scroll_1_next').hide();
              categoryContainer.append("no data found")
          }
          else {
              $('#scroll_1_next').show()
          }

      }
  }


    </script>
    @endsection