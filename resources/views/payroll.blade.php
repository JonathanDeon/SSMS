<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html xmlns="http://www.w3.org/1999/html">
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

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
            <!-- Sidebar user panel -->

            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i> <span>Customer Management</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="RegisterCustomer"><i class="fa fa-user-plus"></i> Register Customer</a></li>
                        <li><a href="CustomerLoyalty"><i class="fa fa-thumbs-o-up"></i> Customer Loyalty</a></li>
                        <li><a href="Feedback"><i class="fa fa-commenting"></i>Customer Feedback</a></li>
                        <li><a href="Reports"><i class="fa fa-file-text"></i>Reports</a></li>
                        <li><a href="#"><i class="fa fa-minus-square"></i>Customer Deficits</a></li>
                        <li><a href="#"><i class="fa fa-calendar"></i>Customer Reservations</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i> <span>Service Management</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="ReservationsService"><i class="fa fa-circle-o"></i>Reservations</a></li>
                        <li><a href="AssignService"><i class="fa fa-circle-o"></i>Assign Service</a></li>
                        <li><a href="ServicePlans"><i class="fa fa-circle-o"></i>Service Plans</a></li>
                        <li><a href="ServiceLogs"><i class="fa fa-circle-o"></i>Service Logs</a></li>
                        <li><a href="ReportsServices"><i class="fa fa-circle-o"></i>Service Reports</a></li>
                    </ul>
                </li>

                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-users"></i><span>Employee Management</span>

                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="AddEmployee"><i class="fa fa-user-plus"></i>Recruitment</a></li>
                        <li><a href="EmployeeInformation"><i class="fa fa-book"></i>Information</a></li>
                        <li class="active"><a href="payroll"><i class="fa fa-dollar"></i>Payroll Management</a></li>
                        <li><a href="leave"><i class="fa fa-calendar-minus-o"></i>Attendance</a></li>
                        <li><a href="EmployeeLoans"><i class="fa fa-credit-card"></i>Employee Loans</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="Janitorial">
                        <i class="fa fa-bar-chart"></i><span>Janitorial Management</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>

                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-money"></i><span>Finance Management</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="Assets"><i class="fa fa-building"></i>Asset Management</a></li>
                        <li><a href="Liability"><i class="fa fa-plus-circle"></i>Liability Management</a></li>
                        <li><a href="Income&Expenditure"><i class="fa fa-files-o"></i>Income & Exp. Management</a></li>
                        <li><a href="TransactionManagement"><i class="fa fa-credit-card"></i>Transaction Management</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-cube"></i><span>Inventory Management</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="AddNewItem"><i class="fa fa-plus"></i>Add New Item</a></li>
                        <li><a href="inventory"><i class="fa fa-cubes"></i>Inventory</a></li>
                        <li><a href="Purchases"><i class="fa fa-shopping-cart"></i>Purchases</a></li>
                        <li><a href="PurchaseReturns"><i class="fa fa-refresh"></i>Purchase Return</a></li>
                        <li><a href="Sales"><i class="fa fa-money"></i>Sales</a></li>
                        <li><a href="PurchaseOrder"><i class="fa fa-mail-forward "></i>Send PO</a></li>
                        <li><a href="Supplier"><i class="fa fa-truck"></i>Suppliers</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bar-chart"></i><span>Work-Shift Management</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="AssignEmployees"><i class="fa fa-male"></i>Assign Employees</a></li>
                        <li><a href="CreateShifts"><i class="fa fa-plus-circle"></i>Create Shifts</a></li>
                        <li><a href="ReplaceEmployee"><i class="fa fa-exchange"></i>Replace Employee</a></li>
                        <li><a href="OverWorkedEmp"><i class="fa fa-plus-circle"></i>Over Worked Employees</a></li>
                        <li><a href="RequestEmployee"><i class="fa fa-plus-circle"></i>Request Employee</a></li>
                        <li><a href="EfficiencyAnalysis"><i class="fa fa-plus-circle"></i>Efficiency Analysis</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Payroll Management
            </h1>
            <ol class="breadcrumb">
                <li><a href="/main"><i class="fa fa-user"></i> Employee</a></li>
                <li class="active">Payroll Management</li>
            </ol>
        </section>

        <!-- Main content -->
        <div class="col-md-12" style="background-color: white">
            <br>
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs" style="background-color:#B1C4E6">
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">New Salary Details</a>
                    <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Employee Salary Details</a></li>
                    <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Monthly Salary Details</a></li>
                    <li><a href="#tab_4" data-toggle="tab" aria-expanded="false">Employee Fund Details</a></li>
                </ul>
            </div>
            <script>
                function updateSalary(){
                    var designation = document.getElementById('designation').value;
                    var basic = document.getElementById('basic').value;
                    var allowance = document.getElementById('allowance').value;
                    $.ajax({
                        type:'get',
                        url:'addSalary',
                        data:{designation: designation, basic:basic, allowance:allowance},
                        success: function() {
                            swal({
                                title: "Success!",
                                text: "Successfully updated the Salary Information",
                                type: "success",
                                showCancelButton: false,
                                confirmButtonColor: '#1D84FF',
                                confirmButtonText: 'Ok',
                                closeOnConfirm: true
                            },
                            function(isConfirm){
                                if (isConfirm){
                                    window.location.href="/payroll";
                                }
                            });
                        },
                        error: function(x,y,thrownError){
                            swal("Error!","Update of salary information failed!", "error");

                        }
                    });
                }
            </script>
            <div class="tab-content">
                <div class="tab-pane  active" id="tab_1" align="center">
                    <div class="box box-info" style="width: 50%; top:20px;">
                        <div class="box-header with-border">
                            <h3 class="box-title">New Salary Details</h3>
                        </div>
                    <form class="form-horizontal" role="form">
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="designation" class="col-sm-2 control-label">Designation</label>
                                <div class="col-sm-10">
                                    <select class="form-control" style="width:80%" name="designation" id="designation">
                                        <option>Select Designation</option>
                                        @foreach($designations as $designation)
                                        <option value="{{ $designation->id }}">{{$designation->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="basic" class="col-sm-2 control-label">Basic</label>

                                <div class="col-sm-10">
                                    <input type="number" min="0" class="form-control" name="basic" id="basic" placeholder="Enter basic salary" style="width:80%">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="allowance" class="col-sm-2 control-label">Allowance</label>
                                <div class="col-sm-10">
                                    <input type="number" min="0" class="form-control" name="allowance" id="allowance" placeholder="Enter allowance" style="width:80%">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">

                            <button type="button" class="btn btn-primary pull-center" onclick="updateSalary()">Save changes</button>
                        </div>

                        <!-- /.box-footer -->
                    </form>
                    </div>

                 </div>

                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>Employee ID</th>
                                <th>Employee Name</th>
                                <th>Designation</th>
                                <th>Basic</th>
                                <th>Allowance</th>
                                <th>Ongoing loans</th>
                                <th>Total</th>
                            </tr>
                            {{--@foreach($employees as $employee)--}}
                                {{--<tr>--}}
                                    {{--<td>{{$employee->eid}}</td>--}}
                                    {{--<td>{{$employee->name}}</td>--}}
                                    {{--<td>{{$employee->title}}</td>--}}
                                    {{--<td>{{$employee->gender}}</td>--}}
                                    {{--<td>{{$employee->branch}}</td>--}}
                                    {{--<td>{{$employee->manager}}</td>--}}
                                    {{--<td>{{$employee->joined_date}}</td>--}}
                                    {{--<td><button type="button" id="view" value="{{$employee->eid}}" class="btn btn-success" onclick="getEmployee('{{$employee->eid}}')"><i class="fa fa-eye"></i></button></td>--}}
                                    {{--<td><button type="button" onclick="getEmployee('{{$employee->eid}}')" id="update" value="{{$employee->eid}}" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button></td>--}}
                                    {{--<td><button type="button" value="{{$employee->eid}}" class="btn btn-danger" onclick="deleteEmployee('{{$employee->eid}}')"><i class="fa fa-trash"></i></button></td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            </tbody></table>
                        <script>
                            function getEmployee(id) {
                                document.getElementById('employee-id').value = id;
                                $.ajax({
                                    type: "get",
                                    url: 'fillEmployee',
                                    data: {id: id},
                                    success: function(x) {
                                        var details = JSON.parse(x);
                                        document.getElementById('save').value=details[0].eid;
                                        document.getElementById('employee-name').value = details[0].name;
                                        document.getElementById('optionsRadios1').checked = details[0].gender;
                                        document.getElementById('contact').value = details[0].contact;
                                        document.getElementById('dob').value = details[0].dob;
                                        document.getElementById('dateJoined').value = details[0].joined_date;
                                        document.getElementById('address').value = details[0].address;
                                        document.getElementById('designation').value = details[0].designation;
                                        document.getElementById('branch').value = details[0].branch;
                                        document.getElementById('manager').value = details[0].manager;
                                    },
                                    error:function(){

                                    }
                                })
                            }

                            function updateEmployee() {
                                var id = document.getElementById('save').value;
                                var ename = document.getElementById('employee-name').value;
                                var gender = document.querySelector('input[name="optionsRadios"]:checked').value;
                                var contact = document.getElementById('contact').value;
                                var address = document.getElementById('address').value;
                                var dateJoined = document.getElementById('dateJoined').value;
                                var dob = document.getElementById('dob').value;
                                $.ajax({
                                    type: "get",
                                    url: 'updateEmployee',
                                    data: {id: id, ename:ename,gender:gender,address: address,dateJoined:dateJoined},
                                    success: function() {
                                        swal({
                                                    title: "Success!",
                                                    text: "successfully updated the employee information",
                                                    type: "success",
                                                    showCancelButton: false,
                                                    confirmButtonColor: '#1D84FF',
                                                    confirmButtonText: 'Ok',
                                                    closeOnConfirm: true
                                                },
                                                function(isConfirm){
                                                    if (isConfirm){
                                                        window.location.href="/EmployeeInformation";
                                                    }
                                                });
                                    },
                                    error: function(){
                                        swal("Error!","Employee information update failed!", "error");
                                    }
                                })
                            }
                        </script>
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
<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>

<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
{{--<script src="dist/js/pages/dashboard2.js"></script>--}}


<script src="../../dist/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
