<button class="close-sidebar js-close-sidebar position-absolute">
  <svg class="icon icon-close">
    <use xlink:href="#icon-close"></use>
  </svg>
</button><a class="logo flex-shrink-0" href="index.html"><img class="logo-dark"
    src="{{ asset('admin/img/logo-dark.png') }}"><img class="logo-light"
    src="{{ asset('admin/img/logo-light.png') }}"></a>
<div class="nav nav-pills flex-column mb-auto mt-8 menu">

  <div class="nav-item mb-2">
    <a class="nav-link d-flex align-items-center p-3 {{ Request::is('admin/dashboard') ? 'active' : '' }}"
      href="{{route('dashboard')}}">
      <svg class="icon icon-double-home icon-item">
        <use class="fill" href="#icon-home-fill"></use>
        <use class="stroke" href="#icon-home-stroke"></use>
      </svg>Home</a>
  </div>

  {{-- <div class="nav-item mb-2">
    <a class="nav-link d-flex align-items-center p-3 active" href="{{route('article')}}">
      <svg class="icon icon-schedule">
        <use xlink:href="#icon-schedule"></use>
      </svg> &nbsp;&nbsp; Articles</a>
  </div> --}}

  {{-- <div class="nav-item mb-2">
    <div class="nav-link d-flex align-items-center p-3 collapsed" data-bs-target="#sidebar-products-collapse"
      data-bs-toggle="collapse">
      <svg class="icon icon-double-diamond icon-item">
        <use class="fill" href="#icon-diamond-fill"></use>
        <use class="stroke" href="#icon-diamond-stroke"></use>
      </svg>Products
      <svg class="icon icon-cheveron ms-auto arrow">
        <use xlink:href="#icon-cheveron"></use>
      </svg>
    </div>
    <div class="collapse submenu" id="sidebar-products-collapse" data-bs-parent=".sidebar">
      <div class="wrapper"><a class="nav-link d-flex align-items-center p-3"
          href="products-dashboard.html">Dashboard</a><a class="nav-link d-flex align-items-center p-3"
          href="products-drafts.html">Drafts
          <div class="badge red ms-auto">2</div>
        </a><a class="nav-link d-flex align-items-center p-3" href="products-released.html">Released</a><a
          class="nav-link d-flex align-items-center p-3" href="products-comments.html">Comments</a><a
          class="nav-link d-flex align-items-center p-3" href="products-scheduled.html">Scheduled
          <div class="badge green ms-auto">8</div>
        </a></div>
    </div><a class="btn-plus" href="products-add.html">
      <svg class="icon icon-min-plus">
        <use xlink:href="#icon-min-plus"></use>
      </svg></a>
  </div> --}}
  <div class="nav-item mb-2">
    <div
      class="nav-link d-flex align-items-center p-3 collapsed collapsed {{ Request::is('admin/article','article/create','article/edit/*') ? 'active' : '' }}"
      data-bs-target="#sidebar-customers-collapse" data-bs-toggle="collapse">
      <svg class="icon icon-schedule">
        <use xlink:href="#icon-schedule"></use>
      </svg>&nbsp;&nbsp; Articles
      <svg class="icon icon-cheveron ms-auto arrow">
        <use xlink:href="#icon-cheveron"></use>
      </svg>
    </div>
    <div class="collapse submenu" id="sidebar-customers-collapse" data-bs-parent=".sidebar">
      <div class="wrapper">
        <a class="nav-link d-flex align-items-center p-3" href="{{route('article.create')}}">Create</a>
        <a class="nav-link d-flex align-items-center p-3" href="{{route('article')}}">List</a>
      </div>
    </div>
  </div>
  {{--<div class="nav-item mb-2"><a class="nav-link d-flex align-items-center p-3" href="shop.html">
      <svg class="icon icon-double-store icon-item">
        <use class="fill" href="#icon-store-fill"></use>
        <use class="stroke" href="#icon-store-stroke"></use>
      </svg>Shop</a></div>
  <div class="nav-item mb-2">
    <div class="nav-link d-flex align-items-center p-3 collapsed collapsed" data-bs-target="#sidebar-income-collapse"
      data-bs-toggle="collapse">
      <svg class="icon icon-double-pie-chart icon-item">
        <use class="fill" href="#icon-pie-chart-fill"></use>
        <use class="stroke" href="#icon-pie-chart-stroke"></use>
      </svg>Income
      <svg class="icon icon-cheveron ms-auto arrow">
        <use xlink:href="#icon-cheveron"></use>
      </svg>
    </div>
    <div class="collapse submenu" id="sidebar-income-collapse" data-bs-parent=".sidebar">
      <div class="wrapper"><a class="nav-link d-flex align-items-center p-3" href="income-earning.html">Earning</a><a
          class="nav-link d-flex align-items-center p-3" href="income-refounds.html">Refunds</a><a
          class="nav-link d-flex align-items-center p-3" href="income-payouts.html">Payouts</a><a
          class="nav-link d-flex align-items-center p-3" href="income-statements.html">Statements</a></div>
    </div>
  </div>
  <div class="nav-item mb-2"><a class="nav-link d-flex align-items-center p-3" href="promote.html">
      <svg class="icon icon-double-promote icon-item">
        <use class="fill" href="#icon-promote-fill"></use>
        <use class="stroke" href="#icon-promote-stroke"></use>
      </svg>Promote</a></div>
</div>
<button class="arrow-show js-show-sidebar p-3 mb-3 d-block d-xl-none">
  <svg class="icon icon-arrow">
    <use xlink:href="#icon-arrow"></use>
  </svg>
</button>--}}
<div class="border-top bottom pt-4">
  {{-- <div class="help-block js-help-sidebar d-flex align-items-center p-3 nav-link">
    <svg class="icon icon-help icon-item">
      <use xlink:href="#icon-help"></use>
    </svg>Help & getting started
    <div class="badge purple ms-auto d-none d-xl-block">8</div>
  </div> --}}
  <input id="switch-theme-input" type="checkbox">
  <label class="switch-theme js-theme-switch d-flex" for="switch-theme-input">
    <div class="mode-light d-flex flex-fill align-items-center justify-content-center">
      <div class="theme-icon">
        <svg class="icon icon-double-sun">
          <use class="fill" href="#icon-sun-fill"></use>
          <use class="stroke" href="#icon-sun-stroke"></use>
        </svg>
      </div>
      <div class="theme-text">Light</div>
    </div>
    <div class="mode-dark d-flex flex-fill align-items-center justify-content-center">
      <div class="theme-icon">
        <svg class="icon icon-double-moon">
          <use class="fill" href="#icon-moon-fill"></use>
          <use class="stroke" href="#icon-moon-stroke"></use>
        </svg>
      </div>
      <div class="theme-text">Dark</div>
    </div>
  </label>
</div>