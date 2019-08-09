@php
$permission = DB::table('access_role')->where('roles_id_no',Auth::user()->id)->first();
@endphp
<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigation-label">เมนูหลัก</div>
        <ul class="pcoded-item pcoded-left-item">
            @if($permission->access_menu1 == 'Y')
                <div class="pcoded-navigation-label">การจัดการ</div>
                <li class="">
                    <a href="{{route('addstaff')}}">
                        <span class="pcoded-micon"><i class="icofont icofont-ui-user"></i><b>N</b></span>
                        <span class="pcoded-mtext">จัดการพนักงาน</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('access')}}">
                        <span class="pcoded-micon"><i class="icofont icofont-ui-user"></i><b>N</b></span>
                        <span class="pcoded-mtext">จัดการสิทธิ์</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            @endif
            @if($permission->access_menu2 == 'Y')
                <div class="pcoded-navigation-label">จัดการสินค้า</div>
                <li class="">
                    <a href="{{route('productlist')}}">
                        <span class="pcoded-micon"><i class="ti-home"></i></span>
                        <span class="pcoded-mtext">รายการสินค้า</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('productin')}}">
                        <span class="pcoded-micon"><i class="ti-layout-media-right"></i><b>H</b></span>
                        <span class="pcoded-mtext">นำสินค้าเข้า</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('productout')}}">
                        <span class="pcoded-micon"><i class="ti-layout-media-left"></i><b>R</b></span>
                        <span class="pcoded-mtext">นำสินค้าออก</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>

                <li class=" ">
                    <a href="{{route('productexp')}}">
                        <span class="pcoded-micon"><i class="ti-layout-grid2"></i></span>
                        <span class="pcoded-mtext">สินค้าใกล้หมดสต็อก</span>

                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{route('productrunout')}}">
                        <span class="pcoded-micon"><i class="ti-layout-grid2"></i></span>
                        <span class="pcoded-mtext">สินค้าใกล้หมดอายุ</span>

                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            @endif
            @if($permission->access_menu3 == 'Y')
                <div class="pcoded-navigation-label">การทำรายการ</div>
                <li class="">
                    <a href="{{route('productlog')}}">
                        <span class="pcoded-micon"><i class="icofont icofont-list"></i><b>N</b></span>
                        <span class="pcoded-mtext">บันทึกการทำรายการ</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">

                    <a href="{{route('productlot')}}">
                        <span class="pcoded-micon"><i class="icofont icofont-list"></i><b>N</b></span>
                        <span class="pcoded-mtext">รายการ LOT</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            @endif
            @if($permission->access_menu4 == 'Y')
                <div class="pcoded-navigation-label">จัดการหมวดหมู่สินค้า</div>
                <li class="">
                    <a href="{{route('productclass')}}">
                        <span class="pcoded-micon"><i class="icofont icofont-paperclip"></i><b>N</b></span>
                        <span class="pcoded-mtext">หมวดหมู่สินค้า</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('producttype')}}">
                        <span class="pcoded-micon"><i class="icofont icofont-paperclip"></i><b>N</b></span>
                        <span class="pcoded-mtext">หมวดนับเป็นสินค้า</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            @endif
            @if($permission->access_menu5 == 'Y')
                <div class="pcoded-navigation-label">รายงาน</div>
                <li class="">
                    <a href="{{route('reportdaily')}}">
                        <span class="pcoded-micon"><i class="icofont icofont-tasks"></i><b>N</b></span>
                        <span class="pcoded-mtext">รายงานรายวัน</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('reportstaff')}}">
                        <span class="pcoded-micon"><i class="icofont icofont-tasks"></i><b>N</b></span>
                        <span class="pcoded-mtext">รายงานรายคน</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('reportproduct')}}">
                        <span class="pcoded-micon"><i class="icofont icofont-tasks"></i><b>N</b></span>
                        <span class="pcoded-mtext">รายงานรายสินค้า</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            @endif
        </ul>


    </div>
