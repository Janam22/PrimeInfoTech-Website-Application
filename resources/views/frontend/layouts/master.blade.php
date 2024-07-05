<!doctype html>
<html class="no-js" lang="en">
@include('frontend.inc.head')
@yield('css')
<body>
<div class="main-wrapper">
    @include('frontend.inc.header')
    @yield('content')
    @include('frontend.inc.footer')
</div>
@include('frontend.inc.foot')
@yield('script')
</html>
