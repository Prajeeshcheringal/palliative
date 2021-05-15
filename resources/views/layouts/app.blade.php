<!DOCTYPE html>

<html style="height: auto; min-height: 100%;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>EacyCare</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ url('/public') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/public') }}/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('/public') }}/bower_components/Ionicons/css/ionicons.min.css">
    <!-- <link rel="stylesheet" href="{{ url('/public') }}/plugins/pace/pace.min.css"> -->

    <link rel="stylesheet" href="{{ url('/public') }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="{{ url('/public') }}/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="{{ url('/public') }}/dist/css/skins/skin-blue.min.css">

    <script src="{{ url('/public') }}/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="{{ url('/public') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ url('/public') }}/dist/js/adminlte.min.js"></script>
    <script src="{{ url('/public') }}/bower_components/datatables.net/js/jquery.dataTables.min.js">
    </script>
    <script src="{{ url('/public') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
    </script>
    <script src="{{ url('/public') }}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js">
    </script>
    <script src="{{ url('/public') }}/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="{{ url('/public') }}/dist/js/demo.js"></script>
    <!-- <script src="{{ url('/public') }}/bower_components/PACE/pace.min.js"></script> -->
    <script src="{{ url('/public') }}/plugins/ckeditor/ckeditor.js"></script>
    <script src="{{ url('/public') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js">
    </script>
    <script src="{{ url('/public') }}/dist/sweetalert.min.js"></script>
    <link href="{{ url('/public') }}/dist/jquery-ui.css" rel="Stylesheet">
    </link>
    <script src="{{ url('/public') }}/dist/jquery-ui.js"></script>
    <script src="{{ url('/public') }}/dist/jquery-migrate-3.0.0.min.js"></script>
    <script src="{{ url('/public') }}/dist/jquery.validate.js"></script>


    <!-- Google Font -->
    <!-- <link rel="stylesheet" href="{{ url('/public') }}/dist/css.css"> -->

    <style>
        body {
            /* font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; */
            font-size: 16px;
            /* background-color: #cccccc; */

        }

        .bg {
            background:linear-gradient(rgba(255, 255, 255, -0.5), rgba(255, 255, 255, -0.2)),
            url("{{ url('/public') }}/bg.jpeg");

            /* background-image: url("{{ url('/public') }}/bg.jpeg"); */
            height: 100%;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .side {
            background-image: url("{{ url('/public') }}/side.jpeg");
        }

        td,
        li {
            font-size: 16px;

        }



        form .error {
            color: #ff0000;
            font-family: "Open Sans";
            font-size: 12px;
        }

        .error {
            color: #cc0033;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 13px;
            font-weight: bold;
            line-height: 20px;
            text-shadow: 1px 1px rgba(250, 250, 250, .3);
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        th {

            width: auto !important;

        }

        #pageloader {
            background: rgba(255, 255, 255, 0.8);
            display: none;
            height: 100%;
            position: fixed;
            width: 100%;
            z-index: 9999;
        }

        #pageloader img {
            left: 50%;
            margin-left: -300px;
            margin-top: -200px;
            position: absolute;
            top: 50%;
        }

        input,
        td {
            text-transform: capitalize
        }
    </style>|

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-blue  fixed   sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->

            <a href="{{ url('/home') }}/" id="load-home" class="logo ajax-link">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>E</b>Care</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>
                        <!-- <img src="{{ url('/public') }}/logo.jpeg" style="width: 45px; height:45px;  border-radius: 50%; margin-left:-30px;" class="user-image" alt="User Image"> -->

                        Easy
                    </b>Care V1.0</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="{{ url('/public') }}/logo.jpeg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        -->
                        <!-- /.messages-menu -->

                        <!-- Notifications Menu -->
                        <li>
                            <a href="{{ url('/home') }}" class="ajax-link">
                                <i class="fa fa-dashboard"></i> <span></span>
                            </a>
                        </li>
                        <li class="dropdown notifications-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                @if($pending_home_care || $pending_equipments)
                                <span class="label label-danger"><i class="fa fa-star"></i></span>
                                @endif
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Your Notifications </li>
                                <li>
                                    <!-- Inner Menu: contains the notifications -->
                                    <ul class="menu">
                                        @if($pending_home_care)
                                        <li>
                                            <!-- start notification -->
                                            <a href="{{url('/bookings/pendings')}}" class="ajax-link">
                                                <i class="fa fa-home text-danger"></i> {{$pending_home_care}} Pending HomeCare
                                            </a>
                                        </li>
                                        @endif
                                        @if($pending_equipments)

                                        <li>
                                            <!-- start notification -->
                                            <a href="{{url('/reports/equipments')}}" class="ajax-link">
                                                <i class="ion ion-ios-stopwatch-outline text-danger"></i> {{$pending_equipments}} Out of date Equipments
                                            </a>
                                        </li>
                                        @endif

                                        <!-- end notification -->
                                    </ul>
                                </li>

                                <li class="footer"><a href="">
                                        refresh
                                    </a></li>
                            </ul>
                        </li>

                        <!-- User Account Menu -->

                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="{{ url('/public') }}/logo.jpeg" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{{ucfirst(Auth()->user()->name ?? '')}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="{{ url('/public') }}/logo.jpeg" class="img-circle" alt="User Image">

                                    <p>
                                        {{ucfirst(Auth()->user()->name ?? '')}}
                                        <small> {{Auth()->user()->email ?? ''}} </small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <!-- <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div> -->
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->


                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign Out</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat" data-toggle="modal" data-target="#myModal">Change Password</a>
                                    </div>
                                </li>




                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="" id="refresh" class="ajax-link">
                                <!-- data-toggle="control-sidebar"-->
                                <i class="fa fa-refresh"></i>
                            </a>
                        </li>
                    </ul>
                    <form id="logout-form" action="{{ url('/') }}/logout" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </nav>

        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar  side_menu" style="background-color: #00001a;">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional)
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ url('/public') }}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Admin</p>  -->
                <!-- Status 
                        <a href="#"><i class="fa fa-circle text-success"></i> </a>
                    </div>
                </div>-->

                <!-- search form (Optional) 
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                    class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>-->
                <!-- /.search form -->

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <!-- <li class="header"></li> -->

                    <!-- <li class="treeview" id="dashboard">
                    <a href="{{ url('/') }}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li> -->
                    <!-- Optionally, you can add icons to the links -->


                    <li class="treeview" id="home_care">
                        <a href="#">
                            <i class="fa fa-home"></i> <span>Home Care</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" id="home_care_li">
                            <!-- <li class="" id="home1"><a href="{{ url('/addvisit') }}" class="ajax-link"><i class="fa fa-circle-o"></i>
                                    Home Care Booking</a></li> -->
                            <li id="home2"><a href="{{ url('/bookings') }}" class="ajax-link"><i class="fa fa-circle-o"></i>
                                    Home Care Bookings</a></li>
                            <li id="home20"><a href="{{ url('/bookings/pendings') }}" class="ajax-link"><i class="fa fa-circle-o"></i>Pending
                                    Home Care</a></li>
                        </ul>
                    </li>
                    <li class="treeview" id="clinic_care">
                        <a href="#">
                            <i class="fa  fa-medkit"></i> <span>Clinic Care</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" id="clinic_care_li">
                            <!-- <li id="home3"><a href="{{ url('/addapoinments') }}" class="ajax-link"><i class="fa fa-circle-o"></i>Daily Registration</a></li> -->
                            <li id="home4"><a href="{{ url('/dailypatients') }}" class="ajax-link"><i class="fa fa-circle-o"></i>Daily Registrations
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="treeview" id="general_master">
                        <a href="#">
                            <i class="fa fa-user"></i> <span>Patients</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" id="general_master_li">
                            <li id="home5"><a href="{{ url('/patients') }}" class="ajax-link"><i class="fa fa-circle-o"></i>Patients</a></li>
                            <li id="home6"><a href="{{ url('/patient/create/0') }}" class="ajax-link"><i class="fa fa-circle-o"></i>New Registration</a></li>

                        </ul>
                    </li>

                    <li class="treeview" id="Pharmacy">
                        <a href="#">
                            <i class="fa fa-plus-square"></i> <span>Pharmacy</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" id="Pharmacy_li">

                            <li id="home9"><a href="{{ url('/medicines') }}" class="ajax-link"><i class="fa fa-circle-o"></i>Medicines</a></li>
                            <li id="home10"><a href="{{ url('/prescriptions') }}" class="ajax-link"><i class="fa fa-circle-o"></i>Prescriptions</a></li>

                        </ul>
                    </li>

                    <li class="treeview" id="disesaes">
                        <a href="#">
                            <i class="fa fa-codepen"></i> <span>Diseases</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" id="disesaes_li">
                            <li id="home676"><a href="{{ url('/diseases') }}" class="ajax-link"><i class="fa fa-circle-o"></i>Diseases</a></li>
                            <li id="home509"><a href="{{ url('/disease/create/0') }}" class="ajax-link"><i class="fa fa-circle-o"></i>Add Disease</a></li>

                        </ul>
                    </li>
                    <li class="treeview" id="Equipments">
                        <a href="#">
                            <i class="fa  fa-user-md"></i> <span>Equipments</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" id="Equipments_li">

                            <li id="home7"><a href="{{ url('/equipments') }}" class="ajax-link"><i class="fa fa-circle-o"></i>Equipments</a></li>
                            <li id="home8"><a href="{{ url('/reports/equipments') }}" class="ajax-link"><i class="fa fa-circle-o"></i>Equipments Management</a></li>

                        </ul>
                    </li>
                    <li class="treeview" id="volunteers">
                        <a href="#">
                            <i class="fa  fa-users"></i> <span>Volunteers</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" id="volunteers_li">

                            <li id="home71"><a href="{{ url('/volunteers') }}" class="ajax-link"><i class="fa fa-circle-o"></i>Volunteers</a></li>
                            <li id="home80"><a href="{{ url('daily_volunteers') }}" class="ajax-link"><i class="fa fa-circle-o"></i>Daily Volunteers</a></li>

                        </ul>
                    </li>

                    <!-- <br> -->
                    <!-- <li class="header">Reports</li> -->
                    <li class="treeview" id="Reports">
                        <a href="#">
                            <i class="fa fa-cube"></i> <span>Reports</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" id="Reports_li">
                            <li id="home13"><a href="{{ url('/reports/treatment') }}" class="ajax-link"><i class="fa fa-circle-o"></i>Treatment
                                    Report</a></li>

                            <li id="home14"><a href="{{ url('/reports/patients') }}" class="ajax-link"><i class="fa fa-circle-o"></i>Patients
                                    Report</a></li>
                            <li id="home15"><a href="{{ url('/reports/students') }}" class="ajax-link"><i class="fa fa-circle-o"></i>Students Report</a></li>

                        </ul>
                    </li>
                    @auth
                    @if(Auth()->user()->role == "Admin")
                    <li class="treeview" id="Settings">
                        <a href="#">
                            <i class="fa  fa-gear"></i> <span>Settings</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" id="Settings_li">

                            <li id="home11"><a href="{{ url('/users') }}" class="ajax-link"><i class="fa fa-circle-o"></i>Users</a></li>
                            <li id="home111"><a href="{{ url('/dbbackup') }}" class="ajax-link"><i class="fa fa-circle-o"></i>DB Backup</a></li>


                        </ul>
                    </li>
                    @endif
                    @endauth

                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper bg">
            <!-- Content Header (Page header) -->
            <!-- <section class="content-header">
                <h1>
                    Page Header
                    <small>Optional description</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">Here</li>
                </ol>
            </section>  -->

            <!-- Main content -->
            <div id="pageloader">
                <img src="{{ url('/public/spinner.gif')}}" alt="processing..." />
            </div>
            <section class="content container-fluid">

                <div id="content_view" class="">


                </div>
                <!--------------------------
                    | Your Page Content Here |
                    -------------------------->

            </section>
            <!-- /.content -->

            <form method="post" id="change_password_form" action="{{ url('/') }}/users/changepassword">
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg ">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                <h4 class="modal-title">Change Password</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group m-form__group row">
                                    <div class="col-lg-4">
                                        @csrf
                                        <label>Current Password:</label>
                                        <input type="password" name="current_password" id="current_password" class="form-control m-input" placeholder="Current Password" required>
                                        <span class="error" id="current_password_error"></span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="">New Password:</label>
                                        <input type="password" name="new_password" id="new_password" class="form-control m-input" placeholder="New Password" required>
                                        <span class="error" id="new_password_error"></span>

                                    </div>
                                    <div class="col-lg-4">
                                        <label class="">Confirm Password:</label>
                                        <input type="password" name="confirm_password" id="confirm_password" class="form-control m-input" placeholder="Confirm Password" required>
                                        <span class="error" id="confirm_password_error"></span>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                <button type="submit" id="change_password" class="btn btn-info btn-sm">Change
                                    Password</button>
                            </div>
                        </div>


                    </div>
                </div>
            </form>
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                <img src="{{ url('/public') }}/nsslogo.jpg" style="width: 25px; height:25px ;" class="user-image" alt="User Image">

                &nbsp; &nbsp;<b>Not me but you !!</b> &nbsp;
                <!-- <img src="{{ url('/public') }}/gecwlogo.png" style="width: 25px; height:25px ;" class="user-image" alt="User Image"> -->

                <!-- <i class="fa fa-expeditedssl"></i> -->
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; {{Date('Y')}} <a href="#">NSS GEC Wayanad</a>.</strong> All rights reserved.
        </footer>

        <!-- @if(session('Success'))
        <script>
            swal("Success!", "{{session('Success')}}", "success");
        </script>

        @elseif(session('Error'))

        <script>
            swal("Error!", "{{session('Error')}}", "error");
        </script>
        @endif -->





