<div class="style_headerMenu__YNVcR xsmall-text d-flex text-nowrap">
  <ul class="d-flex mb-0 m-auto">
    <li><a class="style_navItem__o66ST  style_liveUpdate__l5Ln_ text-uppercase font-bold d-block" target="_self"
        href="/live-scores/?ref=hm">Live Scores</a></li>
    <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="/cricket-news/?ref=hm">Cricket News</a></li>
    <li>
      <div id="uniq648979ca4c330e9fa30f2961" class="dropdown"><button id="648979ca4c330e9fa30f2961"
          aria-expanded="false" type="button"
          class="style_navMore__r_nff text-uppercase font-bold d-block dropdown-toggle btn btn-link">TNPL</button>
        <div id="648979ca4c330e9fa30f2961" x-placement="bottom-start" aria-labelledby="648979ca4c330e9fa30f2961"
          class="style_dropdownMenu__lVfAZ dropdown-menu" data-popper-reference-hidden="false"
          data-popper-escaped="false" data-popper-placement="bottom-start" style="position: absolute; "><a
            class="dropdown-item" href="/t20/tnpl/?ref=hm">TNPL Home</a><a class="dropdown-item"
            href="/t20/tnpl/fixtures/?ref=hm">TNPL Schedule 2023</a><a class="dropdown-item"
            href="/t20/tnpl/standings/?ref=hm">TNPL Points Table 2023</a><a class="dropdown-item"
            href="/t20/tnpl/stats/?ref=hm">TNPL Stats 2023</a><a class="dropdown-item"
            href="/tnpl-winners-and-runners-list/?ref=hm">TNPL Winners List</a></div>
      </div>
    </li>
    <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="/t20/lpl-auction/?ref=hm">LPL Auction</a></li>
    <li><a class="d-none" href="/womens-emerging-teams-asia-cup/?ref=hm">W-Emerging Asia Cup Home</a><a class="d-none"
        href="/womens-emerging-teams-asia-cup/fixtures/?ref=hm">W-Emerging Asia Cup Schedule
        2023</a><a class="d-none" href="/womens-emerging-teams-asia-cup/standings/?ref=hm">W-Emerging Asia Cup
        Points Table 2023</a>
      <div id="uniq648979ca4c330e9fa30f2968" class="dropdown"><button id="648979ca4c330e9fa30f2968"
          aria-expanded="false" type="button"
          class="style_navMore__r_nff text-uppercase font-bold d-block dropdown-toggle btn btn-link">W-Emerging Asia
          Cup</button>
        <div id="648a9fda36430c395edf2678" x-placement="bottom-start" aria-labelledby="648a9fda36430c395edf2678"
          class="style_dropdownMenu__lVfAZ dropdown-menu " data-popper-reference-hidden="false"
          data-popper-escaped="false" data-popper-placement="bottom-start" style="position: absolute;"><a
            class="dropdown-item" href="/womens-emerging-teams-asia-cup/?ref=hm">W-Emerging Asia Cup Home</a><a
            class="dropdown-item" href="/womens-emerging-teams-asia-cup/fixtures/?ref=hm">W-Emerging Asia Cup
            Schedule 2023</a><a class="dropdown-item"
            href="/womens-emerging-teams-asia-cup/standings/?ref=hm">W-Emerging Asia Cup Points Table 2023</a></div>
      </div>
    </li>
    <li>
      <div id="uniq648979ca4c330e9fa30f296c" class="dropdown"><button id="648979ca4c330e9fa30f296c"
          aria-expanded="false" type="button"
          class="style_navMore__r_nff text-uppercase font-bold d-block dropdown-toggle btn btn-link">SPL</button>



        <div id="648a9fda36430c395edf2671" x-placement="bottom-start" class="style_dropdownMenu__lVfAZ dropdown-menu "
          data-popper-escaped="false" data-popper-placement="bottom-start" style="position: absolute; "><a
            class="dropdown-item" href="/t20/saurashtra-premier-league/?ref=hm">SPL Home</a><a class="dropdown-item"
            href="/t20/saurashtra-premier-league/standings/?ref=hm">SPL Schedule 2023</a></div>
      </div>
    </li>
    <li>
      <a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="/upcoming-cricket-schedule/?ref=hm">Blast</a>
    </li>
    <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="/upcoming-cricket-schedule/?ref=hm">MPL Home</a></li>
    <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="/fantasy-cricket-tips/?ref=hm">Fantasy Tips</a></li>
    <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="/cricket-match-predictions/?ref=hm">Predictions</a></li>
    <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="/upcoming-cricket-schedule/?ref=hm">Fixtures</a></li>
    <li>

      <div id="uniq648979ca4c330e9fa30f297d" class="dropdown"><button id="648979ca4c330e9fa30f297d"
          aria-expanded="false" type="button"
          class="style_navMore__r_nff text-uppercase font-bold d-block dropdown-toggle btn btn-link">☰</button>
        <div id="648a9fda36430c395edf2686" x-placement="bottom-end" aria-labelledby="648a9fda36430c395edf2686"
          class="style_dropdownMenu__lVfAZ dropdown-menu " data-popper-reference-hidden="false"
          data-popper-escaped="false" data-popper-placement="bottom-end"
          style="position: absolute; right : 0; left : unset; ">

        @foreach (getSeasons('seasons/2021/competitions') as $val)
          <a class="dropdown-item" href="{{ getSeasonsDetailsUrl($val['matches_url']) }}">{{$val['title']}}</a>
        @endforeach
      </div>
    </li>
  </ul>
</div>