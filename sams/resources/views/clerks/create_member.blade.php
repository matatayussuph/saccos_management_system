            @extends('main')

            @section('title', 'Create New member')

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
                                                <div class="form-group{{ $errors->has('member_dob') ? ' has-error' : '' }}">
                                                    {{Form::label('member_dob', 'Date of Birth',['class'=>'col-sm-3 control-label'])}}
                                                    <div class="col-sm-9" id="demo-dp-txtinput">
                                                        {{Form::text('member_dob', null,['class'=>'form-control','placeholder'=>'Enter Date of Birth'])}}
                                                        @if ($errors->has('member_dob'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('member_dob') }}</strong>
                                                </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('identity_type') ? ' has-error' : '' }}">
                                                    {{Form::label('identity_type', 'id type',['class'=>'col-sm-3 control-label'])}}
                                                    <div class="col-sm-9">
                                                        <select name="identity_type" class="form-control" id="region" required>
                                                            <option value="">Select Id type to use</option>
                                                            {{--                                                @foreach(identity_types as $identities)--}}
                                                            {{--                                                    <option value="{{$identities->id}}">{{$identities->name}}</option>--}}
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

                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                                    {{Form::label('gender', 'id type',['class'=>'col-sm-3 control-label'])}}
                                                    <div class="col-sm-9">
                                                        <select name="identity_type" class="form-control" id="region" required>
                                                            <option value="">Select gender</option>
                                                            {{--    @foreach($gender as $genders)--}}
                                                            {{--    <option value="{{$genders->id}}">{{$genders->name}}</option>--}}
                                                            {{--    @endforeach--}}
                                                        </select>

                                                        @if ($errors->has('gender'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('gender') }}</strong>
                                                </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('marital_status') ? ' has-error' : '' }}">
                                                    {{Form::label('marital_status', 'Marital status',['class'=>'col-sm-3 control-label'])}}
                                                    <div class="col-sm-9">
                                                        <select name="marital_status" class="form-control" id="region" required>
                                                            <option value="">Select Marital status</option>
                                                            {{--    @foreach($marital_status as $maritals)--}}
                                                            {{--    <option value="{{$maritals->id}}">{{$maritals->name}}</option>--}}
                                                            {{--    @endforeach--}}
                                                        </select>

                                                        @if ($errors->has('Marital_status'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('Marital_status') }}</strong>
                                                </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('member_type') ? ' has-error' : '' }}">
                                                    {{Form::label('member_type', 'member type',['class'=>'col-sm-3 control-label'])}}
                                                    <div class="col-sm-9">
                                                        <select name="member_type" class="form-control" id="region" required>
                                                            <option value="">Select Member type</option>
                                                            {{--    @foreach(member_type as $members)--}}
                                                            {{--    <option value="{{$members->id}}">{{$members->name}}</option>--}}
                                                            {{--    @endforeach--}}
                                                        </select>

                                                        @if ($errors->has('member_type'))
                                                            <span class="help-block">
                                                    <strong>{{ $errors->first('member_type') }}</strong>
                                                </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group{{ $errors->has('identity_number') ? ' has-error' : '' }}">
                                                        {{Form::label('identity_number', 'identification number',['class'=>'col-sm-3 control-label'])}}
                                                        <div class="col-sm-9">
                                                            {{Form::text('identity_number', null,['class'=>'form-control','placeholder'=>'Enter Id number '])}}
                                                            @if ($errors->has('identity_number'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('identity_number') }}</strong>
                                        </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group{{ $errors->has('next_of_keen') ? ' has-error' : '' }}">
                                                        {{Form::label('next_of_keen', 'next of keen',['class'=>'col-sm-3 control-label'])}}
                                                        <div class="col-sm-9">
                                                            {{Form::text('next_of_keen', null,['class'=>'form-control','placeholder'=>'Enter next of keen'])}}
                                                            @if ($errors->has('next_of_keen'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('next_of_keen') }}</strong>
                                        </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group{{ $errors->has('employer_name') ? ' has-error' : '' }}">
                                                        {{Form::label('employer_name', 'employer name',['class'=>'col-sm-3 control-label'])}}
                                                        <div class="col-sm-9">
                                                            {{Form::number('employer_name', null,['class'=>'form-control','placeholder'=>'Enter employer name'])}}
                                                            @if ($errors->has('employer_name'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('employer_name') }}</strong>
                                        </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group{{ $errors->has('business_name ') ? ' has-error' : '' }}">
                                                        {{Form::label('business_name', 'business name',['class'=>'col-sm-3 control-label'])}}
                                                        <div class="col-sm-9">
                                                            {{Form::text('business_name', null,['class'=>'form-control','placeholder'=>'Enter Business name'])}}
                                                            @if ($errors->has('business_name'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('business_name') }}</strong>
                                        </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group{{ $errors->has('occupation') ? ' has-error' : '' }}">
                                                        {{Form::label('occupation', 'occupation',['class'=>'col-sm-3 control-label'])}}
                                                        <div class="col-sm-9">
                                                            {{Form::text('occupation', null,['class'=>'form-control','placeholder'=>'Enter occupation'])}}
                                                            @if ($errors->has('occupation'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('occupation') }}</strong>
                                        </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                                    {{Form::label('address', 'address',['class'=>'col-sm-3 control-label'])}}
                                                    <div class="col-sm-9">
                                                        {{Form::text('address', null,['class'=>'form-control','placeholder'=>'Enter address'])}}
                                                        @if ($errors->has('address'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group{{ $errors->has('postal_address') ? ' has-error' : '' }}">
                                                {{Form::label('postal_address', 'postal_address',['class'=>'col-sm-3 control-label'])}}
                                                <div class="col-sm-9">
                                                    {{Form::text('postal_address', null,['class'=>'form-control','placeholder'=>'Enter postal_address'])}}
                                                    @if ($errors->has('postal_address'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('postal_address') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group{{ $errors->has('membership_type') ? ' has-error' : '' }}">
                                                {{Form::label('membership_type', 'postal_address',['class'=>'col-sm-3 control-label'])}}
                                                <div class="col-sm-9">
                                                    {{Form::text('membership_type', null,['class'=>'form-control','placeholder'=>'Enter postal_address'])}}
                                                    @if ($errors->has('postal_address'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('postal_address') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group{{ $errors->has('spouse_name ') ? ' has-error' : '' }}">
                                                {{Form::label('spouse_name', 'spouse name',['class'=>'col-sm-3 control-label'])}}
                                                <div class="col-sm-9">
                                                    {{Form::text('spouse_name', null,['class'=>'form-control','placeholder'=>'Enter spouse name'])}}
                                                    @if ($errors->has('spouse_name'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('spouse_name') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group{{ $errors->has('member_education_id') ? ' has-error' : '' }}">
                                                {{Form::label('member_education_id', 'member Education',['class'=>'col-sm-3 control-label'])}}
                                                <div class="col-sm-9">
                                                    <select name="member_education_id" class="form-control" id="region" required>
                                                        <option value="">Select Member Education</option>
                                                        {{--                            @foreach($member_education_id as $education)--}}
                                                        {{--                                <option value="{{$education->id}}">{{$education->name}}</option>--}}
                                                        {{--                            @endforeach--}}
                                                    </select>

                                                    @if ($errors->has('member_education_id'))
                                                        <span class="help-block">
                                                    <strong>{{ $errors->first('member_education_id') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group{{ $errors->has('description ') ? ' has-error' : '' }}">
                                                {{Form::label('description', 'description',['class'=>'col-sm-3 control-label'])}}
                                                <div class="col-sm-9">
                                                    {{Form::textarea('description', null,['class'=>'form-control','placeholder'=>'Enter any other description'])}}
                                                    @if ($errors->has('description'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group{{ $errors->has('mobile_number ') ? ' has-error' : '' }}">
                                                {{Form::label('mobile_number', 'phone number',['class'=>'col-sm-3 control-label'])}}
                                                <div class="col-sm-9">
                                                    {{Form::text('mobile_number', null,['class'=>'form-control','placeholder'=>'Enter your phone number'])}}
                                                    @if ($errors->has('mobile_number'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('mobile_number') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        {{--                                <div class="col-md-6">--}}
                                        {{--                                    <div class="form-group{{ $errors->has('status_id') ? ' has-error' : '' }}">--}}
                                        {{--                                        {{Form::label('status_id', 'Status',['class'=>'col-sm-3 control-label'])}}--}}
                                        {{--                                        <div class="col-sm-9">--}}
                                        {{--                                            <select name="status_id" class="form-control" required>--}}
                                        {{--                                                <option value="">Select Status</option>--}}
                                        {{--                                                @foreach($statuses as $status)--}}
                                        {{--                                                    <option value="{{$status->id}}">{{$status->name}}</option>--}}
                                        {{--                                                @endforeach--}}
                                        {{--                                            </select>--}}
                                        {{--                                            @if ($errors->has('status_id'))--}}
                                        {{--                                                <span class="help-block">--}}
                                        {{--                                                    <strong>{{ $errors->first('status_id') }}</strong>--}}
                                        {{--                                                </span>--}}
                                        {{--                                            @endif--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                        {{--                                </div>--}}

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
