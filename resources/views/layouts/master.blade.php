
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sports | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->

    <!-- summernote -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        {{--<ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>--}}

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">


            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="/img/logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Sports.tj</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/img/profile.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">


                        {{ Auth::user()->name }}

                    </a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item ">
                        <a href="#" class="nav-link active">
                            <i class=" fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Layout Options
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">6</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Top Navigation</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/boxed.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Boxed</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fixed Sidebar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fixed Navbar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/fixed-footer.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fixed Footer</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Collapsed Sidebar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Charts
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/charts/chartjs.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ChartJS</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/flot.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Flot</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/inline.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Inline</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                UI Elements
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/UI/general.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>General</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/icons.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Icons</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/buttons.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Buttons</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/sliders.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sliders</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/modals.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Modals & Alerts</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/navbar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Navbar & Tabs</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/timeline.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Timeline</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/ribbons.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ribbons</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Forms
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/forms/general.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>General Elements</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/advanced.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Advanced Elements</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/editors.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Editors</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Tables
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/tables/simple.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Simple Tables</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/tables/data.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>DataTables</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/tables/jsgrid.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>jsGrid</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">EXAMPLES</li>
                    <li class="nav-item">
                        <a href="pages/calendar.html" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Calendar
                                <span class="badge badge-info right">2</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/gallery.html" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Gallery
                            </p>
                        </a>
                    </li>


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>
                                Extras
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/examples/login.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Login</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/register.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Register</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/lockscreen.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lockscreen</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Legacy User Menu</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/language-menu.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Language Menu</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/404.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Error 404</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/500.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Error 500</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/pace.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pace</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/blank.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blank Page</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="starter.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Starter Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>




                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->



    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2019 <a href="#">Suhrob Inc</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Have a(n)ice day</b>
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/js/app.js"></script>

</body>
</html>
