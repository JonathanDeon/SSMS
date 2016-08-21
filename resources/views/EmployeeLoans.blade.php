<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Customer Management | Register Customer</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
     <a href="welcome" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>AGM</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Auto</b>Gleam</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
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
           <i class="fa fa-car"></i> <span>Service Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="ReservationsService"><i class="fa fa-calendar"></i>Reservations</a></li>
            <li><a href="AssignService"><i class="fa fa-check-square-o"></i>Assign Service</i></a></li>
            <li><a href="ServicePlans"><i class="fa fa-map-o"></i>Service Plans</a></li>
            <li><a href="ServiceLogs"><i class="fa fa-clone"></i>Service Logs</a></li>
            <li><a href="ReportsServices"><i class="fa fa-file-text-o"></i>Service Reports</a></li>
          </ul>
       </li>


        <li class="treeview active">
         <a href="#">
          <i class="fa fa-users"></i><span>Employee Management</span>
          
            <i class="fa fa-angle-left pull-right"></i>
           </span>
           </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-user-plus"></i>Recruitment</a></li>
              <li><a href="EmployeeInformation"><i class="fa fa-book"></i>Information</a></li>
              <li><a href="payroll"><i class="fa fa-dollar"></i>Payroll Management</a></li>
              <li><a href="leave"><i class="fa fa-calendar-minus-o"></i>Attendance</a></li>
              <li class="active"><a href="EmployeeLoans"><i class="fa fa-credit-card"></i>Employee Loans</a></li>
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
   
       <section class="content-header">
            <h1></h1>
            <ol class="breadcrumb">
                <li><a href="/main"><i class="fa fa-user"></i> Employee</a></li>
                <li class="active">Loans</li>
            </ol>
        </section>

        <!-- Main content -->
        <div class="col-md-12" style="background-color: white; margin-left: 10px;">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs" style="background-color:#B1C4E6">
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Loan Schemes</a></li>
                    <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">On-going Employee Loans</a></li>
                    <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Pending for Approval</a></li>
                    <li><a href="#tab_4" data-toggle="tab" aria-expanded="false">All Employee Loans</a></li>
                    <li><a href="#tab_5" data-toggle="tab" aria-expanded="false">New Employee Loan</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane  active" id="tab_1">
                    <div class="row" style="margin-top: 25px">
                        <div class="col-xs-12">
                            <div class="col-xs-2">
                                <button type="button" class="btn btn-block btn-success btn-flat" data-toggle="modal" data-target="#deleteEmp"><i class="ion-android-add-circle"></i>&nbsp;Add Loan Scheme</button>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 25px">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Loan Schemes</h3>

                                    <div class="box-tools">
                                        <div class="input-group input-group-sm" style="width: 400px;">
                                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tbody><tr>
                                            <th>Loan Scheme ID</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Eligibility</th>
                                            <th>Installments</th>
                                            <th>Amount</th>
                                            <th>Interest Rate</th>
                                        </tr>
                                        <tr>
                                            <td>183</td>
                                            <td>Housing Loan</td>
                                            <td>This is a housing loan</td>
                                            <td>Permanent Employees + Basic Salary > 50 000</td>
                                            <td>12</td>
                                            <td>10 000 000</td>
                                            <td>12%</td>
                                            <td><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></td>
                                            <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>183</td>
                                            <td>Housing Loan</td>
                                            <td>This is a housing loan</td>
                                            <td>Permanent Employees + Basic Salary > 50 000</td>
                                            <td>12</td>
                                            <td>10 000 000</td>
                                            <td>12%</td>
                                            <td><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></td>
                                            <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>183</td>
                                            <td>Housing Loan</td>
                                            <td>This is a housing loan</td>
                                            <td>Permanent Employees + Basic Salary > 50 000</td>
                                            <td>12</td>
                                            <td>10 000 000</td>
                                            <td>12%</td>
                                            <td><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></td>
                                            <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>183</td>
                                            <td>Housing Loan</td>
                                            <td>This is a housing loan</td>
                                            <td>Permanent Employees + Basic Salary > 50 000</td>
                                            <td>12</td>
                                            <td>10 000 000</td>
                                            <td>12%</td>
                                            <td><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></td>
                                            <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        </tbody></table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                </div>

                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <div class="row" style="margin-top: 25px">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">On-going Employee Loans</h3>

                                    <div class="box-tools">
                                        <div class="input-group input-group-sm" style="width: 400px;">
                                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tbody><tr>
                                            <th>Loan Scheme</th>
                                            <th>Employee ID</th>
                                            <th>Employee Name</th>
                                            <th>Contact Details</th>
                                            <th>Loan Date</th>
                                            <th>Installments</th>
                                            <th>Total Loan Amount</th>
                                            <th>Amount to be paid</th>
                                            <th>Guarantor</th>
                                        </tr>
                                        <tr>
                                            <td>Housing Loan</td>
                                            <td>EMP001</td>
                                            <td>John Doe</td>
                                            <td>0112-233665</td>
                                            <td>01-02-2010</td>
                                            <td>24</td>
                                            <td>10 000 000</td>
                                            <td>2 005 560</td>
                                            <td>Mary Anne</td>
                                            <td><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></td>
                                            <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Housing Loan</td>
                                            <td>EMP001</td>
                                            <td>John Doe</td>
                                            <td>0112-233665</td>
                                            <td>01-02-2010</td>
                                            <td>24</td>
                                            <td>10 000 000</td>
                                            <td>2 005 560</td>
                                            <td>Mary Anne</td>
                                            <td><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></td>
                                            <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Housing Loan</td>
                                            <td>EMP001</td>
                                            <td>John Doe</td>
                                            <td>0112-233665</td>
                                            <td>01-02-2010</td>
                                            <td>24</td>
                                            <td>10 000 000</td>
                                            <td>2 005 560</td>
                                            <td>Mary Anne</td>
                                            <td><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></td>
                                            <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Housing Loan</td>
                                            <td>EMP001</td>
                                            <td>John Doe</td>
                                            <td>0112-233665</td>
                                            <td>01-02-2010</td>
                                            <td>24</td>
                                            <td>10 000 000</td>
                                            <td>2 005 560</td>
                                            <td>Mary Anne</td>
                                            <td><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></td>
                                            <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        </tbody></table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                    <div class="row" style="margin-top: 25px">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Pending</h3>
                                    <div class="box-tools">
                                        <div class="input-group input-group-sm" style="width: 400px;">
                                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tbody><tr>
                                            <th>Loan Scheme</th>
                                            <th>Employee ID</th>
                                            <th>Employee Name</th>
                                            <th>Contact Details</th>
                                            <th>Loan Date</th>
                                            <th>Installments</th>
                                            <th>Total Loan Amount</th>
                                            <th>Guarantor</th>
                                            <th>Status</th>
                                        </tr>
                                        <tr>
                                            <td>Housing Loan</td>
                                            <td>EMP001</td>
                                            <td>John Doe</td>
                                            <td>0112-233665</td>
                                            <td>01-02-2010</td>
                                            <td>24</td>
                                            <td>10 000 000</td>
                                            <td>Mary Anne</td>
                                            <td><span class="label label-warning">Pending</span></td>
                                            <td><button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i></button></td>
                                            <td><button type="button" class="btn btn-danger btn-sm" onclick="alerts()"><i class="fa fa-close"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Housing Loan</td>
                                            <td>EMP001</td>
                                            <td>John Doe</td>
                                            <td>0112-233665</td>
                                            <td>01-02-2010</td>
                                            <td>24</td>
                                            <td>10 000 000</td>
                                            <td>Mary Anne</td>
                                            <td><span class="label label-warning">Pending</span></td>
                                            <td><button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i></button></td>
                                            <td><button type="button" class="btn btn-danger btn-sm" onclick="alerts()"><i class="fa fa-close"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Housing Loan</td>
                                            <td>EMP001</td>
                                            <td>John Doe</td>
                                            <td>0112-233665</td>
                                            <td>01-02-2010</td>
                                            <td>24</td>
                                            <td>10 000 000</td>
                                            <td>Mary Anne</td>
                                            <td><span class="label label-warning">Pending</span></td>
                                            <td><button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i></button></td>
                                            <td><button type="button" class="btn btn-danger btn-sm" onclick="alerts()"><i class="fa fa-close"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Housing Loan</td>
                                            <td>EMP001</td>
                                            <td>John Doe</td>
                                            <td>0112-233665</td>
                                            <td>01-02-2010</td>
                                            <td>24</td>
                                            <td>10 000 000</td>
                                            <td>Mary Anne</td>
                                            <td><span class="label label-warning">Pending</span></td>
                                            <td><button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i></button></td>
                                            <td><button type="button" class="btn btn-danger btn-sm" onclick="alerts()"><i class="fa fa-close"></i></button></td>
                                        </tr>
                                        </tbody></table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_4">
                    <div class="row" style="margin-top: 25px">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">All Employee Loans</h3>
                                    <div class="box-tools">
                                        <div class="input-group input-group-sm" style="width: 400px;">
                                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tbody><tr>
                                            <th>Loan Scheme</th>
                                            <th>Employee ID</th>
                                            <th>Employee Name</th>
                                            <th>Contact Details</th>
                                            <th>Loan Date</th>
                                            <th>Installments</th>
                                            <th>Total Loan Amount</th>
                                            <th>Guarantor</th>
                                            <th>Status</th>
                                        </tr>
                                        <tr>
                                            <td>Housing Loan</td>
                                            <td>EMP001</td>
                                            <td>John Doe</td>
                                            <td>0112-233665</td>
                                            <td>01-02-2010</td>
                                            <td>24</td>
                                            <td>10 000 000</td>
                                            <td>Mary Anne</td>
                                            <td><span class="label label-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>Housing Loan</td>
                                            <td>EMP001</td>
                                            <td>John Doe</td>
                                            <td>0112-233665</td>
                                            <td>01-02-2010</td>
                                            <td>24</td>
                                            <td>10 000 000</td>
                                            <td>Mary Anne</td>
                                            <td><span class="label label-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>Housing Loan</td>
                                            <td>EMP001</td>
                                            <td>John Doe</td>
                                            <td>0112-233665</td>
                                            <td>01-02-2010</td>
                                            <td>24</td>
                                            <td>10 000 000</td>
                                            <td>Mary Anne</td>
                                            <td><span class="label label-danger">Declined</span></td>
                                        </tr>
                                        <tr>
                                            <td>Housing Loan</td>
                                            <td>EMP001</td>
                                            <td>John Doe</td>
                                            <td>0112-233665</td>
                                            <td>01-02-2010</td>
                                            <td>24</td>
                                            <td>10 000 000</td>
                                            <td>Mary Anne</td>
                                            <td><span class="label label-success">Approved</span></td>
                                        </tr>
                                        </tbody></table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_5">
                    <div class="row" style="margin-top: 25px">
                        <div class="col-xs-6">
                            <div class="box box-warning">
                                <div class="box-body">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Loan ID:</label>
                                            <input type="text" class="form-control" placeholder="Enter Loan ID">
                                            <label>Employee ID:</label>
                                            <input type="text" class="form-control" placeholder="Enter Employee ID">
                                            <label>Employee Name:</label>
                                            <input type="text" class="form-control" placeholder="Enter Employee Name">
                                            <label>Contact Number:</label>
                                            <input type="text" class="form-control" placeholder="Enter Contact Number">
                                            <div class="form-group">
                                                <label>Installments</label>
                                                <select class="form-control">
                                                    <option>12</option>
                                                    <option>24</option>
                                                    <option>36</option>
                                                </select>
                                            </div>
                                            <label>Total Loan Amount:</label>
                                            <input type="text" class="form-control" placeholder="Enter Loan Amount">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="box box-warning">
                                <div class="box-body">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Guarantor Name:</label>
                                            <input type="text" class="form-control" placeholder="Enter Name">
                                            <label>Guarantor Designation:</label>
                                            <input type="text" class="form-control" placeholder="Enter Designation">
                                            <label>Guarantor Contact Number:</label>
                                            <input type="text" class="form-control" placeholder="Enter Contact Number">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box-body -->
                                <div style="align-content: center;">
                                    <button type="button" class="btn btn-block btn-primary btn-flat" style="margin-left: 50%; width: 25%">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
            </div>
        </div>

        </div>
        <script>
            function alerts() {
                swal({   title: "Are you sure you want to delete?",   text: "You will not be able to recover this record!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Delete",   closeOnConfirm: false }, function(){   swal("Deleted!", "Employee Record has been deleted", "success"); });
            }
            function success() {
                swal("Accepted!", "","success")
            }
        </script>


      
  </div>

<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script>
    function alerts() {
                swal({   title: "Are you sure you want to delete?",   text: "You will not be able to recover this record!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Delete",   closeOnConfirm: false }, function(){   swal("Deleted!", "Employee Record has been deleted", "success"); });
            }

    function success() {
                swal("Successful", "Data Successfully Saved!", "success")
    }
</script>
</body>
</html>
