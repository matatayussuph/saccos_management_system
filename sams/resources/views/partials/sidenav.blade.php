<nav id="mainnav-container">
    <div id="mainnav">
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
{{--                    @if(Auth::check())--}}
                        <ul id="mainnav-menu" class="list-group">
                            <!--Category name-->
                            <li class="list-header">Menu</li>

                            <!--Menu list item-->
                            <li >
                                <a href="">
                                    <i class="glyphicon glyphicon-home"></i>
                                    <span class="menu-title">
                                    <strong>Dashboard|Home</strong>
                                </span>
                                </a>
                            </li>
{{--                            @if($role=='0')--}}
                            <!--Menu list item-->
                            <li class="">
                                <a href="#">
                                    <i class="glyphicon glyphicon-folder-open"></i>
                                    <span class="menu-title">
                                    <strong>Members info's</strong>
                                </span>
                                    <i class="arrow"></i>
                                </a>
                                <!--Submenu-->
                                <ul class="collapse">
                                   <li></i>
                                        <a href="{{ route('create')}}"><i class="glyphicon glyphicon-plus-sign"></i>create Member</a>
                                    </li>
{{--                                 <li><a href=""><i class="glyphicon glyphicon-user"></i>balance & statements</a></li>--}}
{{--                                    <li><a href=""><i class="glyphicon glyphicon-pencil"></i>Repayments & statements</a></li>--}}
                                    <li><a href=""><i class="glyphicon glyphicon-user"></i>manage member</a></li>

                                </ul>
                            </li>
                            <li class="">
                                <a href="#">
                                    <i class="glyphicon glyphicon-folder-open"></i>
                                    <span class="menu-title">
                                            <strong>Manage Saccos</strong>
                                </span>
                                    <i class="arrow"></i>
                                </a>
                                <!--Submenu-->
                                <ul class="collapse">
                                    <li><a href="{{ route('createUser')}}"><i class="glyphicon glyphicon-th-list"></i>create user/staff</a></li>

                                    <li>
                                        <a href=""><i class="glyphicon glyphicon-plus"></i>approve loan</a>
                                    </li>
                                    <li><a href=""><i class="glyphicon glyphicon-th-list"></i>approve members</a></li>
                                    <li><a href=""><i class="glyphicon glyphicon-file"></i>loan post & disbursement</a></li>
                                    <li><a href=""><i class="glyphicon glyphicon-file"></i>financial statements</a></li>

                                </ul>
                            </li>

                            <li class="">
                                <a href="#">
                                    <i class="glyphicon glyphicon-folder-open"></i>
                                    <span class="menu-title">
                                    <strong>Manage loan</strong>
                                </span>
                                    <i class="arrow"></i>
                                </a>
                                <!--Submenu-->
                                <ul class="collapse">
                                    <li></i>
                                        <a href=""><i class="glyphicon glyphicon-plus"></i>Register loan</a>
                                    </li>
                                    <li><a href=""><i class="glyphicon glyphicon-th-list"></i>Approve loan</a></li>
                                    <li><a href=""><i class="glyphicon glyphicon-file"></i>Outstand loan</a></li>
                       </ul>
                            </li>
 <li class="">
                                <a href="#">
                                    <i class="glyphicon glyphicon-folder-open"></i>
                                    <span class="menu-title">
                                    <strong>Transanction details </strong>
                                </span>
                                    <i class="arrow"></i>
                                </a>
                                <!--Submenu-->
                                <ul class="collapse">
                                    <li>

                                        </i>
                                        <a href=""><i class="glyphicon glyphicon-plus"></i>member transaction</a>
                                    </li>
                                    <li><a href=""><i class="glyphicon glyphicon-th-list"></i>revenues & expenditures</a></li>
                                    <li><a href=""><i class="glyphicon glyphicon-file"></i>loan post & disbursement</a></li>
                                    <li><a href=""><i class="glyphicon glyphicon-file"></i>financial statements</a></li>

                                </ul>
                            </li>


{{--                            @endif--}}

                        </ul>
{{--                    @endif--}}
                </div>
            </div>
        </div>
    </div>
</nav>
