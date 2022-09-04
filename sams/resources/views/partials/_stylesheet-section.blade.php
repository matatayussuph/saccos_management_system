<!--STYLESHEET-->
<!--=================================================-->

<!--Open Sans Font [ OPTIONAL ]-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

<!--Bootstrap Stylesheet [ REQUIRED ]-->
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">


<!--Nifty Stylesheet [ REQUIRED ]-->
<link href="{{asset('assets/css/nifty.min.css')}}" rel="stylesheet">


<!--Nifty Premium Icon [ DEMONSTRATION ]-->
<link href="{{asset('assets/css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">


<!--Demo [ DEMONSTRATION ]-->
<link href="{{asset('assets/css/demo/nifty-demo.min.css')}}" rel="stylesheet">

<!--Bootstrap Datepicker [ Required ]-->
<link href="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">

<style>
    @media (min-width:768px) {
        .show-xs {
            display:block !important;
        }
    }

    @media (min-width:769px) {
        .desktop-only {
            display:none !important;
        }
    }

    @media (max-width: 768px) {
        .desktop-only  {
            display:block !important;
        }
    }

    .big-font {
        font-size: 1.5em;
    }

    .bigger-font {
        font-size: 1.8em;
    }

    .mt-1 {
        margin-top: 8px;
    }
    .mt-2 {
        margin-top: 16px;
    }
    .mt-3 {
        margin-top: 24px;
    }
    .cls-content {
        padding-top: 20vh;
    }
    .btn-primary-basic, .btn-primary, .btn-primary:focus, .btn-primary.disabled:hover, .btn-primary:disabled:hover, .btn-hover-primary:hover, .btn-hover-primary:active, .btn-hover-primary.active, .btn.btn-active-primary:active, .btn.btn-active-primary.active, .dropdown.open>.btn.btn-active-primary, .btn-group.open .dropdown-toggle.btn.btn-active-primary {
        background-color: #F908FF;
        border-color: #F908FF !important;
        color: #fff;
    }
    .btn-primary:hover, .btn-primary:active, .btn-primary.active, .open>.dropdown-toggle.btn-primary {
        background-color: #F908FF;
        border-color: #F908FF !important;
        color: #fff;
    }
    #container:not(.mainnav-sm) #mainnav-menu-wrap>.nano>.nano-content {
        padding-top: 0;
    }
    #mainnav .list-header {
        margin-top: 0;
    }
    #mainnav {
        background-color: #000;
    }
    @media (min-width: 768px) {
        .navbar-header:before {
            background-color: #000;
        }
    }
    #mainnav-menu>.active-link>a, #mainnav-menu>.active-link>a:hover {
        background-color: #F908FF;
    }

    .page-header {
        color: #3f4244;
        text-transform: none;
    }
    .breadcrumb .active {
        color: #3f4244;
        text-transform: none;
    }

    .panel-info.panel-colorful {
        box-shadow: 0 1px 1px #413327;
    }

    .panel-info .panel-heading, .panel-info .panel-footer, .panel-info.panel-colorful {
        background-color: #F908FF;
        border-color: #F908FF;
        color: #fff;
    }

    body {
        font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
        font-size: 14px;
        /*color: #000000;*/
    }

    /*h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {*/
    /*color: #000000;*/
    /*}*/
</style>


@yield('stylesheets')
