<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">

        <!--        <div class="pcoded-navigation-label">Admin</div>-->
        <ul class="pcoded-item pcoded-left-item">
            {{-- <li class="pcoded-hasmenu active pcoded-trigger">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext">User</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{route('dashboard')}}">
            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
            <span class="pcoded-mtext">Dashboard</span>
            <span class="pcoded-mcaret"></span>
            </a>
            </li>
            <li class="">
                <a href="{{route('home')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i><b>H</b></span>
                    <span class="pcoded-mtext">Home</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{route('profile')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i><b>R</b></span>
                    <span class="pcoded-mtext">profile</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <li class=" ">
                <a href="{{route('register')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext">Register</span>
                    <span class="pcoded-badge label label-info ">NEW</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>
        </li> --}}
        <li class="pcoded-hasmenu active pcoded-trigger">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                <span class="pcoded-mtext">Product</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="{{route('productlist')}}">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">รายการสินค้า</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('productin')}}">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i><b>H</b></span>
                        <span class="pcoded-mtext">นำสินค้าเข้า</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('productout')}}">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i><b>R</b></span>
                        <span class="pcoded-mtext">นำสินค้าออก</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>

                <li class=" ">
                    <a href="{{route('productexp')}}">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">สินค้าใกล้หมดอายุ</span>

                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="">
            <a href="{{route('productlog')}}">
                <span class="pcoded-micon"><i class="icofont icofont-list"></i><b>N</b></span>
                <span class="pcoded-mtext">บันทึกการทำรายการ</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="">

            <a href="{{route('productlot')}}">
                <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                <span class="pcoded-mtext">รายการ LOT</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="">
            <a href="{{route('productclass')}}">
                <span class="pcoded-micon"><i class="icofont icofont-paperclip"></i><b>N</b></span>
                <span class="pcoded-mtext">หมวดหมู่สินค้า</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="">
            <a href="{{route('producttype')}}">
                <span class="pcoded-micon"><i class="icofont icofont-tasks"></i><b>N</b></span>
                <span class="pcoded-mtext">หมวดนับเป็นสินค้า</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
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
        </ul>
    </div>
</nav>