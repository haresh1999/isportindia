<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>

    @include('admin.layout.css')
    @yield('css')
</head>

<body>
    <script>
        if (JSON.parse(localStorage.getItem('darkMode'))) {
        document.body.classList.add("dark");
        document.addEventListener("DOMContentLoaded", function() {
          document.querySelector('#switch-theme-input').checked = true;
        });
      }
    </script>
    <header class="d-flex align-items-center px-xl-7 px-5 py-5">
        @include('admin.layout.header')
    </header>

    <aside class="sidebar d-flex flex-column position-fixed flex-nowrap p-5">
        @include('admin.layout.sidebar')
    </aside>

    <aside class="help-sidebar d-flex flex-column position-fixed flex-nowrap py-5 px-3">
        @include('admin.layout.asidebar')
    </aside>

    <main>
        @yield('content')
    </main>

    @include('admin.layout.model')
    
    @include('admin.layout.script')
    
    @yield('script')
</body>

</html>