</body>

<script>
    // $(document).ajaxStart(function() {
    //     Pace.restart()
    // })

    $(function() {


        $(document).on('click', '#save', function() {

            $("#form").validate({

                submitHandler: function(form) {

                    var back = $("#form").attr('back');
                    $('#save').prop('disabled', true);
                    $("#pageloader").fadeIn();


                    $.ajax({

                        url: form.action,
                        type: form.method,
                        data: $(form).serialize(),
                        success: function(response) {

                            swal("Success!", "Saved Successfully", "success");
                            $("#pageloader").fadeOut();

                            ajaxLoad(back);

                        },
                        error: function(err) {

                            $("#pageloader").fadeOut();
                            swal("Error!!", "Oops Something Went Wrong!", "error");

                            $('#save').prop('disabled', false);

                        }

                    });
                }
            })
        })

        $(document).on('click', 'a.ajax-link', function(e) {

            e.preventDefault();
            $('li').removeClass("active");
            $(this).closest('li').addClass("active");
            var url = $(this).attr('href');
            $("#pageloader").fadeIn();
            ajaxLoad(url);
        })
        $('a.ajax-link:first').trigger('click');




        // var selecteditem = sessionStorage.getItem('selecteditem');
        // var selectedli = sessionStorage.getItem('selectedli');

        // if (selecteditem != null) {
        //     $('#' + selecteditem).addClass("menu-open") //.addClass("m-menu__item--open");
        //     $('#' + selecteditem + '_li').css('display', 'block');
        // }
        // if (selectedli != null) {
        //     $('#' + selectedli).addClass("active");
        // }

        // $(".side_menu li").click(function(e) {

        //     id = $(this).closest('li').attr('id');

        //     sessionStorage.setItem("selecteditem", id);
        //     //	e.preventDefault();

        // });

        // $(".side_menu li ul li").click(function(e) {

        //     id = $(this).attr('id');
        //     sessionStorage.setItem("selectedli", id);

        // });

        $('#change_password').click(function(event) {

            var current_password = $('#current_password').val();
            var new_password = $('#new_password').val();
            var confirm_password = $('#confirm_password').val();

            if (current_password) {

                $('#current_password_error').text('');

                if (new_password.length >= 8) {
                    $('#new_password_error').text('');

                    if (new_password === confirm_password) {


                    } else {
                        event.preventDefault();
                        $('#confirm_password_error').text(
                            'Password mismatch');
                        $('#confirm_password').val('');
                    }
                } else {
                    event.preventDefault();
                    $('#new_password_error').text(
                        'Enter new password with atleast 8 characters');

                }


            } else {
                event.preventDefault();
                $('#current_password_error').text('Enter current password');

            }



        })


        $(document).on('click', '.delete', function(e) {

            e.preventDefault();

            swal({
                    title: "Are you sure! ?",
                    text: "Once deleted, you will not be able to recover!",
                    icon: "info",
                    buttons: true,
                    dangerMode: true,
                    width: '800px'
                })
                .then((willDelete) => {

                    if (willDelete) {

                        var url = $(this).attr('href');
                        var back = $(this).attr('back');


                        $("#pageloader").fadeIn();

                        $.ajax({
                            url: url,
                            success: function(respose) {

                                swal("Success!!", "Removed Successfully!", "success");
                                ajaxLoad(back)

                            },
                            error: function(err) {

                                $("#pageloader").fadeOut();
                                swal("Error!!", "Oops Something Went Wrong!", "error");


                            }
                        })
                    }
                });
        })



    })

    function ajaxLoad(url) {

        $.ajax({
            url: url,
            success: function(respose) {

                $('#content_view').html(respose);
                $('#refresh').attr('href', url);
                $(".modal-backdrop").remove();


                $(document).ready(function() {
                    $("#pageloader").fadeOut();
                })

               
                setTimeout(function() {
                    swal.close()
                }, 1500);


            },
            error: function(jqXHR, textStatus, errorThrown) {

                if (jqXHR.status == 401) {

                    window.location.href = "{{url('/login')}}";
                }

                $("#pageloader").fadeOut();
                swal("Error!!", "Oops Something Went Wrong!", "error");


            }
        })

    }
</script>

</html>