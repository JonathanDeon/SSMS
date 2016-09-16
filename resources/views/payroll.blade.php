<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employee Management | Payroll</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
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
                        <li><a href="reservations"><i class="fa fa-calendar-minus-o"></i> <span>Reservations</span></a></li>
                        <li><a href="assignments"><i class="fa fa-male"></i> <span>Assignments</span></a></li>
                        <li><a href="plans"><i class="fa fa-check-square"></i> <span>Service Plans</span></a></li>
                        <li><a href="logs"><i class="fa fa-file-text-o"></i> <span>Logs</span></a></li>
                        <li><a href="reports"><i class="fa fa-pencil-square-o"></i> <span>Reports</span></a></li>
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
                    <ul class="treeview-menu">
                        <li><a href="emp">Employee Managment</a>
                        </li>
                        <li><a href="cust">Customer Managment</a>
                        </li>
                        <li><a href="package">Categories</a>
                        </li>
                        <li><a href="order">Order Managment</a>
                        </li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-money"></i><span>Finance Management</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="assets"><i class="fa fa-building"></i>Asset Management</a></li>
                        <li><a href="assetDep"><i class="fa fa-tasks"></i>Asset Depreciation Information</a></li>
                        <li><a href="liabilities"><i class="fa fa-plus-circle"></i>Liability Management</a></li>
                        <li><a href="liabilityInterest"><i class="fa fa-object-group"></i>Liability Interest Information</a></li>
                        <li><a href="income"><i class="fa fa-files-o"></i>Income Management</a></li>
                        <li><a href="expense"><i class="fa fa-credit-card"></i>Expenditure Management</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-cube"></i><span>Inventory Management</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="AddNewItem"><i class="fa fa-plus"></i>Add New Item</a></li>
                        <li><a href="Inventory"><i class="fa fa-cubes"></i>Inventory</a></li>
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
                        <li><a href="CreateShifts"><i class="fa fa-male"></i>Create Shifts</a></li>
                        <li><a href="AssignEmployees"><i class="fa fa-plus-circle"></i>Assign Employees</a></li>
                        <li><a href="ReplaceEmployees"><i class="fa fa-exchange"></i>Replace Employees</a></li>
                        <li><a href="RemoveEmployees"><i class="fa fa-fw fa-close">&nbsp;&nbsp;&nbsp;</i>Remove Employees</a></li>
                        <li><a href="EfficiencyAnalysis"><i class="fa fa-fw fa-bar-chart">&nbsp;&nbsp;&nbsp;</i>Efficiency Analysis</a></li>
                        <li><a href="OverWorkedEmployees"><i class="fa fa-fw fa-calendar-minus-o">&nbsp;&nbsp;&nbsp;</i>Over Worked Employees</a></li>
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
                    {{--<li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Monthly Salary Details</a></li>--}}
                    {{--<li><a href="#tab_4" data-toggle="tab" aria-expanded="false">Employee Fund Details</a></li>--}}
                </ul>
            </div>
            <script>
                function updateSalary(){
                    var designation = document.getElementById('designation').value;
                    var basic = document.getElementById('basic').value;
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
                <div class="tab-pane" id="tab_3">
                    <div class="box-body table-responsive no-padding">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-xs-2">
                                    <a onclick="window.open('AllEmployeesReport')"><button type="button" class="btn btn-block btn-success btn-flat">Export to PDF</button></a>
                                </div>
                            </div>
                        </div>
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
                <div class="tab-pane" id="tab_2">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="payroll-monthly-records-table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" style="width: 181px;">Employee Id</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 224px;">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 224px;">ETF 3%</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 197px;">Epf 8%</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 154px;">Epf 12%</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 112px;">Net Salary</th>
                                                {{--<th rowspan="1" style="width: 112px;"></th>--}}
                                                {{--<th rowspan="1" style="width: 112px;"></th>--}}
                                                {{--<th rowspan="1" style="width: 112px;"></th>--}}

                                            </tr>
                                            </thead>
                                            <tbody id="payroll-monthly-records-tbody">

                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button previous disabled" id="example1_previous">
                                                    <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
                                                </li>
                                                <li class="paginate_button active">
                                                    <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
                                                </li>
                                                <li class="paginate_button ">
                                                    <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
                                                </li>
                                                <li class="paginate_button ">
                                                    <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>
                                                </li>
                                                <li class="paginate_button ">
                                                    <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
                        </div>


                        <!-- /.box-body -->
                    </div>
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

  <script src="plugins/datatables/jquery.dataTables.min.js"></script>

<script src="../../dist/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
  <script>
//      $('document').ready(function () {
          $('#payroll-monthly-records-table').DataTable({

              responsive: true,
              "ajax": {
                  "type": "get",
                  "url": "getEmployeeMonthlySalaryReport",


              },
              "pageLength": 100,


              columns: [
                  {"data": "empId"},
                  {"data": "name"},
                  {"data": "etf3"},
                  {"data": "epf8"},
                  {"data": "epf12"},
                  {"data": "netSalary"}

              ]


          });
//      });
  </script>
</body>
</html>
