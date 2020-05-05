<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@include('frontend.layout.partials.head')

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

@include('frontend.layout.partials.topbar')

@include('frontend.layout.partials.header')

@yield('content')

@include('frontend.blog.layout.partials.footer')

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

@include('frontend.blog.layout.partials.javascript')

@stack('CustomJs')
@stack('CustomCss')
</body>
</html>
