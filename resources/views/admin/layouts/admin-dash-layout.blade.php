<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <span class="brand-text font-weight-light">Admin Panel</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-2 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block text-white">Radha Krishna Travels</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-3">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                        
                        <li class="nav-item">
                            <a href="{{url('/display')}}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Display Pakages
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/add')}}" class="nav-link">
                            &nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
                                <p>
                                &nbsp;&nbsp;Add Pakages Description
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dayDesc.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                                <p>
                                Display Days
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dayDesc.create')}}" class="nav-link">
                            &nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
                                <p>
                                &nbsp;&nbsp;Add Days Description
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('include.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Display Include
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('include.create')}}" class="nav-link">
                            &nbsp;&nbsp; <i class="fa fa-plus" aria-hidden="true"></i>
                                <p>
                                &nbsp;&nbsp;Add Include Desctiption
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('exclude.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Display Exclude
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('exclude.create')}}" class="nav-link">
                            &nbsp;&nbsp; <i class="fa fa-plus" aria-hidden="true"></i>
                                <p>
                                &nbsp;&nbsp;Add Exclude Desctiption
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('footer.index')}}" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Footer
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('logo.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Logo
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/contact-us')}}" class="nav-link">
                            <i class="fa fa-users" aria-hidden="true"></i>
                                <p>
                                    Customer Queries
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    Mailbox
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inbox</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Compose</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Read</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid p-3">
                    @yield('content')
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>