<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employee</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost:8000/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<body class="hold-transition skin-blue fixed">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>S&E</b>Services</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>S&E</b>Services</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li><a href="#"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li><a href="#"><i class="fa fa-group"></i> <span>Customers</span></a></li>
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-calendar-times-o"></i><span>Employees</span>
                        <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-user-plus"></i>Recruitment</a></li>
                        <li><a href="EmployeeInformation"><i class="fa fa-book"></i>Information</a></li>
                        <li><a href="payroll"><i class="fa fa-dollar"></i>Payroll Management</a></li>
                        <li class="active"><a href="leave"><i class="fa fa-calendar-minus-o"></i>Attendance</a></li>
                        <li><a href="EmployeeLoans"><i class="fa  fa-credit-card"></i>Employee Loans</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-car"></i> <span>Vehicle Grooming Services</span></a></li>
                <li><a href="#"><i class="fa fa-certificate"></i> <span>Janitorial Services</span></a></li>
                <li><a href="#"><i class="fa fa-calendar"></i> <span>Work Shifts</span></a></li>
                <li><a href="#"><i class="fa fa-cubes"></i> <span>Inventory</span></a></li>
                <li><a href="#"><i class="fa fa-credit-card"></i> <span>Finances</span></a></li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Leave Management
            </h1>
            <ol class="breadcrumb">
                <li><a href="/main"><i class="fa fa-user"></i> Employee</a></li>
                <li class="active">Leave Management</li>
            </ol>
        </section>

        <!-- Main content -->
        <div class="col-md-12" style="background-color: white">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs" style="background-color:#B1C4E6">
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">For Approval</a>
                    <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Leave Details</a></li>
                    <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Employee Leave History</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane  active" id="tab_1">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Pending for approval</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tbody><tr>
                                    <th>Leave ID</th>
                                    <th>Employee ID</th>
                                    <th>Employee Name</th>
                                    <th>Branch</th>
                                    <th>Leave Type</th>
                                    <th>Date</th>
                                    <th>Reason</th>
                                    <th>Status</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>EMP123</td>
                                    <td>John Doe</td>
                                    <td>Moratuwa</td>
                                    <td>Casual</td>
                                    <td>12-01-2016</td>
                                    <td>Personal matter</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td><button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i></button></td>
                                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alerts()"><i class="fa fa-close"></i></button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>EMP123</td>
                                    <td>John Doe</td>
                                    <td>Moratuwa</td>
                                    <td>Casual</td>
                                    <td>12-01-2016</td>
                                    <td>Personal matter</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td><button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i></button></td>
                                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alerts()"><i class="fa fa-close"></i></button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>EMP123</td>
                                    <td>John Doe</td>
                                    <td>Moratuwa</td>
                                    <td>Casual</td>
                                    <td>12-01-2016</td>
                                    <td>Personal matter</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td><button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i></button></td>
                                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alerts()"><i class="fa fa-close"></i></button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>EMP123</td>
                                    <td>John Doe</td>
                                    <td>Moratuwa</td>
                                    <td>Casual</td>
                                    <td>12-01-2016</td>
                                    <td>Personal matter</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td><button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i></button></td>
                                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alerts()"><i class="fa fa-close"></i></button></td>
                                </tr>
                                </tbody></table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>

                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-xs-2">
                                <button type="button" class="btn btn-block btn-success btn-flat"><i class="ion-android-add-circle"></i>&nbsp;Add Leave Details</button>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Leave Details</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tbody><tr>
                                    <th>Designation</th>
                                    <th>Casual Leave</th>
                                    <th>Medical Leave</th>
                                    <th>Annual Leave</th>
                                </tr>
                                <tr>
                                    <td>Manager</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>Accountant</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Stock Keeper</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td>10</td>
                                </tr>
                                </tbody></table>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">

                </div>
                <!-- /.tab-pane -->
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    {{--<footer class="main-footer">--}}
        {{--<!-- To the right -->--}}
        {{--<div class="pull-right hidden-xs">--}}
            {{--Anything you want--}}
        {{--</div>--}}
        {{--<!-- Default to the left -->--}}
        {{--<strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.--}}
    {{--</footer>--}}
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
