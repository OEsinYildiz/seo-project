<!doctype html>
<html class="no-js " lang="en">

@include('backend.layout.partials.head')

<body class="theme-blush">

@include('backend.layout.partials.preloader')

<!-- Overlay For Sidebars -->
<div class="overlay"></div>



@include('backend.layout.partials.right-iconbar')

@include('backend.layout.partials.left-sidebar')

@include('backend.layout.partials.right-sidebar')

@yield('content')


<!-- Jquery Core Js -->
<script src="{{asset('backend/js/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('backend/js/mainscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{asset('backend/js/vendorscripts.bundle.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@stack('CustomJs')
@stack('CustomCss')
</body>
</html>
