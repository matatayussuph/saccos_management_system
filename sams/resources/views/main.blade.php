<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saccos Management System@yield('title')</title>
    @include('partials._stylesheet-section')
</head>

<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg">
    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
        <div id="navbar-container" class="boxed">
            @include('partials.logo-section')
            @include('partials._top-nav')
        </div>
    </header>
    <!--===================================================-->
    <!--END NAVBAR-->

    <div class="boxed">
        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        @yield('content')
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->

        <!--MAIN NAVIGATION-->
        <!--===================================================-->
        <!--Menu-->
        <!--================================-->
        @include('partials.sidenav')
        <!--================================-->
        <!--End menu-->
        <!--===================================================-->
        <!--END MAIN NAVIGATION-->
    </div>

    <!-- FOOTER -->
    <!--===================================================-->
    @include('partials._footer-section')
    <!--===================================================-->
    <!-- END FOOTER -->


    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>
    <!--===================================================-->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->

</body>
@include('partials._script-section')

</html>
