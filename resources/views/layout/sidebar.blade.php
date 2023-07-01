<div role="dialog" aria-modal="true" class="style_sidemenu__zyjXz offcanvas offcanvas-end hide" tabindex="-1"
    style="visibility: visible;"><button type="button" class="style_closeMenu__liSQB btn-close btn btn-link"
      onclick="toggleSideMenu()"></button>
    <div class="style_menuHead__1alzZ d-flex d-md-none ps-3">
      <div class="undefined common-dropdown dropdown"><button id="language" aria-expanded="false" type="button"
          class="dropdown-toggle btn btn-link">English</button></div>
    </div>
    <div class="style_menuBody__ZbUkG d-flex flex-column flex-md-row pt-3 pt-md-0 offcanvas-body">
      <div class="hd-search-ot d-md-none">
        <div class="s-active undefined undefined p-0 searchItem"><button type="button"
            class="searchBtn border-0 btn btn-link"><span
              style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                alt="logo" sizes="100vw"
                srcset="{{asset('_next/static/media/search-icon.fe541e20.svg')}} 450w, {{asset('_next/static/media/search-icon.fe541e20.svg')}} 992w, {{asset('_next/static/media/search-icon.fe541e20.svg')}} 1200w, {{asset('_next/static/media/search-icon.fe541e20.svg')}} 1900w"
                src="{{ asset('_next/static/media/search-icon.fe541e20.svg') }}" decoding="async" data-nimg="responsive"
                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></button>
          <div class="s-overlay"></div>
          <div class="s-active searchBox align-items-center">
            <form autosuggestion="off" autocomplete="off" class="">
              <div class="hd-searchGroup position-relative"><input autocomplete="off" required=""
                  placeholder="Search for Player, Series, Team, News or Video." type="text" id="search"
                  class="hs-searchControl style_formControl__aLMXT form-control">
                <div class="icon hs-searchIcon searchBtn"><span
                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                      style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                      alt="logo" src="{{ asset('_next/static/media/search-black-icon.b9c747f1.svg') }}" decoding="async"
                      data-nimg="responsive" sizes="100vw"
                      srcset="{{ asset('_next/static/media/search-black-icon.b9c747f1.svg') }} 450w, {{ asset('_next/static/media/search-black-icon.b9c747f1.svg') }} 992w, {{ asset('_next/static/media/search-black-icon.b9c747f1.svg') }} 1200w, {{ asset('_next/static/media/search-black-icon.b9c747f1.svg') }} 1900w"
                      style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span>
                </div><button type="submit"
                  class="icon hs-searchBtn theme-btn small-btn btn btn-primary">Search</button>
              </div>
              <div class="searchSuggestion  common-box px-0">
                <div class="itemList dropdown"></div>
              </div>
            </form><button type="button" class="closeBtn d-none d-md-inline-block btn btn-link"></button>
          </div>
        </div>
      </div>
      <div class="style_tabSection__WdgKK">
        <div class="style_navTab__cSMCa equal-width-nav nav nav-pills" role="tablist">
          <div class="nav-item"><a role="tab" data-rr-ui-event-key="first" id="left-tabs-example-tab-first"
              aria-controls="left-tabs-example-tabpane-first" aria-selected="true" class="nav-link active">Topics</a>
          </div>
        </div>
        <div class="tab-content">
          <div id="left-tabs-example-tabpane-first" aria-labelledby="left-tabs-example-tab-first"
            class="tab-pane active">
            <h4 class="text-uppercase mb-3">Topics</h4>
            <div class="accordion">
              <div onclick="accordionClickHandler(this)" class="accordion-item">
                <h2 class="style_accordionHeader__Xv8io accordion-header">
                  <button type="button" aria-expanded="false" class="accordion-button collapsed"><span
                      class="style_icon__PFlXL icon d-flex align-items-center justify-content-center"><span
                        style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                          style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                          sizes="100vw" src="{{ asset('_next/static/media/medal.webp') }}" decoding="async" data-nimg="responsive"
                          style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>Featured
                    Section</button>
                </h2>
                <div class="accordion-collapse collapse">
                  <div class="accordion-body"><button type="button" class="icon-btn btn btn-link"><a
                        href="/t20/tnpl/">TNPL 2023</a></button><button type="button" class="icon-btn btn btn-link"><a
                        href="/t20/lpl-auction/">LPL Auction 2023</a></button><button type="button"
                      class="icon-btn btn btn-link"><a href="/t20/t20-blast/">T20 Blast</a></button><button
                      type="button" class="icon-btn btn btn-link"><a href="/ashes/">The Ashes 2023</a></button><button
                      type="button" class="icon-btn btn btn-link"><a href="/cwc-cricket-world-cup/">ICC Cricket World
                        Cup 2023</a></button><button type="button" class="icon-btn btn btn-link"><a
                        href="/tests/world-test-championship/">WTC Final 2023</a></button><button type="button"
                      class="icon-btn btn btn-link"><a href="/t20/ipl-indian-premier-league/">IPL</a></button></div>
                </div>
              </div>
            </div>
            <div class="accordion">
              <div onclick="accordionClickHandler(this)" class="accordion-item">
                <h2 class="style_accordionHeader__Xv8io accordion-header"><button type="button" aria-expanded="false"
                    class="accordion-button collapsed"><span
                      class="style_icon__PFlXL icon d-flex align-items-center justify-content-center"><span
                        style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                          style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                          sizes="100vw" src="{{ asset('_next/static/media/cricket_series.webp') }}" decoding="async"
                          data-nimg="responsive"
                          style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>Current
                    Series</button></h2>
                <div class="accordion-collapse collapse">
                  <div class="accordion-body"><button type="button" class="icon-btn btn btn-link"><a
                        href="/tests/world-test-championship/">WTC Final 2023</a></button><button type="button"
                      class="icon-btn btn btn-link"><a href="/t20/t20-blast/">T20 Blast</a></button><button
                      type="button" class="icon-btn btn btn-link"><a href="/ashes/">The Ashes 2023</a></button><button
                      type="button" class="icon-btn btn btn-link"><a href="/t20/tnpl/">TNPL 2023</a></button><button
                      type="button" class="icon-btn btn btn-link"><a href="/t20/saurashtra-premier-league/">SPL
                        2023</a></button><button type="button" class="icon-btn btn btn-link"><a
                        href="/world-cup-qualifiers/">World Cup Qualifiers 2023</a></button><button type="button"
                      class="icon-btn btn btn-link"><a href="/castle-lite-series/">Castle Lite Series
                        2023</a></button><button type="button" class="icon-btn btn btn-link"><a
                        href="/t20/ireland-inter-provincial-t20/">Ireland Inter Provincial T20</a></button><button
                      type="button" class="icon-btn btn btn-link"><a href="/japan-cricket-league/">Japan Cricket League
                        2023</a></button><button type="button" class="icon-btn btn btn-link"><a
                        href="/kcc-t10-summer-challenge-league/">KCC T10 Summer Challenge League
                        2023</a></button><button type="button" class="icon-btn btn btn-link"><a
                        href="/kcc-t10-summer-elite-league/">KCC T10 Summer Elite League 2023</a></button></div>
                </div>
              </div>
            </div>
            <div class="accordion">
              <div onclick="accordionClickHandler(this)" class="accordion-item">
                <h2 class="style_accordionHeader__Xv8io accordion-header"><button type="button" aria-expanded="false"
                    class="accordion-button collapsed"><span
                      class="style_icon__PFlXL icon d-flex align-items-center justify-content-center"><span
                        style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                          style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                          sizes="100vw" src="{{ asset('_next/static/media/fantasy.webp') }}" decoding="async" data-nimg="responsive"
                          style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>Cricket
                    Fantasy Tips</button></h2>
                <div class="accordion-collapse collapse">
                  <div class="accordion-body"><button type="button" class="icon-btn btn btn-link"><a
                        href="/fantasy-cricket-tips/">Fantasy Cricket Tips</a></button><button type="button"
                      class="icon-btn btn btn-link"><a href="/dream11-fantasy-tips/">Dream11 Fantasy
                        Tips</a></button><button type="button" class="icon-btn btn btn-link"><a
                        href="/11wickets-fantasy-tips/">11Wickets Fantasy Tips</a></button><button type="button"
                      class="icon-btn btn btn-link"><a href="/gamezy-fantasy-cricket-tips/">Gamezy Fantasy
                        Tips</a></button><button type="button" class="icon-btn btn btn-link"><a
                        href="/myteam11-fantasy-tips/">MyTeam11 Fantasy Tips</a></button><button type="button"
                      class="icon-btn btn btn-link"><a href="/mobile-premier-league-fantasy-tips/">MPL Fantasy
                        Tips</a></button><button type="button" class="icon-btn btn btn-link"><a
                        href="/fan2play-fantasy-tips/">Fan2Play Fantasy Tips</a></button></div>
                </div>
              </div>
            </div>
            <div class="accordion">
              <div onclick="accordionClickHandler(this)" class="accordion-item">
                <h2 class="style_accordionHeader__Xv8io accordion-header"><button type="button" aria-expanded="false"
                    class="accordion-button collapsed"><span
                      class="style_icon__PFlXL icon d-flex align-items-center justify-content-center"><span
                        style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                          style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                          sizes="100vw" src="{{ asset('_next/static/media/fantasy.webp') }}" decoding="async" data-nimg="responsive"
                          style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>Cricket
                    Stats</button></h2>
                <div class="accordion-collapse collapse">
                  <div class="accordion-body"><button type="button" class="icon-btn btn btn-link"><a
                        href="/cricket-stats-mania/">Stats Mania</a></button><button type="button"
                      class="icon-btn btn btn-link"><a href="/t20/t20-blast/stats/">T20 Blast 2023
                        Stats</a></button><button type="button" class="icon-btn btn btn-link"><a
                        href="/t20/tnpl/stats/">TNPL 2023 Stats</a></button></div>
                </div>
              </div>
            </div>
            <div class="accordion">
              <div onclick="accordionClickHandler(this)" class="accordion-item">
                <h2 class="style_accordionHeader__Xv8io accordion-header"><button type="button" aria-expanded="false"
                    class="accordion-button collapsed"><span
                      class="style_icon__PFlXL icon d-flex align-items-center justify-content-center"><span
                        style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                          style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                          sizes="100vw" src="{{ asset('_next/static/media/fantasy.webp') }}" decoding="async" data-nimg="responsive"
                          style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>IPL
                    Teams</button></h2>
                <div class="accordion-collapse collapse">
                  <div class="accordion-body"><button type="button" class="icon-btn btn btn-link"><a
                        href="/t20/ipl-indian-premier-league/csk-chennai-super-kings/">CSK</a></button><button
                      type="button" class="icon-btn btn btn-link"><a
                        href="/t20/ipl-indian-premier-league/mi-mumbai-indians/">MI</a></button><button type="button"
                      class="icon-btn btn btn-link"><a
                        href="/t20/ipl-indian-premier-league/rcb-royal-challengers-bangalore/">RCB</a></button><button
                      type="button" class="icon-btn btn btn-link"><a
                        href="/t20/ipl-indian-premier-league/gujarat-titans/">GT</a></button><button type="button"
                      class="icon-btn btn btn-link"><a
                        href="/t20/ipl-indian-premier-league/lucknow-super-giants/">LSG</a></button><button
                      type="button" class="icon-btn btn btn-link"><a
                        href="/t20/ipl-indian-premier-league/rr-rajasthan-royals/">RR</a></button><button type="button"
                      class="icon-btn btn btn-link"><a
                        href="/t20/ipl-indian-premier-league/kkr-kolkata-knight-riders/">KKR</a></button><button
                      type="button" class="icon-btn btn btn-link"><a
                        href="/t20/ipl-indian-premier-league/dc-delhi-capitals/">DC</a></button><button type="button"
                      class="icon-btn btn btn-link"><a
                        href="/t20/ipl-indian-premier-league/punjab-kings/">PBKS</a></button><button type="button"
                      class="icon-btn btn btn-link"><a
                        href="/t20/ipl-indian-premier-league/srh-sunrisers-hyderabad/">SRH</a></button></div>
                </div>
              </div>
            </div>
            <div class="btn-list"><button type="button" class="icon-btn btn btn-link"><span
                  class="style_icon__PFlXL icon d-flex align-items-center justify-content-start"><a
                    href="/cricket-interviews/">Interviews</a></span></button></div>
            <div class="btn-list"><button type="button" class="icon-btn btn btn-link"><span
                  class="style_icon__PFlXL icon d-flex align-items-center justify-content-start"><a
                    href="/twitter-reactions-cricket/">Twitter Reactions</a></span></button></div>
            <div class="btn-list"><button type="button" class="icon-btn btn btn-link"><span
                  class="style_icon__PFlXL icon d-flex align-items-center justify-content-start"><a
                    href="/cricket-appeal/">Cricket Appeal</a></span></button></div>
            <div class="btn-list"><button type="button" class="icon-btn btn btn-link"><span
                  class="style_icon__PFlXL icon d-flex align-items-center justify-content-start"><a
                    href="/social-tracker-cricket/">Social Tracker</a></span></button></div>
          </div>
          <div id="left-tabs-example-tabpane-second" aria-labelledby="left-tabs-example-tab-second" class="tab-pane">
            <h4 class="text-uppercase mb-3">Favorite</h4>
            <div class="btn-list"></div>
          </div>
        </div>
      </div>
      <div class="style_infoSection__RRZvL">
        <div class="style_item__mafy9 style_moreLink__uLZTA">
          <h4 class="text-uppercase mb-3">More Links</h4>
          <ul class="mb-0">
            <li><a href="/about-us/">About Us</a></li>
            <li><a href="/contact-us/">Contact Us</a></li>
            <li><a href="/careers/">Careers</a></li>
            <li><a href="/advertise-with-us/">Advertise with Us</a></li>
            <li><a href="/privacy-policy/">Privacy Policy</a></li>
            <li><a href="/">GDPR Compliance</a></li>
            <li><a href="/">Affiliate</a></li>
          </ul>
        </div>
        <div class="style_item__mafy9">
          <h4 class="text-uppercase mb-3"># Follow Us</h4>
          <ul class="style_socialMenu__05Jef d-flex text-uppercase align-items-center mb-0">
            <li><a href="https://www.facebook.com/crictracker/" class="d-block" target="_blank" rel="noreferrer"><svg
                  width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <g id="fackbook-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="facebook" fill="#F2F4F7">
                      <path
                        d="M15.8861593,0 C24.6598428,0 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 0,24.6598428 0,15.8861593 C0,7.11247578 7.11247578,0 15.8861593,0 Z M16.823269,8.528 C13.8677161,8.528 13.1961504,10.5692278 13.1961504,11.872781 L13.1961504,11.872781 L13.1961504,13.6956571 L11.4863009,13.6956571 L11.4863009,16.5125908 L13.1961504,16.5125908 L13.1961504,24.528 L16.7912671,24.528 L16.7912671,16.5125908 L19.1641485,16.5125908 L19.4782411,13.6982799 L16.7915042,13.6982799 L16.7915042,12.0404244 C16.7915042,11.4185919 17.2371602,11.272587 17.5540975,11.272587 L17.5540975,11.272587 L19.4863009,11.272587 L19.4863009,8.5382728 Z"
                        id="Combined-Shape"></path>
                    </g>
                  </g>
                </svg></a></li>
            <li><a href="https://twitter.com/Cricketracker" class="d-block" target="_blank" rel="noreferrer"><svg
                  width="32px" height="32px" fill="red" viewBox="0 0 32 32" version="1.1"
                  xmlns="http://www.w3.org/2000/svg">
                  <title>twitter-icon</title>
                  <g id="twitter-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path
                      d="M15.8861593,0 C24.6598428,0 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 0,24.6598428 0,15.8861593 C0,7.11247578 7.11247578,0 15.8861593,0 Z M19.0769607,9.6 C17.2644206,9.6 15.7943634,11.0471242 15.7943634,12.8313885 C15.7943634,13.0846653 15.8234952,13.3311946 15.8798005,13.5678434 C13.1516876,13.4331319 10.7327642,12.1467457 9.11362037,10.19114 C8.83111478,10.6682933 8.66905352,11.2237673 8.66905352,11.8158712 C8.66905352,12.9366996 9.24899783,13.9261903 10.1293185,14.505522 C9.59148077,14.4888939 9.08497812,14.343579 8.64261452,14.1009056 L8.64236972,14.1418733 L8.64236972,14.1418733 C8.64236972,15.7075628 9.7743505,17.0134689 11.2757428,17.3101233 C11.0005814,17.3843472 10.7099972,17.423628 10.4110897,17.423628 C10.1990881,17.423628 9.99369626,17.4036261 9.79344533,17.3660322 C10.2110836,18.6495265 11.4231158,19.5838313 12.8598794,19.6100988 C11.736222,20.4769274 10.3210013,20.9933616 8.78264329,20.9933616 C8.51825331,20.9933616 8.25631139,20.9781794 8,20.9480561 C9.45194161,21.8652509 11.1778206,22.4 13.0314881,22.4 C19.0693718,22.4 22.3713088,17.476163 22.3713088,13.2056406 C22.3713088,13.0656274 22.3681263,12.9260962 22.3617614,12.7877699 C23.0036415,12.3323054 23.5600845,11.7633362 24,11.1153234 C23.4114875,11.372215 22.7784204,11.5459663 22.1145078,11.623564 C22.7923743,11.2237673 23.3125861,10.5911776 23.558126,9.83616681 C22.9238349,10.2065631 22.2209982,10.4752631 21.4736069,10.620096 C20.8748126,9.99232608 20.0216653,9.6 19.0769607,9.6 Z"
                      id="Combined-Shape" fill="#F2F4F7"></path>
                  </g>
                </svg></a></li>
            <li><a href="https://www.instagram.com/crictracker/" class="d-block" target="_blank" rel="noreferrer"><svg
                  width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <g id="instagram-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="instagram" fill="#F2F4F7" fill-rule="nonzero">
                      <path
                        d="M15.9569778,3.2471803e-13 C24.7694222,3.2471803e-13 31.9139556,7.14453333 31.9139556,15.9569778 C31.9139556,24.7694222 24.7694222,31.9139556 15.9569778,31.9139556 C7.14453333,31.9139556 -5.32907052e-15,24.7694222 -5.32907052e-15,15.9569778 C-5.32907052e-15,7.14453333 7.14453333,3.2471803e-13 15.9569778,3.2471803e-13 Z M20.7128889,6.40142222 L11.2010667,6.40142222 C8.60301261,6.40142222 6.47619304,8.45802412 6.36312759,11.0287083 L6.3584,11.2440889 L6.3584,20.7559111 C6.3584,23.3543111 8.4150019,25.4808034 10.985686,25.5938509 L11.2010667,25.5985778 L20.7128889,25.5985778 C23.3112889,25.5985778 25.4377812,23.5423125 25.5508287,20.971319 L25.5555556,20.7559111 L25.5555556,11.2440889 C25.5555556,8.57386667 23.3834667,6.40142222 20.7128889,6.40142222 Z M11.2010667,8.49066667 L20.7128889,8.49066667 C22.175223,8.49066667 23.3747816,9.63606475 23.4616319,11.0766106 L23.4666667,11.2440889 L23.4666667,20.7559111 C23.4666667,22.2182453 22.3209389,23.4178039 20.8803686,23.5046541 L20.7128889,23.5096889 L11.2010667,23.5096889 C9.7390749,23.5096889 8.53952897,22.3639611 8.4526792,20.9233908 L8.44764444,20.7559111 L8.44764444,11.2440889 C8.44764444,9.78209712 9.59304252,8.5825512 11.0335884,8.49570142 L11.2010667,8.49066667 L20.7128889,8.49066667 Z M15.9569778,11.056 C13.2309333,11.056 11.0129778,13.2739556 11.0129778,16 C11.0129778,18.7264 13.2309333,20.9443556 15.9569778,20.9443556 C18.6830222,20.9443556 20.9013333,18.7260444 20.9013333,16 C20.9013333,13.2739556 18.6833778,11.056 15.9569778,11.056 Z M15.9569778,13.1452444 C17.5310222,13.1452444 18.8117333,14.4263111 18.8117333,15.9996444 C18.8117333,17.5740444 17.5313778,18.8551111 15.9569778,18.8551111 C14.3832889,18.8551111 13.1018667,17.5740444 13.1018667,15.9996444 C13.1018667,14.4259556 14.3832889,13.1452444 15.9569778,13.1452444 Z M21.0602667,9.73866667 C20.4149333,9.73866667 19.8901333,10.2634667 19.8901333,10.9084444 C19.8901333,11.5534222 20.4149333,12.0782222 21.0602667,12.0782222 C21.7052444,12.0782222 22.2300444,11.5534222 22.2300444,10.9084444 C22.2300444,10.2634667 21.7052444,9.73866667 21.0602667,9.73866667 Z"
                        id="Combined-Shape"></path>
                    </g>
                  </g>
                </svg></a></li>
            <li><a href="https://www.linkedin.com/company/crictracker/ " class="d-block" target="_blank"
                rel="noreferrer"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1"
                  xmlns="http://www.w3.org/2000/svg">
                  <g id="linkedin-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Google" fill="#F2F4F7" fill-rule="nonzero">
                      <path
                        d="M15.8861593,-5.14077669e-12 C24.6598428,-5.14077669e-12 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 1.58060232e-11,24.6598428 1.58060232e-11,15.8861593 C1.58060232e-11,7.11247578 7.11247578,-5.14077669e-12 15.8861593,-5.14077669e-12 Z M20.026,13.0493333 C18.4126667,13.0493333 17.33,13.9346667 16.888,14.774 L16.888,14.774 L16.8413333,14.774 L16.8413333,13.3173333 L13.6593333,13.3173333 L13.6593333,23.9993333 L16.9726667,23.9993333 L16.9726667,18.71 L16.9737314,18.561021 C16.9933869,17.2228605 17.2982619,15.9706667 18.9613333,15.9706667 C20.6606667,15.9706667 20.686,17.56 20.686,18.7993333 L20.686,18.7993333 L20.686,24 L24,23.9993333 L24,18.1313333 L23.9989204,17.927428 C23.9690193,15.1566187 23.3020952,13.0493333 20.026,13.0493333 Z M11.5813333,13.318 L8.264,13.318 L8.264,24 L11.5813333,24 L11.5813333,13.318 Z M9.92133333,8 C8.86066667,8 8,8.86066667 8,9.92133333 C8,10.982 8.86066667,11.8606667 9.92133333,11.8606667 C10.982,11.8606667 11.8426667,10.982 11.8426667,9.92133333 C11.842,8.86066667 10.9813333,8 9.92133333,8 Z"
                        id="Combined-Shape"></path>
                    </g>
                  </g>
                </svg></a></li>
            <li><a href="https://www.youtube.com/c/Crictracker" class="d-block" target="_blank" rel="noreferrer"><svg
                  width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <g id="youtube-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path
                      d="M15.8861593,-3.93285404e-12 C24.6598428,-3.93285404e-12 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 2.44781972e-12,24.6598428 2.44781972e-12,15.8861593 C2.44781972e-12,7.11247578 7.11247578,-3.93285404e-12 15.8861593,-3.93285404e-12 Z M16.8277862,9.60025513 L16.0028153,9.60014684 C13.8036103,9.59890281 11.5942314,9.60014684 9.41174073,9.83846686 C8.49063629,9.93923304 7.72559273,10.6147397 7.51012333,11.5303435 C7.23752648,12.6893817 7.20451053,13.9427817 7.20053905,15.1498745 L7.2,15.6000889 C7.2,16.9425717 7.2,18.3657385 7.50667146,19.6694788 C7.72177751,20.5849049 8.48700274,21.2604116 9.40865222,21.3613555 C11.3181726,21.570041 13.2482793,21.5970791 15.1742652,21.5997446 L15.9993635,21.5998532 C18.1989318,21.6010972 20.407584,21.5998532 22.5897113,21.3613555 C23.5108158,21.2605893 24.276586,20.5850826 24.4920554,19.6694788 C24.7648138,18.5104406 24.7959821,17.2571811 24.799541,16.0502443 L24.7999993,15.6000889 C24.7999993,14.2576061 24.8025421,12.8342615 24.4958707,11.5303435 C24.2804013,10.6147397 23.5148127,9.93923304 22.5931632,9.83846686 C20.6834839,9.62993684 18.7534964,9.60291813 16.8277862,9.60025513 Z M13.7287592,12.5787028 C15.5940412,13.5307389 17.446969,14.4763771 19.32406,15.4342779 L13.7287592,18.2722588 L13.7287592,18.2722588 L13.7287592,12.5787028 L13.7287592,12.5787028 Z"
                      id="Combined-Shape" fill="#F2F4F7"></path>
                  </g>
                </svg></a></li>
            <li><a href="https://bit.ly/3n0jQL6" class="d-block" target="_blank" rel="noreferrer"><svg width="32px"
                  height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <g id="telegram-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Google-Copy-2" fill="#F2F4F7">
                      <path
                        d="M15.8861593,0 C24.6598428,0 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 0,24.6598428 0,15.8861593 C0,7.11247578 7.11247578,0 15.8861593,0 Z M21.8035369,9.07980371 L5.83565346,15.1930222 C4.74587729,15.61602 4.76237769,16.2235169 5.65039901,16.4987655 L9.73274705,17.768509 L19.2152248,11.8352895 C19.6614855,11.539791 20.0672452,11.7032902 19.7334872,11.9987887 L12.063053,18.8860032 L11.7652959,23.0739816 C12.1913061,23.0739816 12.3758105,22.8909826 12.5970658,22.6712337 L14.5943638,20.7624935 L18.7329632,23.7932279 C19.4919814,24.2162258 20.0267443,23.9934769 20.2314992,23.0949815 L22.9480644,10.3660471 L22.9488144,10.3652971 C23.1895702,9.24330287 22.5430547,8.80455513 21.8035369,9.07980371 Z"
                        id="Combined-Shape"></path>
                    </g>
                  </g>
                </svg></a></li>
          </ul>
        </div>
        <div class="style_item__mafy9">
          <h4 class="text-uppercase mb-3">Other Sports</h4>
          <div class="style_otherLogoContainer__7_Kvs d-flex flex-column">
            <div class="style_otherLogo___JFVs"><a target="_blank" href="https://www.sports.info/"><span
                  style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                    style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 20.6897% 0px 0px;"></span><img
                    alt="logo" sizes="100vw" src="{{ asset('_next/static/media/sportsinfo.616260a7.svg') }}" decoding="async"
                    data-nimg="responsive"
                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></a>
            </div>
            <div class="style_crictrackerLogo__QP1wx"><a target="_blank" href="https://hindi.crictracker.com/"><span
                  style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                    style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 13.5294% 0px 0px;"></span><img
                    alt="logo" sizes="100vw" src="{{ asset('_next/static/media/crictracker-logo-bangla.webp') }}" decoding="async"
                    data-nimg="responsive"
                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span></a>
            </div>
            <div class="style_crictrackerLogo__QP1wx"><a target="_blank" href="https://bengali.crictracker.com/"><span
                  style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                    style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 11.33% 0px 0px;"></span><img
                    alt="logo" sizes="100vw" src="{{ asset('_next/static/media/crictracker-logo-hindi.webp') }}" decoding="async"
                    data-nimg="responsive"
                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  