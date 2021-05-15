<!DOCTYPE html>
<html class="loading" lang="en">
<!-- BEGIN : Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <!-- <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities."> -->
    <!-- <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app"> -->
    <!-- <meta name="author" content="PIXINVENT"> -->
    <title>Palliative Care Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/public') }}/logo1.png">
    <link rel="shortcut icon" type="image/png" href="{{ url('/public') }}/logo1.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{ url('/public') }}/app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/public') }}/app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/public') }}/app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/public') }}/app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/public') }}/app-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/public') }}/app-assets/vendors/css/switchery.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('/public') }}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/public') }}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/public') }}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/public') }}/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/public') }}/app-assets/css/themes/layout-dark.css">
    <link rel="stylesheet" href="{{ url('/public') }}/app-assets/css/plugins/switchery.css">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" href="{{ url('/public') }}/app-assets/css/pages/authentication.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('/public') }}/assets/css/style.css">
    <!-- END: Custom CSS-->

    <style>
        form .error {
            color: #ff0000;
            font-family: "Open Sans";
            font-size: 12px;
            text-transform: capitalize;

        }

        .error {
            color: #cc0033;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 13px;
            font-weight: bold;
            line-height: 20px;
            text-shadow: 1px 1px rgba(250, 250, 250, .3);
            text-transform: capitalize;

        }
    </style>

</head>
<!-- END : Head-->

<!-- BEGIN : Body-->

<body class="vertical-layout vertical-menu 1-column auth-page navbar-sticky blank-page" data-menu="vertical-menu" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">
        <form method="post" id="form" action="{{ route('login') }}">
            <div class="main-panel">
                <!-- BEGIN : Main Content-->
                <div class="main-content">
                    <div class="content-overlay"></div>
                    <div class="content-wrapper">
                        <!--Login Page Starts-->
                        <section id="login" class="auth-height">
                            <div class="row full-height-vh m-0">
                                <div class="col-12 d-flex align-items-center justify-content-center">
                                    <div class="card overflow-hidden">
                                        <div class="card-content">
                                            <div class="card-body auth-img">
                                                <div class="row m-0">
                                                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center auth-img-bg p-3">
                                                        <img src="{{ url('/public') }}/logo1.png" alt="" class="img-fluid" width="300" height="230">
                                                    </div>
                                                    <div class="col-lg-6 col-12 px-4 py-3">

                                                        <h3 class="mb-2 card-title">EasyCare V1.0</h4><br>
                                                        <p style="margin-bottom:20px;">Vellamunda Pain & Palliative Care </p>
                                                        <input id="email" type="text" placeholder="Username" class="form-control mb-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                      
                                                        <!-- <input type="password" class="form-control mb-2" placeholder="Password"> -->
                                                        <input id="password" type="password" placeholder="Password" class="form-control mb-3 @error('email') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                        

                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                        <br>
                                                        <!-- <div class="d-sm-flex justify-content-between mb-3 font-small-2">
                                                        <div class="remember-me mb-2 mb-sm-0">
                                                            <div class="checkbox auth-checkbox">
                                                                <input type="checkbox" id="auth-ligin">
                                                                <label for="auth-ligin"><span>Remember Me</span></label>
                                                            </div>
                                                        </div>
                                                        <a href="auth-forgot-password.html">Forgot Password?</a>
                                                    </div> -->
                                                        <div class="d-flex justify-content-between flex-sm-row flex-column">
                                                            <div href="#" class=" mb-1 mb-sm-0"></div>
                                                            <button type="submit" class="btn btn-primary">Login</button>
                                                        </div>
                                                        <hr>
                                                        <small><i> <img src="{{ url('/public') }}/nsslogo.jpg" style="width: 32px; height:32px ;" class="user-image" alt="User Image">
                                                                &nbsp; Powered by NSS GECW &nbsp; <img src="{{ url('/public') }}/gecwlogo.png" style="width: 32px; height:32px ;" class="user-image" alt="User Image"></i></small>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <!-- <h6 class="text-primary m-0">Or Login With</h6>
                                                        <div class="login-options">
                                                            <a class="btn btn-sm btn-social-icon btn-facebook mr-1"><span class="fa fa-facebook"></span></a>
                                                            <a class="btn btn-sm btn-social-icon btn-twitter mr-1"><span class="fa fa-twitter"></span></a>
                                                        </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="position: absolute; right: 20px; bottom:10px">
                                <h5>EasyCare V1.0</h5>
                                </div>

                            </div>

                        </section>
                        <!--Login Page Ends-->
                    </div>
                </div>
                <!-- END : End Main Content-->
            </div>
        </form>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <!-- <script src="{{ url('/public') }}/app-assets/vendors/js/vendors.min.js"></script>
    <script src="{{ url('/public') }}/app-assets/vendors/js/switchery.min.js"></script> -->
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="{{ url('/public') }}/app-assets/js/core/app-menu.js"></script>
    <script src="{{ url('/public') }}/app-assets/js/core/app.js"></script>
    <script src="{{ url('/public') }}/app-assets/js/notification-sidebar.js"></script>
    <script src="{{ url('/public') }}/app-assets/js/customizer.js"></script>
    <script src="{{ url('/public') }}/app-assets/js/scroll-top.js"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
    <!-- BEGIN: Custom CSS-->
    <script src="{{ url('/public') }}/assets/js/scripts.js"></script>
    <script src="{{ url('/public') }}/bower_components/jquery/dist/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>

    <!-- END: Custom CSS-->
</body>

<script>
    $(function() {


        $("#form").validate({

            submitHandler: function(form) {

                $('.btn').prop('disabled', true);

                form.submit();
            }
        })
    });
</script>
<!-- END : Body-->

</html>