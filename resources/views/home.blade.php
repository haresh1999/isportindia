@extends('layout.main')

@section('content')
<div style="height: 259px">
  <section class="style_scorecardSlider__sPmoX scorecard-slider pt-0 overflow-hidden pb-3">
    <div class="container">
      <div class="style_scorecardNav__b0jAi xsmall-text text-nowrap scroll-list d-flex pb-1">
        <div class="d-flex m-auto">
          <button type="button" class="style_active__3p7K4 font-bold text-uppercase rounded-3 btn btn-link">
            All Matches (13)</button><button type="button" class="font-bold text-uppercase btn btn-link">
            W-Emerging Teams Asia Cup</button><button type="button" class="font-bold text-uppercase btn btn-link">
            U19 EAP WC Qualifier</button><button type="button" class="font-bold text-uppercase btn btn-link">
            BAN vs AFG</button><button type="button" class="font-bold text-uppercase btn btn-link">
            Odisha Cricket League</button><button type="button" class="font-bold text-uppercase btn btn-link">
            Africa Continental Cup</button><button type="button" class="font-bold text-uppercase btn btn-link">
            Kwibuka W-T20I</button><button type="button" class="font-bold text-uppercase btn btn-link">
            TNPL</button><button type="button" class="font-bold text-uppercase btn btn-link">
            Ajman T10
          </button>
        </div>
      </div>

      <div class="style_slider__UbtNO style_destroy__J7ab0 style_sliderMain__Q3_kE position-relative">
        <button style="display:none" onclick="scrollContent(-1)" id="scroll_1_prev"
          class="style_arrow__bXMF0 style_prev__wdbiv position-absolute top-50 start-0">Prev</button>
        <div class="style_inner__csGhV slider-track d-flex undefined" style="gap: 0" id="c-slider">

          @foreach (getMatch() as $val)
          <div class="">
            <div class="style_item__sjAWf p-2 mx-1 font-semi">
              <div class="position-relative">
                <a class="style_scoreCardLink__Clpdb position-absolute top-0 start-0 opacity-0 w-100 h-100"
                  href="/live-scores/slawm-vs-bana-w-match-5-woment20-womens-emerging-teams-asia-cup-14-jun-2023/">{{ $val['title'] }}</a>
                <div class="d-flex justify-content-between align-items-center style_head__CLILr">
                  <p>
                    <span class="danger-text text-capitalize">• {{$val['status_str']}} </span><span class="style_dark__duIOp"> -
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
                                  "></span><img alt="SLAWM"
                            src="{{ $val['teama']['logo_url'] }}"
                            decoding="async" data-nimg="responsive" style="
                                    position: absolute;
                                    inset: 0px;
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
                            sizes="(max-width: 767px) 24px, (max-width: 991px) 24px, (max-width: 1190px) 200px, 24px"
                            srcset="
                                   {{$val['teama']['logo_url']}} 40w,
                                   {{$val['teama']['logo_url']}} 80w,
                                   {{$val['teama']['logo_url']}} 120w,
                                   {{$val['teama']['logo_url']}} 240w,
                                   {{$val['teama']['logo_url']}} 450w,
                                   {{$val['teama']['logo_url']}}  992w,
                                   {{$val['teama']['logo_url']}} 1200w,
                                   {{$val['teama']['logo_url']}} 1900w
                                  " />
                          ></span>
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
                                  "></span><img alt="BANA-W"
                            src="{{ $val['teamb']['logo_url'] }}"
                            decoding="async" data-nimg="responsive" style="
                                    position: absolute;
                                    inset: 0px;

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
                            sizes="(max-width: 767px) 24px, (max-width: 991px) 24px, (max-width: 1190px) 200px, 24px"
                            srcset="
                                   {{ $val['teamb']['logo_url'] }} 40w,
                                   {{ $val['teamb']['logo_url'] }} 80w,
                                   {{ $val['teamb']['logo_url'] }} 120w,
                                   {{ $val['teamb']['logo_url'] }} 240w,
                                   {{ $val['teamb']['logo_url'] }} 450w,
                                   {{ $val['teamb']['logo_url'] }} 992w,
                                   {{ $val['teamb']['logo_url'] }} 1200w,
                                   {{ $val['teamb']['logo_url'] }} 1900w
                                  " />
                          ></span>
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
            <div id="carousel" class="style_inner__csGhV slider-track d-flex style_single__wL76r" id="c-slider"
              style="gap: 15px">
              <div data-slick-index="1">
                <article class="style_item__CjFgl">
                  <div class="block-img">
                    <a href="/cricket-appeal/3-players-who-might-retire-after-the-upcoming-edition-of-tnpl-5245/"><span
                        style="
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
                          src="/images/carousel/crick.webp" decoding="async" data-nimg="responsive"
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
                    <a href="/cricket-appeal/3-players-who-might-retire-after-the-upcoming-edition-of-tnpl-5245/">3
                      players who might retire after the upcoming
                      edition of TNPL</a>
                  </h4>
                </article>
              </div>
              <div data-slick-index="2">
                <article class="style_item__CjFgl">
                  <div class="block-img">
                    <a href="/cricket-appeal/ind-vs-aus-combined-xi-from-wtc-final-2023-4054/"><span style="
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
                              "></span><img alt="Travis Head, Pat Cummins and Ajinkya Rahane."
                          sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px"
                          srcset="
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686654353571_Travis-Head%2C-Pat-Cummins-and-Ajinkya-Rahane.jpeg&amp;w=40&amp;q=75     40w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686654353571_Travis-Head%2C-Pat-Cummins-and-Ajinkya-Rahane.jpeg&amp;w=80&amp;q=75     80w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686654353571_Travis-Head%2C-Pat-Cummins-and-Ajinkya-Rahane.jpeg&amp;w=120&amp;q=75   120w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686654353571_Travis-Head%2C-Pat-Cummins-and-Ajinkya-Rahane.jpeg&amp;w=240&amp;q=75   240w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686654353571_Travis-Head%2C-Pat-Cummins-and-Ajinkya-Rahane.jpeg&amp;w=450&amp;q=75   450w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686654353571_Travis-Head%2C-Pat-Cummins-and-Ajinkya-Rahane.jpeg&amp;w=992&amp;q=75   992w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686654353571_Travis-Head%2C-Pat-Cummins-and-Ajinkya-Rahane.jpeg&amp;w=1200&amp;q=75 1200w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686654353571_Travis-Head%2C-Pat-Cummins-and-Ajinkya-Rahane.jpeg&amp;w=1900&amp;q=75 1900w
                              "
                          src="/_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686654353571_Travis-Head%2C-Pat-Cummins-and-Ajinkya-Rahane.jpeg&amp;w=1900&amp;q=75"
                          decoding="async" data-nimg="responsive" class="style_postimg__rYHSo" style="
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
                    <a href="/cricket-appeal/ind-vs-aus-combined-xi-from-wtc-final-2023-4054/">IND vs AUS: Combined
                      XI from WTC Final 2023</a>
                  </h4>
                </article>
              </div>
              <div data-slick-index="3">
                <article class="style_item__CjFgl">
                  <div class="block-img">
                    <a href="/cricket-appeal/10-unsung-heroes-of-tnpl-6139/"><span style="
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
                              "></span><img alt="Baba Aparajith, R Sai Kishore and Shahrukh Khan"
                          sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px"
                          srcset="
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686468636812_Baba-Aparajith%2C-R-Sai-Kishore-and-Shahrukh-Khan.jpeg&amp;w=40&amp;q=75     40w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686468636812_Baba-Aparajith%2C-R-Sai-Kishore-and-Shahrukh-Khan.jpeg&amp;w=80&amp;q=75     80w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686468636812_Baba-Aparajith%2C-R-Sai-Kishore-and-Shahrukh-Khan.jpeg&amp;w=120&amp;q=75   120w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686468636812_Baba-Aparajith%2C-R-Sai-Kishore-and-Shahrukh-Khan.jpeg&amp;w=240&amp;q=75   240w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686468636812_Baba-Aparajith%2C-R-Sai-Kishore-and-Shahrukh-Khan.jpeg&amp;w=450&amp;q=75   450w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686468636812_Baba-Aparajith%2C-R-Sai-Kishore-and-Shahrukh-Khan.jpeg&amp;w=992&amp;q=75   992w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686468636812_Baba-Aparajith%2C-R-Sai-Kishore-and-Shahrukh-Khan.jpeg&amp;w=1200&amp;q=75 1200w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686468636812_Baba-Aparajith%2C-R-Sai-Kishore-and-Shahrukh-Khan.jpeg&amp;w=1900&amp;q=75 1900w
                              "
                          src="/_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1686468636812_Baba-Aparajith%2C-R-Sai-Kishore-and-Shahrukh-Khan.jpeg&amp;w=1900&amp;q=75"
                          decoding="async" data-nimg="responsive" class="style_postimg__rYHSo" style="
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
                    <a href="/cricket-appeal/10-unsung-heroes-of-tnpl-6139/">TNPL: 10 unsung heroes of all time</a>
                  </h4>
                </article>
              </div>
              <div data-slick-index="4">
                <article class="style_item__CjFgl">
                  <div class="block-img">
                    <a
                      href="/cricket-appeal/10-scandals-involving-match-fixing-spot-fixing-and-corruption-that-rocked-cricket/"><span
                        style="
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
                              "></span><img alt="Shakib Al Hasan"
                          sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px"
                          src="/_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Ffeatureimage%2FShakib-Al-Hasan-5.jpg&amp;w=1900&amp;q=75"
                          decoding="async" data-nimg="responsive" class="style_postimg__rYHSo" style="
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
                    <a
                      href="/cricket-appeal/10-scandals-involving-match-fixing-spot-fixing-and-corruption-that-rocked-cricket/">10
                      Scandals involving Match-Fixing, Spot-Fixing,
                      and Corruption that rocked Cricket</a>
                  </h4>
                </article>
              </div>
              <div data-slick-index="5">
                <article class="style_item__CjFgl">
                  <div class="block-img">
                    <a href="/cricket-appeal/virat-kohlis-tattoos-from-gods-eye-to-japanese-samurai-warrior/"><span
                        style="
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
                              "></span><img alt="Virat Kohli"
                          sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px"
                          srcset="
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1678606955353_Virat-Kohli.jpeg&amp;w=40&amp;q=75     40w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1678606955353_Virat-Kohli.jpeg&amp;w=80&amp;q=75     80w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1678606955353_Virat-Kohli.jpeg&amp;w=120&amp;q=75   120w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1678606955353_Virat-Kohli.jpeg&amp;w=240&amp;q=75   240w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1678606955353_Virat-Kohli.jpeg&amp;w=450&amp;q=75   450w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1678606955353_Virat-Kohli.jpeg&amp;w=992&amp;q=75   992w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1678606955353_Virat-Kohli.jpeg&amp;w=1200&amp;q=75 1200w,
                                /_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1678606955353_Virat-Kohli.jpeg&amp;w=1900&amp;q=75 1900w
                              "
                          src="/_next/image/?url=https%3A%2F%2Fmedia.crictracker.com%2Fmedia%2Fattachments%2F1678606955353_Virat-Kohli.jpeg&amp;w=1900&amp;q=75"
                          decoding="async" data-nimg="responsive" class="style_postimg__rYHSo" style="
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
                    <a href="/cricket-appeal/virat-kohlis-tattoos-from-gods-eye-to-japanese-samurai-warrior/">Virat
                      Kohli's tattoos: From God's eye to Japanese
                      Samurai warrior</a>
                  </h4>
                </article>
              </div>
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
                  fill="var(--theme-color-light)"></path>
              </svg></span>Trending News
          </h3>
          <div class="trendingList">
            <article class="d-flex align-items-start">
              <b class="num">1</b>
              <div class="desc flex-grow-1">
                <span class="badge bg-primary">Social Tracker</span>
                <h4 class="small-head mb-0">
                  <a class="overflow-hidden"
                    href="/social-tracker-cricket/just-two-young-boys-from-baroda-who-never-gave-up-hardik-pandyas-heartwarming-photo-with-brother-krunal-wins-internet/">'Just
                    two young boys from Baroda who never gave up' -
                    Hardik Pandya's heartwarming photo with brother Krunal
                    wins internet</a>
                </h4>
              </div>
            </article>
            <article class="d-flex align-items-start">
              <b class="num">2</b>
              <div class="desc flex-grow-1">
                <span class="badge bg-primary">Twitter Reactions</span>
                <h4 class="small-head mb-0">
                  <a class="overflow-hidden"
                    href="/twitter-reactions-cricket/twitter-reactions-new-zealand-down-pakistan-despite-iftikhar-ahmeds-fighting-knock-in-karachi/">Twitter
                    Reactions: New Zealand down Pakistan despite
                    Iftikhar Ahmed's fighting knock in Karachi</a>
                </h4>
              </div>
            </article>
            <article class="d-flex align-items-start">
              <b class="num">3</b>
              <div class="desc flex-grow-1">
                <span class="badge bg-primary">Stats Mania</span>
                <h4 class="small-head mb-0">
                  <a class="overflow-hidden"
                    href="/cricket-stats-mania/rr-vs-srh-match-52-ipl-2023-stats-review-yashasvi-jaiswals-feat-srhs-record-chase-and-other-stats/">RR
                    vs SRH, Match 52 IPL 2023 Stats Review: Yashasvi
                    Jaiswal's feat, SRH's record chase and other stats</a>
                </h4>
              </div>
            </article>
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
          <article id="6488a7f65099b3516f797afa" class="style_article__IayJx style_articleMedium__ME07j undefined">
            <div class="row-8 row">
              <div class="col-sm-6 col-5">
                <a
                  href="/cricket-news/mlc-2023-andre-russell-sunil-narine-among-four-kkr-players-roped-in-by-los-angeles-knight-riders/">
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
                      <img alt="Andre Russell and Sunil Narine"
                        src="./images/LatestUpdates/1686677780911_Andre-Rusell-and-Narine.webp" decoding="async"
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
                    </span>
                  </div>
                </a>
              </div>
              <div class="d-flex flex-column justify-content-between col-sm-6 col-7">
                <div>
                  <h3 class="small-head mb-1">
                    <a href="{{ route('post.details','russell-narine-among-four-kkr-players-to-feature-for-lakr') }}">Russell,
                      Narine among four KKR players to feature
                      for LAKR</a>
                  </h3>
                  <p class="style_desc__jLYw_ style_desc__zP5qm">
                    Los Angeles Knight Riders (LAKR), Kolkata Knight
                    Riders' sister franchise, has roped in several
                    high-profile names to their squad, including KKR stars
                    Andre Russell, Sunil Narine, Lockie Ferguson and
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
                              " sizes="100vw" /> </span></span>13 Jun 2023</span><span
                    class="d-flex align-items-center"><span class="style_icon__Ukkjh undefined d-block"><span style="
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
                              " sizes="100vw" /> </span></span>2
                    <!-- -->
                    <!-- -->Min
                  </span>
                </div>
              </div>
            </div>
          </article>
          <article id="64889f061024650a1b8f581d" class="style_article__IayJx style_articleSmall__SMJc6 undefined">
            <div class="row-8 row">
              <div class="col-sm-3 col-5">
                <a class="style_postimg__ftSiV undefined d-block block-img"
                  href="/social-tracker-cricket/harbhajan-singh-picks-youthful-15-member-squad-for-t20i-series-against-west-indies/"><span
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
                            padding-top: 62.5%;
                          "></span><img alt="Harbhajan Singh and Hardik Pandya"
                      src="./images/LatestUpdates/1686677780911_Andre-Rusell-and-Narine.webp" decoding="async"
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
                    <a href="{{route('post.details','harbhajan-singh-picks-youthful-15-member-squad-for-wi-t20is')}}">Harbhajan
                      Singh picks youthful 15-member squad for
                      WI T20Is</a>
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
                              " sizes="100vw" /></span></span>13 Jun 2023</span><span
                    class="d-flex align-items-center"><span class="style_icon__Ukkjh d-block"><span style="
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
                              " sizes="100vw" /></span></span>2
                    <!-- -->
                    <!-- -->Min
                  </span>
                </div>
              </div>
            </div>
          </article>
          <article id="648897a55099b3516f733ef4" class="style_article__IayJx style_articleSmall__SMJc6 undefined">
            <div class="row-8 row">
              <div class="col-sm-3 col-5">
                <a class="style_postimg__ftSiV undefined d-block block-img"
                  href="/cricket-news/deodhar-trophy-to-take-place-after-four-years-in-puducherry-bangalore-to-host-duleep-trophy/"><span
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
                            padding-top: 62.5%;
                          "></span><img alt="India Red"
                      src="./images/LatestUpdates/1686677780911_Andre-Rusell-and-Narine.webp" decoding="async"
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
                    <a href="{{route('post.details','deodhar-trophy-to-take-place-after-four-years-in-puducherry')}}">Deodhar
                      Trophy to take place after four years in
                      Puducherry</a>
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
                              " sizes="100vw" /></span></span>13 Jun 2023</span><span
                    class="d-flex align-items-center"><span class="style_icon__Ukkjh d-block"><span style="
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
                              " sizes="100vw" /></span></span>2
                    <!-- -->
                    <!-- -->Min
                  </span>
                </div>
              </div>
            </div>
          </article>
          <article class="style_article__IayJx style_articleList__HOi_f py-0">
            <h4 id="648881141024650a1b84c88b" class="small-head mb-0">
              <a class="d-flex align-items-center"
                href="/cricket-news/im-devastated-for-jofra-archer-eoin-morgan-reveals-his-support-extending-conversation-with-struggling-pacer/"><svg
                  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3.66667 2H15.3333C16.25 2 17 2.75 17 3.66667V12L12 17H3.66667C2.75 17 2 16.25 2 15.3333V3.66667C2 2.75 2.75 2 3.66667 2ZM15.3333 11.1667V3.66667H3.66667V15.3333H11.1667V11.1667H15.3333ZM9.5 11.1667H5.33333V9.5H9.5V11.1667ZM5.33333 7.83333H13.6667V6.16667H5.33333V7.83333Z"
                    fill="#757A82"></path>
                </svg><span class="style_textTruncate__R9wLD">I’m devastated for Jofra Archer: Eoin
                  Morgan</span></a>
            </h4>
            <h4 id="648870811024650a1b7f4f42" class="small-head mb-0">
              <a class="d-flex align-items-center"
                href="/cricket-news/stokes-sent-me-a-message-saying-ashes-i-responded-with-lol-moeen-ali-reveals-short-retirement-conversation-with-ben-stokes-ahead-of-ashes-2023/"><svg
                  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3.66667 2H15.3333C16.25 2 17 2.75 17 3.66667V12L12 17H3.66667C2.75 17 2 16.25 2 15.3333V3.66667C2 2.75 2.75 2 3.66667 2ZM15.3333 11.1667V3.66667H3.66667V15.3333H11.1667V11.1667H15.3333ZM9.5 11.1667H5.33333V9.5H9.5V11.1667ZM5.33333 7.83333H13.6667V6.16667H5.33333V7.83333Z"
                    fill="#757A82"></path>
                </svg><span class="style_textTruncate__R9wLD">Ashes 2023: Ali reveals short conversation with Ben
                  Stokes</span></a>
            </h4>
            <h4 id="64886e221024650a1b7e6b9d" class="small-head mb-0">
              <a class="d-flex align-items-center"
                href="/cricket-news/the-fact-that-it-is-ashes-and-its-such-a-big-series-to-be-part-of-it-would-be-amazing-moeen-ali/"><svg
                  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3.66667 2H15.3333C16.25 2 17 2.75 17 3.66667V12L12 17H3.66667C2.75 17 2 16.25 2 15.3333V3.66667C2 2.75 2.75 2 3.66667 2ZM15.3333 11.1667V3.66667H3.66667V15.3333H11.1667V11.1667H15.3333ZM9.5 11.1667H5.33333V9.5H9.5V11.1667ZM5.33333 7.83333H13.6667V6.16667H5.33333V7.83333Z"
                    fill="#757A82"></path>
                </svg><span class="style_textTruncate__R9wLD">Moeen Ali excited to play in Ashes 2023</span></a>
            </h4>
          </article>
        </section>
        <section id="t20/tnpl" class="style_homeArticles__4e_Na">
          <h4 class="line-title text-uppercase text-center overflow-hidden">
            <a class="rounded-pill position-relative d-inline-block" href="/t20/tnpl/"><span
                class="d-none d-md-block text-nowrap overflow-hidden">TNPL 2023</span><span
                class="d-block d-md-none text-nowrap overflow-hidden">TNPL</span></a>
          </h4>
          <div class="style_seriesInfo__LBbez text-center">
            <p>Tamil Nadu Premier League</p>
            <div class="style_btnList__6CLwB text-nowrap scroll-list d-flex">
              <nav class="font-semi d-flex me-auto ms-auto text-uppercase">
                <a href="/t20/tnpl/fixtures/">Fixtures</a><a href="/t20/tnpl/standings/">Standings</a><a
                  href="/t20/tnpl/stats/">Stats</a><a href="/t20/tnpl/squads/">Squads</a><a
                  href="/t20/tnpl/fantasy-tips/">Fantasy Tips</a>
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
                                "></span><img alt="DD"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
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
                        <b class="mx-1">DD</b>
                        <p class="style_score__yQMk7 font-semi"></p>
                      </div>
                    </div>
                  </div>
                  <div class="style_info__5CTrf text-start text-sm-center">
                    <span class="style_badge__q5297 live mb-1 badge bg-primary"><span>Upcoming</span></span>
                    <p class="d-inline d-sm-block">
                      Match 4
                      <!-- -->,
                      <!-- -->Coimbatore
                    </p>
                    <p class="d-inline d-sm-block">
                      Match starts at
                      <!-- -->
                      <!-- -->14 Jun 2023, Wed, 7:15 PM IST
                    </p>
                  </div>
                  <div class="style_team__SgPqc flex-shrink-0 text-end mb-2 mb-sm-0">
                    <div
                      class="style_name__KSXfd d-flex align-items-center justify-content-end flex-row-reverse flex-sm-row">
                      <div
                        class="d-flex align-items-center align-items-sm-end flex-sm-column flex-grow-1 flex-sm-grow-0 justify-content-between justify-content-sm-center">
                        <b class="mx-1">TRICHY</b>
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
                                "></span><img alt="TRICHY"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
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
          <article class="style_article__IayJx undefined" id="6485d42aa2ef417a258ac104">
            <a class="style_postimg__ftSiV d-block block-img mb-2 mb-md-3"
              href="/cricket-appeal/3-players-who-might-retire-after-the-upcoming-edition-of-tnpl-5245/"><span style="
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
                      "></span><img alt="Shijit Chandran."
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async"
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
                        filter: blur(20px);
                        background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wBDACgcHiMeGSgjISMtKygwPGRBPDc3PHtYXUlkkYCZlo+AjIqgtObDoKrarYqMyP/L2u71////m8H////6/+b9//j/2wBDASstLTw1PHZBQXb4pYyl+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj/wAARCAAZACgDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAECAwT/xAAhEAACAgICAQUAAAAAAAAAAAAAAQIRITEDEmEEIjJBQv/EABcBAQEBAQAAAAAAAAAAAAAAAAIAAQP/xAAYEQEBAQEBAAAAAAAAAAAAAAAAARECQf/aAAwDAQACEQMRAD8A4PBVAl1axsHRyE6dE08j63JRTbb0bvgUOPOyLnnXK1YEyl73EBZWWYqN0vI7S+yVoH8TE0g+s0607Rrz+oco02c36HzbiXpc3IxzKeAKjtgNj//Z');
                      " /> </span></a>
            <h3 class="small-head mb-2">
              <a href="/cricket-appeal/3-players-who-might-retire-after-the-upcoming-edition-of-tnpl-5245/">3
                players who might retire after the upcoming TNPL
                edition</a>
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
                          " /> </span></span>13 Jun 2023</span><span class="d-flex align-items-center"><span
                  class="style_icon__Ukkjh d-block"><span style="
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
                          "></span><img alt="Clock" src="/_next/static/media/clock-icon.c7a46c6e.svg" decoding="async"
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
                          " /> </span></span>4
                <!-- -->
                <!-- -->Min
              </span>
            </div>
          </article>
          <article id="648832155099b3516f5143e5" class="style_article__IayJx style_articleSmall__SMJc6 undefined">
            <div class="row-8 row">
              <div class="col-sm-3 col-5">
                <a class="style_postimg__ftSiV undefined d-block block-img"
                  href="/cricket-match-predictions/tnpl-2023-match-4-dd-vs-rtw-match-prediction-who-will-win-todays-tnpl-match-between-dindigul-dragons-and-ba11sy-trichy-9999/"><span
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
                            padding-top: 62.5%;
                          "></span><img alt="Dindigul Dragons"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
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
                            background-size: cover;
                            background-position: 0% 0%;
                            filter: blur(20px);
                            background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wBDACgcHiMeGSgjISMtKygwPGRBPDc3PHtYXUlkkYCZlo+AjIqgtObDoKrarYqMyP/L2u71////m8H////6/+b9//j/2wBDASstLTw1PHZBQXb4pYyl+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj/wAARCAAZACgDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAECAwT/xAAhEAACAgICAQUAAAAAAAAAAAAAAQIRITEDEmEEIjJBQv/EABcBAQEBAQAAAAAAAAAAAAAAAAIAAQP/xAAYEQEBAQEBAAAAAAAAAAAAAAAAARECQf/aAAwDAQACEQMRAD8A4PBVAl1axsHRyE6dE08j63JRTbb0bvgUOPOyLnnXK1YEyl73EBZWWYqN0vI7S+yVoH8TE0g+s0607Rrz+oco02c36HzbiXpc3IxzKeAKjtgNj//Z');
                          " /> </span></a>
              </div>
              <div class="d-flex flex-column justify-content-between col-sm-9 col-7">
                <div>
                  <h4 class="small-head mb-2">
                    <a
                      href="/cricket-match-predictions/tnpl-2023-match-4-dd-vs-rtw-match-prediction-who-will-win-todays-tnpl-match-between-dindigul-dragons-and-ba11sy-trichy-9999/">TNPL
                      2023: Match 4, DD vs RTW Match Prediction</a>
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
                              " /> </span></span>13 Jun 2023</span><span class="d-flex align-items-center"><span
                      class="style_icon__Ukkjh d-block"><span style="
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
                              " /> </span></span>2
                    <!-- -->
                    <!-- -->Min
                  </span>
                </div>
              </div>
            </div>
          </article>
          <article id="648818c61024650a1b619c70" class="style_article__IayJx style_articleSmall__SMJc6 undefined">
            <div class="row-8 row">
              <div class="col-sm-3 col-5">
                <a class="style_postimg__ftSiV undefined d-block block-img"
                  href="/cricket-news/tnpl-2023-shahrukh-khans-all-round-show-propels-lyca-kovai-kings-to-emphatic-victory-over-idream-tiruppur-tamizhans-in-opener/"><span
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
                            padding-top: 62.5%;
                          "></span><img alt="Shahrukh Khan and Vijay Shankar"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
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
                            background-size: cover;
                            background-position: 0% 0%;
                            filter: blur(20px);
                            background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wBDACgcHiMeGSgjISMtKygwPGRBPDc3PHtYXUlkkYCZlo+AjIqgtObDoKrarYqMyP/L2u71////m8H////6/+b9//j/2wBDASstLTw1PHZBQXb4pYyl+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj/wAARCAAZACgDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAECAwT/xAAhEAACAgICAQUAAAAAAAAAAAAAAQIRITEDEmEEIjJBQv/EABcBAQEBAQAAAAAAAAAAAAAAAAIAAQP/xAAYEQEBAQEBAAAAAAAAAAAAAAAAARECQf/aAAwDAQACEQMRAD8A4PBVAl1axsHRyE6dE08j63JRTbb0bvgUOPOyLnnXK1YEyl73EBZWWYqN0vI7S+yVoH8TE0g+s0607Rrz+oco02c36HzbiXpc3IxzKeAKjtgNj//Z');
                          " /> </span></a>
              </div>
              <div class="d-flex flex-column justify-content-between col-sm-9 col-7">
                <div>
                  <h4 class="small-head mb-2">
                    <a
                      href="/cricket-news/tnpl-2023-shahrukh-khans-all-round-show-propels-lyca-kovai-kings-to-emphatic-victory-over-idream-tiruppur-tamizhans-in-opener/">LKK
                      beat ITT in inaugural TNPL 2023 match</a>
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
                              " /> </span></span>13 Jun 2023</span><span class="d-flex align-items-center"><span
                      class="style_icon__Ukkjh d-block"><span style="
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
                              " /> </span></span>2
                    <!-- -->
                    <!-- -->Min
                  </span>
                </div>
              </div>
            </div>
          </article>
          <article id="6488169a4f03743744ab6b54" class="style_article__IayJx style_articleSmall__SMJc6 undefined">
            <div class="row-8 row">
              <div class="col-sm-3 col-5">
                <a class="style_postimg__ftSiV undefined d-block block-img"
                  href="/cricket-match-predictions/tnpl-2023-match-3-smp-vs-nrk-match-prediction-who-will-win-todays-tnpl-match-between-siechem-madurai-panthers-and-nellai-royal-kings/"><span
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
                            padding-top: 62.5%;
                          "></span><img alt="Siechem Madurai Panthers"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
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
                            background-size: cover;
                            background-position: 0% 0%;
                            filter: blur(20px);
                            background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wBDACgcHiMeGSgjISMtKygwPGRBPDc3PHtYXUlkkYCZlo+AjIqgtObDoKrarYqMyP/L2u71////m8H////6/+b9//j/2wBDASstLTw1PHZBQXb4pYyl+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj/wAARCAAZACgDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAECAwT/xAAhEAACAgICAQUAAAAAAAAAAAAAAQIRITEDEmEEIjJBQv/EABcBAQEBAQAAAAAAAAAAAAAAAAIAAQP/xAAYEQEBAQEBAAAAAAAAAAAAAAAAARECQf/aAAwDAQACEQMRAD8A4PBVAl1axsHRyE6dE08j63JRTbb0bvgUOPOyLnnXK1YEyl73EBZWWYqN0vI7S+yVoH8TE0g+s0607Rrz+oco02c36HzbiXpc3IxzKeAKjtgNj//Z');
                          " /> </span></a>
              </div>
              <div class="d-flex flex-column justify-content-between col-sm-9 col-7">
                <div>
                  <h4 class="small-head mb-2">
                    <a
                      href="/cricket-match-predictions/tnpl-2023-match-3-smp-vs-nrk-match-prediction-who-will-win-todays-tnpl-match-between-siechem-madurai-panthers-and-nellai-royal-kings/">TNPL
                      2023: Match 3, SMP vs NRK Match Prediction</a>
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
                              " /> </span></span>13 Jun 2023</span><span class="d-flex align-items-center"><span
                      class="style_icon__Ukkjh d-block"><span style="
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
                              " /> </span></span>2
                    <!-- -->
                    <!-- -->Min
                  </span>
                </div>
              </div>
            </div>
          </article>
          <a class="theme-btn full-btn btn btn-primary" href="/t20/tnpl/">More from
            <!-- -->
            <!-- -->TNPL 2023
            <!-- -->
            &gt;
          </a>
        </section>
        <div
          class="style_downloadBanner__koJYz w-100 d-flex flex-column align-items-center mb-2 mb-md-3 position-relative overflow-hidden text-center">
          <div class="style_ctIcon__k4SaE overflow-hidden flex-shrink-0">
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
                      padding-top: 190.625%;
                    "></span><img alt="CT"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async"
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
                    " />
            </span>
          </div>
          <div>
            <p class="mx-2">
              The Infotainment of Cricket with CricTracker App
            </p>
            <p class="mx-2">Download Now</p>
            <div class="d-flex justify-content-center">
              <a class="mx-1" href="https://apps.apple.com/in/app/crictracker/id6443913175" rel="noreferrer"
                target="_blank"><span style="
                        box-sizing: border-box;
                        display: inline-block;
                        overflow: hidden;
                        width: 96px;
                        height: 32px;
                        background: none;
                        opacity: 1;
                        border: 0;
                        margin: 0;
                        padding: 0;
                        position: relative;
                      "><img alt="CT"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    decoding="async" data-nimg="fixed" style="
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
                        " /> </span></a><a class="mx-1" rel="noreferrer"
                href="https://play.google.com/store/apps/details?id=com.app.crictracker" target="_blank"><span style="
                        box-sizing: border-box;
                        display: inline-block;
                        overflow: hidden;
                        width: 109px;
                        height: 32px;
                        background: none;
                        opacity: 1;
                        border: 0;
                        margin: 0;
                        padding: 0;
                        position: relative;
                      "><img alt="CT"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    decoding="async" data-nimg="fixed" style="
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
                        " /> </span></a>
            </div>
          </div>
          <div class="style_pattern__SXNNg position-absolute">
            <span style="
                    box-sizing: border-box;
                    display: inline-block;
                    overflow: hidden;
                    width: 304px;
                    height: 187px;
                    background: none;
                    opacity: 1;
                    border: 0;
                    margin: 0;
                    padding: 0;
                    position: relative;
                  "><img alt="CT" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                decoding="async" data-nimg="fixed" style="
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

        <section id="t20/t20-blast" class="style_homeArticles__4e_Na">
          <h4 class="line-title text-uppercase text-center overflow-hidden">
            <a class="rounded-pill position-relative d-inline-block" href="/t20/t20-blast/"><span
                class="d-none d-md-block text-nowrap overflow-hidden">T20 Blast 2023</span><span
                class="d-block d-md-none text-nowrap overflow-hidden">Vitality Blast</span></a>
          </h4>
          <div class="style_seriesInfo__LBbez text-center">
            <p>Vitality Blast</p>
            <div class="style_btnList__6CLwB text-nowrap scroll-list d-flex">
              <nav class="font-semi d-flex me-auto ms-auto text-uppercase">
                <a href="/t20/t20-blast/fixtures/">Fixtures</a><a href="/t20/t20-blast/standings/">Standings</a><a
                  href="/t20/t20-blast/stats/">Stats</a><a href="/t20/t20-blast/squads/">Squads</a><a
                  href="/t20/t20-blast/fantasy-tips/">Fantasy Tips</a>
              </nav>
            </div>
            <div class="">
              <div class="style_liveMatchCard__tNdaO d-flex flex-column align-items-center mb-2 position-relative">
                <div
                  class="w-100 position-relative d-flex flex-column flex-sm-row align-items-sm-center justify-content-between">
                  <a class="style_scoreCardLink__PeqzJ"
                    href="/live-scores/wor-vs-was-north-group-t20-vitality-blast-16-jun-2023/"></a>
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
                                "></span><img alt="WOR"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
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
                        <b class="mx-1">WOR</b>
                        <p class="style_score__yQMk7 font-semi"></p>
                      </div>
                    </div>
                  </div>
                  <div class="style_info__5CTrf text-start text-sm-center">
                    <span class="style_badge__q5297 live mb-1 badge bg-primary"><span>Upcoming</span></span>
                    <p class="d-inline d-sm-block">
                      North Group
                      <!-- -->,
                      <!-- -->Leicester
                    </p>
                    <p class="d-inline d-sm-block">
                      Match starts at
                      <!-- -->
                      <!-- -->16 Jun 2023, Fri, 3:30 PM IST
                    </p>
                  </div>
                  <div class="style_team__SgPqc flex-shrink-0 text-end mb-2 mb-sm-0">
                    <div
                      class="style_name__KSXfd d-flex align-items-center justify-content-end flex-row-reverse flex-sm-row">
                      <div
                        class="d-flex align-items-center align-items-sm-end flex-sm-column flex-grow-1 flex-sm-grow-0 justify-content-between justify-content-sm-center">
                        <b class="mx-1">WAS</b>
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
                                "></span><img alt="WAS"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
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
          <article id="647daeb7b948073ed181cf30" class="style_article__IayJx style_articleMedium__ME07j undefined">
            <div class="row-8 row">
              <div class="col-sm-6 col-5">
                <a
                  href="/social-tracker-cricket/t20-blast-2023-shaheen-afridi-sends-jos-buttlers-off-stump-flying-with-searing-yorker/">
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
                            "></span><img alt="Shaheen Afridi Dismissal."
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
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
                              background-size: cover;
                              background-position: 0% 0%;
                              filter: blur(20px);
                              background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wBDACgcHiMeGSgjISMtKygwPGRBPDc3PHtYXUlkkYCZlo+AjIqgtObDoKrarYqMyP/L2u71////m8H////6/+b9//j/2wBDASstLTw1PHZBQXb4pYyl+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj/wAARCAAZACgDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAECAwT/xAAhEAACAgICAQUAAAAAAAAAAAAAAQIRITEDEmEEIjJBQv/EABcBAQEBAQAAAAAAAAAAAAAAAAIAAQP/xAAYEQEBAQEBAAAAAAAAAAAAAAAAARECQf/aAAwDAQACEQMRAD8A4PBVAl1axsHRyE6dE08j63JRTbb0bvgUOPOyLnnXK1YEyl73EBZWWYqN0vI7S+yVoH8TE0g+s0607Rrz+oco02c36HzbiXpc3IxzKeAKjtgNj//Z');
                            " />
                    </span>
                  </div>
                </a>
              </div>
              <div class="d-flex flex-column justify-content-between col-sm-6 col-7">
                <div>
                  <h3 class="small-head mb-1">
                    <a
                      href="/social-tracker-cricket/t20-blast-2023-shaheen-afridi-sends-jos-buttlers-off-stump-flying-with-searing-yorker/">Afridi
                      sends Buttler's off stump flying with
                      searing yorker</a>
                  </h3>
                  <p class="style_desc__jLYw_ style_desc__zP5qm">
                    Pakistani fast-bowling sensation Shaheen Afridi has
                    rediscovered his lethal form with the ball after
                    recovering from his knee injury. The left-arm pacer
                    displayed his imperious control of the ball, up
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
                              " /> </span></span>5 Jun 2023</span><span class="d-flex align-items-center"><span
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
                              " /> </span></span>2
                    <!-- -->
                    <!-- -->Min
                  </span>
                </div>
              </div>
            </div>
          </article>
          <article id="647c53b6a191afaf30098d1d" class="style_article__IayJx style_articleSmall__SMJc6 undefined">
            <div class="row-8 row">
              <div class="col-sm-3 col-5">
                <a class="style_postimg__ftSiV undefined d-block block-img"
                  href="/cricket-news/important-that-people-see-women-in-different-roles-throughout-sue-redfern-on-becoming-first-woman-to-umpire-t20-blast-clash-4703/"><span
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
                            padding-top: 62.5%;
                          "></span><img alt="Sue Redfern"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
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
                            background-size: cover;
                            background-position: 0% 0%;
                            filter: blur(20px);
                            background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wBDACgcHiMeGSgjISMtKygwPGRBPDc3PHtYXUlkkYCZlo+AjIqgtObDoKrarYqMyP/L2u71////m8H////6/+b9//j/2wBDASstLTw1PHZBQXb4pYyl+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj/wAARCAAZACgDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAECAwT/xAAhEAACAgICAQUAAAAAAAAAAAAAAQIRITEDEmEEIjJBQv/EABcBAQEBAQAAAAAAAAAAAAAAAAIAAQP/xAAYEQEBAQEBAAAAAAAAAAAAAAAAARECQf/aAAwDAQACEQMRAD8A4PBVAl1axsHRyE6dE08j63JRTbb0bvgUOPOyLnnXK1YEyl73EBZWWYqN0vI7S+yVoH8TE0g+s0607Rrz+oco02c36HzbiXpc3IxzKeAKjtgNj//Z');
                          " /> </span></a>
              </div>
              <div class="d-flex flex-column justify-content-between col-sm-9 col-7">
                <div>
                  <h4 class="small-head mb-2">
                    <a
                      href="/cricket-news/important-that-people-see-women-in-different-roles-throughout-sue-redfern-on-becoming-first-woman-to-umpire-t20-blast-clash-4703/">Sue
                      Redfern to become first woman to umpire T20
                      Blast clash</a>
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
                              " /> </span></span>4 Jun 2023</span><span class="d-flex align-items-center"><span
                      class="style_icon__Ukkjh d-block"><span style="
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
                              " /> </span></span>2
                    <!-- -->
                    <!-- -->Min
                  </span>
                </div>
              </div>
            </div>
          </article>
          <article id="6479b4cd23632738d7f2525a" class="style_article__IayJx style_articleSmall__SMJc6 undefined">
            <div class="row-8 row">
              <div class="col-sm-3 col-5">
                <a class="style_postimg__ftSiV undefined d-block block-img"
                  href="/cricket-news/it-is-very-easy-for-people-to-overcomplicate-t20-cricket-it-is-a-simple-game-mason-crane/"><span
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
                            padding-top: 62.5%;
                          "></span><img alt="Mason Crane"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
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
                            background-size: cover;
                            background-position: 0% 0%;
                            filter: blur(20px);
                            background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wBDACgcHiMeGSgjISMtKygwPGRBPDc3PHtYXUlkkYCZlo+AjIqgtObDoKrarYqMyP/L2u71////m8H////6/+b9//j/2wBDASstLTw1PHZBQXb4pYyl+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj/wAARCAAZACgDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAECAwT/xAAhEAACAgICAQUAAAAAAAAAAAAAAQIRITEDEmEEIjJBQv/EABcBAQEBAQAAAAAAAAAAAAAAAAIAAQP/xAAYEQEBAQEBAAAAAAAAAAAAAAAAARECQf/aAAwDAQACEQMRAD8A4PBVAl1axsHRyE6dE08j63JRTbb0bvgUOPOyLnnXK1YEyl73EBZWWYqN0vI7S+yVoH8TE0g+s0607Rrz+oco02c36HzbiXpc3IxzKeAKjtgNj//Z');
                          " /> </span></a>
              </div>
              <div class="d-flex flex-column justify-content-between col-sm-9 col-7">
                <div>
                  <h4 class="small-head mb-2">
                    <a
                      href="/cricket-news/it-is-very-easy-for-people-to-overcomplicate-t20-cricket-it-is-a-simple-game-mason-crane/">Mason
                      Crane remarks ahead of South Coast Derby</a>
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
                              " /> </span></span>2 Jun 2023</span><span class="d-flex align-items-center"><span
                      class="style_icon__Ukkjh d-block"><span style="
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
                              " /> </span></span>2
                    <!-- -->
                    <!-- -->Min
                  </span>
                </div>
              </div>
            </div>
          </article>
          <article class="style_article__IayJx style_articleList__HOi_f py-0">
            <h4 id="647877eda191afaf305ccec9" class="small-head mb-0">
              <a class="d-flex align-items-center"
                href="/cricket-news/t20-blast-2023-josh-cobbs-stunning-catch-sends-rob-yates-packing/"><svg width="20"
                  height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3.66667 2H15.3333C16.25 2 17 2.75 17 3.66667V12L12 17H3.66667C2.75 17 2 16.25 2 15.3333V3.66667C2 2.75 2.75 2 3.66667 2ZM15.3333 11.1667V3.66667H3.66667V15.3333H11.1667V11.1667H15.3333ZM9.5 11.1667H5.33333V9.5H9.5V11.1667ZM5.33333 7.83333H13.6667V6.16667H5.33333V7.83333Z"
                    fill="#757A82"></path>
                </svg><span class="style_textTruncate__R9wLD">Cobb completes stunning catch of Yates during T20
                  Blast</span></a>
            </h4>
            <h4 id="6478490c23632738d7b6195f" class="small-head mb-0">
              <a class="d-flex align-items-center"
                href="/cricket-news/t20-blast-hampshire-skipper-james-vince-surpasses-luke-wright-to-become-highest-run-scorer-in-competitions-history/"><svg
                  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3.66667 2H15.3333C16.25 2 17 2.75 17 3.66667V12L12 17H3.66667C2.75 17 2 16.25 2 15.3333V3.66667C2 2.75 2.75 2 3.66667 2ZM15.3333 11.1667V3.66667H3.66667V15.3333H11.1667V11.1667H15.3333ZM9.5 11.1667H5.33333V9.5H9.5V11.1667ZM5.33333 7.83333H13.6667V6.16667H5.33333V7.83333Z"
                    fill="#757A82"></path>
                </svg><span class="style_textTruncate__R9wLD">T20 Blast: Vince surpasses Wright to lead run scoring
                  chart</span></a>
            </h4>
            <h4 id="647433e83eb44cee8ad397bd" class="small-head mb-0">
              <a class="d-flex align-items-center"
                href="/cricket-news/greek-australian-cricketer-peter-hatzoglou-signs-short-term-deal-with-glamorgan/"><svg
                  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3.66667 2H15.3333C16.25 2 17 2.75 17 3.66667V12L12 17H3.66667C2.75 17 2 16.25 2 15.3333V3.66667C2 2.75 2.75 2 3.66667 2ZM15.3333 11.1667V3.66667H3.66667V15.3333H11.1667V11.1667H15.3333ZM9.5 11.1667H5.33333V9.5H9.5V11.1667ZM5.33333 7.83333H13.6667V6.16667H5.33333V7.83333Z"
                    fill="#757A82"></path>
                </svg><span class="style_textTruncate__R9wLD">Peter Hatzoglou signs short-term deal with
                  Glamorgan</span></a>
            </h4>
          </article>
          <a class="theme-btn full-btn btn btn-primary" href="/t20/t20-blast/">More from
            <!-- -->
            <!-- -->T20 Blast 2023
            <!-- -->
            &gt;
          </a>
        </section>
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
              <div class="nav-item">
                <a role="button" class="false nav-link nav-link" tabindex="0">ALR</a>
              </div>
            </div>
            <div class="table-item_itemCard__qI76x">
              <div class="table-item_item__nbsco table-item_head___plQ3 d-flex align-items-center">
                <p class="mb-0">Rank</p>
                <p class="mb-0 flex-grow-1">Team</p>
                <p class="mb-0">Rating</p>
              </div>
              <div class="table-item_item__nbsco d-flex align-items-center">
                <p class="mb-0 flex-shrink-0">1.</p>
                <div class="undefined d-flex align-items-center flex-grow-1">
                  <div>
                    <p class="mb-0">India</p>
                  </div>
                </div>
                <p class="mb-0 flex-shrink-0">121</p>
              </div>
              <div class="table-item_item__nbsco d-flex align-items-center">
                <p class="mb-0 flex-shrink-0">2.</p>
                <div class="undefined d-flex align-items-center flex-grow-1">
                  <div>
                    <p class="mb-0">Australia</p>
                  </div>
                </div>
                <p class="mb-0 flex-shrink-0">116</p>
              </div>
              <div class="table-item_item__nbsco d-flex align-items-center">
                <p class="mb-0 flex-shrink-0">3.</p>
                <div class="undefined d-flex align-items-center flex-grow-1">
                  <div>
                    <p class="mb-0">England</p>
                  </div>
                </div>
                <p class="mb-0 flex-shrink-0">114</p>
              </div>
              <div class="table-item_item__nbsco d-flex align-items-center">
                <p class="mb-0 flex-shrink-0">4.</p>
                <div class="undefined d-flex align-items-center flex-grow-1">
                  <div>
                    <p class="mb-0">South Africa</p>
                  </div>
                </div>
                <p class="mb-0 flex-shrink-0">104</p>
              </div>
              <div class="table-item_item__nbsco d-flex align-items-center">
                <p class="mb-0 flex-shrink-0">5.</p>
                <div class="undefined d-flex align-items-center flex-grow-1">
                  <div>
                    <p class="mb-0">New Zealand</p>
                  </div>
                </div>
                <p class="mb-0 flex-shrink-0">100</p>
              </div>
              <p class="card-footer-note text-center">
                Last Updated On Jun 13, 2023, 21:30 IST
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
            <a class="cs-item common-box d-block overflow-hidden text-nowrap mb-2"
              href="/tests/world-test-championship/">ICC World Test Championship Final</a><a
              class="cs-item common-box d-block overflow-hidden text-nowrap mb-2" href="/t20/tnpl/">Tamil Nadu
              Premier League</a><a class="cs-item common-box d-block overflow-hidden text-nowrap mb-2"
              href="/ashes/">The Ashes</a><a class="cs-item common-box d-block overflow-hidden text-nowrap mb-2"
              href="/t20/t20-blast/">Vitality Blast</a><a
              class="cs-item common-box d-block overflow-hidden text-nowrap mb-2" href="/womens-super-series/">Super
              Series T20</a>
          </div>
        </section>
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
                        "></span><img alt="team" sizes="100vw" src="./images/country/country_flag.webp"
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
                        " /></span>
              </div>
              <span class="style_name__cp86h position-relative">Australia</span>
            </a><a
              class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
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
            </a><a
              class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
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
            </a><a
              class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
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
            </a><a
              class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
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
            </a><a
              class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
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
            </a><a
              class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
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
                        "></span><img alt="team" sizes="100vw" src="./images/country/country_flag.webp"
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
                        " /></span>
              </div>
              <span class="style_name__cp86h position-relative">Bangladesh</span>
            </a><a
              class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
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
                        "></span><img alt="team" sizes="100vw" src="./images/country/country_flag.webp"
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
                        " /></span>
              </div>
              <span class="style_name__cp86h position-relative">Afghanistan</span>
            </a><a
              class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
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
            </a><a
              class="style_item___vvSu style_itemLink__WJdkV common-box px-1 mb-2 position-relative overflow-hidden"
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