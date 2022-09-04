@extends('main')

@section('title', '')


@section('stylesheets')

    <!--DataTables [ OPTIONAL ]-->
    <link href="{{asset('assets/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}" rel="stylesheet">

@endsection


@section('scripts')

    <!--DataTables [ OPTIONAL ]-->
    <script src="{{asset('assets/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>

    <!--DataTables Sample [ SAMPLE ]-->
    <script src="{{asset('assets/js/demo/tables-datatables.js')}}"></script>
@endsection


@section('content')
    <div id="content-container">
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">@yield('title')</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
        @include('partials.breadcrumb')

        {{--        @include('partials._alert')--}}

        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div class="col-lg-12">
                <div class="row">

                    <div class="col-sm-6 col-lg-4" >
                        <!--Sparkline Area Chart-->
                        <div class="panel panel-colorful" style="background-color: #e41e2d;color:white;border-radius: 7px">
                            <div class="pad-all text-center">
                                <p class="text-lg text-semibold big-font">
                                    <i class="glyphicon glyphicon-user icon-fw"></i> Total Users
                                </p>
                                <p class="mar mt-2 bigger-font text-bold">
                                    503,658
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <!--Sparkline Line Chart-->
                        <div class="panel  panel-colorful" style="background-color: #00adef;color: white;border-radius: 7px">
                            <div class="pad-all text-center">
                                <p class="text-lg text-semibold big-font">
                                    <i class="glyphicon glyphicon-folder-open icon-fw"></i>Total Saccos
                                </p>
                                <p class="mar mt-2 bigger-font text-bold">
                                    300
                                </p>
                            </div>
                        </div>
                    </div>
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="panel  panel-colorful" style="background-color: darkred;color: white;border-radius: 10px;">
                                                <div class="pad-all text-center">
                                                    <p class="text-lg text-semibold big-font">
                                                        <i class="glyphicon glyphicon-comment icon-fw"></i> Total users
                                                    </p>
                                                    <p class="mar mt-2 bigger-font text-bold">

                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">@yield('title')</h3>
                        </div>
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!--End page content-->
    </div>
@endsection
