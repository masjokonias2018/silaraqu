<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.header')
  @yield('style')
</head>
<body class="sidebar-mini layout-fixed sidebar-mini-md sidebar-mini-xs layout-navbar-fixed layout-footer-fixed text-sm accent-lightblue sidebar-closed">
<div class="wrapper">
  @include('layouts.preloader')
  @include('layouts.navbar')
  @include('layouts.sidebar')
  <div class="content-wrapper">
    @include('layouts.main-header')
    <section class="content-header p-0 d-flex" style="height: 1500px; background: url('app/img/absen-4.jpg')">
      <div class="container-fluid pl-0 pr-0 pb-0 pt-4" style="background-color: rgba(255,255,255,0.7)">
      <div class="container-fluid">
        @yield('content')
      </div>
      </div>
    </section>
  </div>
  @include('layouts.footer')
</div>
@include('layouts.javascript')
@yield('script')
</body>
</html>