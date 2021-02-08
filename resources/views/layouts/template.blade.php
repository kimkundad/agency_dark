<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Niro</title>

    @include('layouts.inc-style')
    @yield('stylesheet')

    
    
</head>

<body class="dark_version">
    <!-- preloader -->
    <div class="preloader-wrapper" id="preloader-wrapper">
        <div class="percentage-wrapper">
            <div class="loadbar-percent"></div>
            <div id="percent"></div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header part -->
    <div class="offcanvas_overlay"></div>

    @include('layouts.inc-header')

    @yield('content')

    <!-- footer part here -->

    @include('layouts.inc-footer')

    @include('layouts.inc-script')
    @yield('scripts')
    
</body>

</html>