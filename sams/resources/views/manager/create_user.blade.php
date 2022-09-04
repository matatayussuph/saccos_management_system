@extends('main')

@section('title', 'Create New user/staff')

@section('stylesheets')
    <!--Bootstrap Datepicker [ Required ]-->
    <link href="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet"
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
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please kindly fill the form below</h3>
                        </div>
                        <!--Horizontal Form-->
                        <!--===================================================-->
                        {!! Form::open(['class'=>'form-horizontal','autocomplete'=>'off']) !!}
                        {{--                        {{Form::hidden('user_id', auth()->user()->id)}--}}
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('member_firstname') ? ' has-error' : '' }}">
                                        {{Form::label('member_firstname', 'First Name',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('member_firstname', null,['class'=>'form-control','placeholder'=>'Enter First Name'])}}
                                            @if ($errors->has('member_firstname'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('member_firstname') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('member_second_name') ? ' has-error' : '' }}">
                                        {{Form::label('member_second_name', 'First Name',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('member_second_name', null,['class'=>'form-control','placeholder'=>'Enter second Name'])}}
                                            @if ($errors->has('member_second_name'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('member_second_name') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('member_surname') ? ' has-error' : '' }}">
                                        {{Form::label('member_surname', 'Surname',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('member_surname', null,['class'=>'form-control','placeholder'=>'Enter Surname'])}}
                                            @if ($errors->has('member_surname'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('member_surname') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                        {{Form::label('role', 'id type',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            <select name="identity_type" class="form-control" id="region" required>
                                                <option value="">Select user role</option>
                                                {{--                                                @foreach(role as roles)--}}
                                                {{--                                                    <option value="{{role->id}}">{{role->name}}</option>--}}
                                                {{--                                                @endforeach--}}
                                            </select>

                                            @if ($errors->has('identity_type'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('identity_type') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('registration_number') ? ' has-error' : '' }}">
                                            {{Form::label('registration_number', 'identification number',['class'=>'col-sm-3 control-label'])}}
                                            <div class="col-sm-9">
                                                {{Form::text('registration_number', null,['class'=>'form-control','placeholder'=>'Enter registration number '])}}
                                                @if ($errors->has('registration_number'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('registration_number') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('next_of_keen') ? ' has-error' : '' }}">
                                            {{Form::label('profile_picture', 'profile picture',['class'=>'col-sm-3 control-label'])}}
                                            <div class="col-sm-9">
                                                {{Form::file('profile_picture', null,['class'=>'form-control','placeholder'=>'upload an image'])}}
                                                @if ($errors->has('profile_picture'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('profile_picture') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>            </div>
                                <div class="panel-footer text-right">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button class="btn btn-primary btn-block" style="background-color: #00adef!important;padding:7px 7px;border-radius: 5px;border:1px solid grey!important">
                                                <span style="font-weight: bolder">Submit Member</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            <!--===================================================-->
                            <!--End Horizontal Form-->
                        </div>

                    </div>
                </div>
            </div>
            <!--===================================================-->
            <!--End page content-->
            @endsection

            @section('scripts')
                <!--Bootstrap Timepicker [ OPTIONAL ]-->
                <script src="{{asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>

                <!--Bootstrap Datepicker [  ]-->
                <script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
                <!--Form Component [ SAMPLE ]-->
    {{--<script src="{{asset('assets/js/demo/form-component.js')}}"></script>--}}

@endsection