</nav>
{{-- ////////////////////////////////////////////////////////////////////////////////////////////// --}}
{{-- @php
$permission = DB::table('permission')->where('permission_position_id',Auth::user()->position)->get();
@endphp
<div class="sidebar-category sidebar-category-visible">
<div class="category-content no-padding">
<ul class="navigation navigation-main navigation-accordion">
<!-- Main -->
<li class="navigation-header"><span></span> <i class="icon-menu" title="Main pages"></i></li>
<li class="{{Request::segment(1) == 'dashboard' ? 'active' : ''}}"><a href="{{url('dashboard')}}"><i
        class="icon-home4"></i> <span>Dashboard</span></a></li>
@if($permission)
@foreach($permission AS $key)
@if($key->permission_menu_id == 1)
<li class="{{(Request::segment(1) == 'users' || Request::segment(1) == 'position') ? 'active' : ''}}"><a
        href="{{url('users')}}"><i class="icon-user"></i> <span>ผู้ใช้งาน</span></a>
    <ul>
        <li class="{{Request::segment(1) == 'users' ? 'active' : ''}}"><a href="{{url('users')}}"> ข้อมูลผู้ใช้งาน</a>
        </li>
        <li class="{{Request::segment(1) == 'position' ? 'active' : ''}}"><a href="{{url('position')}}"> Position</a>
        </li>
    </ul>
</li>
@elseif($key->permission_menu_id == 2)
<li class="{{Request::segment(1) == 'import' ? 'active' : ''}}"><a href="{{url('import')}}"><i
            class="fa fa-download"></i> <span> Import File Excel Payroll</span></a></li>
@elseif($key->permission_menu_id == 3)
<li class="{{Request::segment(1) == 'quit' ? 'active' : ''}}"><a href="{{url('quit')}}"><i class="fa fa-download"></i>
        <span> Import File Excel สถานะลาออก</span></a>
</li>
@elseif($key->permission_menu_id == 4)


<li><a href="{{url('employee')}}"><i class="fa fa-book"></i> <span> Manager</span></a>
    @php
    $branch =
    DB::table('manabranchper')->join('branch','manabranchper.manabranchper_branchid','branch.branch_id')->where('manabranchper_positionid',Auth::user()->position)->get();
    @endphp
    @if($branch)
    @foreach($branch AS $key)
    <ul>
        <li class="{{Request::segment(1) == 'employee/manager/$key->branch_id' ? 'active' : ''}}"><a
                href="{{url('employee/manager')}}/{{$key->branch_id}}">{{$key->branch_name}}</a></li>
    </ul>
    @endforeach
    @endif
</li>
@elseif($key->permission_menu_id == 5)
<li><a><i class="fa fa-book"></i> <span> พนักงานรายวัน</span></a>
    @php
    $semibranch =
    DB::table('semimonthlybranchper')->join('branch','semimonthlybranchper.semimonthlybranchper_branchID','branch.branch_id')->where('semimonthlybranchper_positionID',Auth::user()->position)->get();
    @endphp
    @if($semibranch)
    <ul>
        @foreach($semibranch AS $key)
        <li><a href="{{url('employee/daily')}}/{{$key->branch_id}}">{{$key->branch_name}}</a></li>
        @endforeach
    </ul>
    @endif
</li>
@elseif($key->permission_menu_id == 6)
<li><a><i class="fa fa-book"></i> <span> พนักงานรายเดือน</span></a>
    @php
    $monthbranch =
    DB::table('monthlybranchper')->join('branch','monthlybranchper.monthlybranchper_branchID','branch.branch_id')->where('monthlybranchper_positionID',Auth::user()->position)->get();
    @endphp
    @if($monthbranch)
    <ul>
        @foreach($monthbranch AS $key)
        <li><a href="{{url('employee/monthly')}}/{{$key->branch_id}}">{{$key->branch_name}}</a></li>
        @endforeach
    </ul>
    @endif
</li>
<!--
            <ul>
            @php
                $branch = DB::table('empbranchper')->join('branch','empbranchper.empbranchper_branchid','branch.branch_id')->where('empbranchper_positionid',Auth::user()->position)->get();
            @endphp
                @if($branch)
                    @foreach($branch AS $key)
                        <li><a>{{$key->branch_name}}</a>
                            <ul>
                                <li><a href="{{url('employee/monthly')}}/{{$key->branch_id}}">รายเดือน (Monthly)</a></li>
                                <li><a href="{{url('employee/daily')}}/{{$key->branch_id}}">รายวัน (Daily)</a></li>
                            </ul>
                        </li>
                    @endforeach
                @endif
            </ul>
-->
<!--                    </li>-->
@elseif($key->permission_menu_id ==7)
<li><a href="{{url('branch')}}"><i class="fa fa-university"></i> <span> ข้อมูลสาขา</span></a></li>
@elseif($key->permission_menu_id == 8)
<li><a href="{{url('employee/employreport')}}"><i class="fa fa-file-excel-o"></i> รายงานข้อมูลพนักงาน</a></li>
@elseif($key->permission_menu_id == 9)
<li><a href="{{url('logmail')}}"><i class="fa fa-cc"></i> แก้ไข E-mail รับ log</a></li>
@endif
@endforeach
@endif --}}