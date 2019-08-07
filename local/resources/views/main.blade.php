<!DOCTYPE html>
<html lang="en">
@include('inc_head')
@yield('css')


<style>
        #contents {
            max-height: 450px;
            width: 100%;
            overflow-y: scroll;
        }
</style>
<body>
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('inc_nav')
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('inc_menu')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    
                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                @yield('content')
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Page body end -->
                        </div>
                    </div>
                    <!-- Main-body end -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
@include('inc_footer')
@yield('scripts')
<script type="text/javascript">
    $(document).ready(function(){
   $('.pcoded-header').attr('header-theme','theme2');
    });
</script>   

</html>
