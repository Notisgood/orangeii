<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gradient Able bootstrap admin template by codedthemes </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->

    <link rel="icon" href="{{asset('/files/assets/images/favicon.ico" type="image/x-icon')}}">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/icon/icofont/css/icofont.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/icon/font-awesome/css/font-awesome.min.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/css/style.css')}}">
</head>

<body class="fix-menu">
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>

    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material">
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Your Email Address">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <a href="{{route('home')}}">
                                            <button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button></a>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">หากไม่สามารถ เข้าสู่ระบบได้ กรุณาติดต่อเจ้าหน้าที่.</p>
                                        <p class="text-inverse text-left"><b>Your Thanteewarit  Team</b></p>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <script  src="{{asset('/files/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script  src="{{asset('/files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script  src="{{asset('/files/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script  src="{{asset('/files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script  src="{{asset('/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script  src="{{asset('/files/bower_components/modernizr/js/modernizr.js')}}"></script>
    <script  src="{{asset('/files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
    <!-- i18next.min.js -->
    <script  src="{{asset('/files/bower_components/i18next/js/i18next.min.js')}}"></script>
    <script  src="{{asset('/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script  src="{{asset('/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script  src="{{asset('/files/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
    <script  src="{{asset('/files/assets/js/common-pages.js')}}"></script>
</body>

</html>
