<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">



  <!--sweet alerts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
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
<body class="hold-transition skin-blue sidebar-mini">
<script type="text/javascript">
    function successadd(field) {
                swal("Added Successfully", "Employee has been added to the service", "success");
    }
    function emptyField(field) {
                swal("Empty Field", "You cannot have one or more fields empty", "warning");
    }
    function notNumber(field) {
                swal("Not Numeric", "You can only input numeric values", "warning");
    }


    function formValidate(){

       var emp = document.getElementById('empid').value;
       var serve = document.getElementById('servid').value;
       
      

        if(!isEmpty(emp))
          if(!isEmpty(serve))
                  if(isdigit(emp))
                      if(isdigit(serve))

                    return true;
                  
                  else
                    return false;  
                  else
                    return false;
                  else
                    return false;
                  else
                    return false;
                  
        }
    
    function isdigit(elem)
    {
       
       if(isNaN(elem))
       {  alert("input should be numeric");
          return false;
       }
       else
          return true;
    }


    function isEmpty(elem,field) {

        if(elem == "")
        {   emptyField(field);
           //alert("You cannot have one or multiple fields Empty");
           return true;
        }
        else
        {
          return false;
        }  
    } 

















</script>




<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Service</b>Management</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      
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

        <li class="treeview active">
          <a href="#">
            <i class="fa fa-user"></i> <span>Service Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="welcome"><i class="fa fa-calendar-minus-o"></i> <span>Reservations</span></a></li>
            <li class="active"><a href="assignments"><i class="fa fa-male"></i> <span>Assignments</span></a></li>
            <li><a href="plans"><i class="fa fa-check-square"></i> <span>Service Plans</span></a></li>
            <li><a href="logs"><i class="fa fa-file-text-o"></i> <span>Logs</span></a></li>
            <li><a href="reports"><i class="fa fa-pencil-square-o"></i> <span>Reports</span></a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i><span>Employee Management</span>

            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="AddEmployee"><i class="fa fa-user-plus"></i>Recruitment</a></li>
            <li><a href="EmployeeInformation"><i class="fa fa-book"></i>Information</a></li>
            <li><a href="payroll"><i class="fa fa-dollar"></i>Payroll Management</a></li>
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
            <li><a href="AssignEmployee"><i class="fa fa-male"></i>Assign Employees</a></li>
            <li><a href="create"><i class="fa fa-plus-circle"></i>Create Shifts</a></li>
            <li><a href="replace"><i class="fa fa-exchange"></i>Replace Employee</a></li>

          </ul>
        </li>
      </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <p class="lead">
        Employee Assignments
        
      </p>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Available Employees</span>
              <span class="info-box-number">@foreach($emps as $emp)   
                  <p>{{ $emp->empcount }}</p>
                @endforeach</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>



        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-user-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Employee Assignment Requests</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        


        

      <div class="col-md-12">
          <div class="box box-warning collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Available Employee Details</h3>



              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
              <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Employee ID</th>
                  <th>Employee Name</th>
                  <th>Status</th>
                </tr>
                @foreach($assigns as $assign)
                <tr>
                  <td>{{ $assign->eid }}</td>
                  <td>{{ $assign->name }}</td>
                  <td><span class="label label-success">Available</span></td>
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>








        <div class="col-md-12">
          <div class="box box-success collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Employee Requests</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>





            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>









<div class="row">
        
      </div>







      <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Assign Employee to a service</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="addassignment" name="addassignment" id="addassignment" onsubmit="return formValidate()">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Employee ID</label>

                  <div class="col-sm-10">
                    <input type="text" min="0" class="form-control" id="empid" placeholder="Name" name="empid">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Service ID</label>

                  <div class="col-sm-10">
                    <input type="text" min="0" class="form-control" id="servid" placeholder="Service" name="servid">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Assign</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>










    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
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
