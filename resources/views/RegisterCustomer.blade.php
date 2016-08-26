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
        
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-user"></i> <span>Customer Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="RegisterCustomer"><i class="fa fa-user-plus"></i> Register Customer</a></li>
            <li><a href="CustomerLoyalty"><i class="fa fa-thumbs-o-up"></i> Customer Loyalty</a></li>
            <li><a href="Feedback"><i class="fa fa-commenting"></i>Customer Feedback</a></li>
            <li><a href="Reports"><i class="fa fa-file-text"></i>Reports</a></li>
            <li><a href="CustomerDeficit"><i class="fa fa-minus-square"></i>Customer Deficits</a></li>
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
            <li><a href="AssignService"><i class="fa fa-check-square-o"></i>Assign Service</a></li>
            <li><a href="ServicePlans"><i class="fa fa-map-o"></i>Service Plans</a></li>
            <li><a href="ServiceLogs"><i class="fa fa-clone"></i>Service Logs</a></li>
            <li><a href="ReportsServices"><i class="fa fa-file-text-o"></i>Service Reports</a></li>
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
        Register Customer
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Customer Management</a></li>
        <li class="active">Register Customer</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-xs-12">

          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Basic Information</h3>
            </div>
             <form role="form">
           
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  <label for="EnterCusname">Full Name</label>
                  <input type="text" class="form-control" id="CusName" placeholder="Enter Name" size="10">
                </div>

                <div class="form-group">
                  <label for="EnterCusEmail1">Email address</label>
                  <input type="email" class="form-control" id="CusEmail" placeholder="Enter email">
                </div>

                <div class="form-group">
                  <label for="Cusnumber">Telephone</label>
                  <input type="phone" class="form-control" id="Custele" placeholder="Telephone">
                </div> 

                <div class="form-group">
                  <label for="EnterCusname">Address Line 1</label>
                  <input type="text" class="form-control" id="CusName" placeholder="Enter Address Line 1" size="10">
                </div>

                <div class="form-group">
                  <label for="EnterCusname">Address Line 2</label>
                  <input type="text" class="form-control" id="CusName" placeholder="Enter Address Line 2" size="10">
                </div>

                <div class="form-group">
                  <label for="EnterCusname">Address Line 3</label>
                  <input type="text" class="form-control" id="CusName" placeholder="Enter Address Line 3" size="10">
                </div>
              

      
               </div>
                 <div class="col-md-6" position=50%>              

                <div class="form-group">
                  <label for="GenCusID">Customer ID</label>
                  <input type="text" class="form-control" id="CusIdGen" placeholder="Customer ID" disabled="">
                </div>

                 <div class="form-group">
                  <label for="enterNIC">NIC No.</label>
                  <input type="text" class="form-control" id="NIC" placeholder="Enter NIC">
                </div>  

                <div class="form-group">
                  <label for="EnterCusPassword1">Password</label>
                  <input type="password" class="form-control" id="CusPassword1" placeholder="Password">
                </div>

                <div class="form-group">
                  <label for="EnterCusPassword2">Confirm Password</label>
                  <input type="password" class="form-control" id="CusPassword2" placeholder="Confirm Password">
                </div>    
          
               </div>
              </div>
             
            </form>
          </div>    
          </div>
          </section>


          <section class="content" class="cold-md-6">
          <div class="row">
          <div class="col-md-6">
          
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Vehicle Details</h3>
            </div>

             <form role="form">
            <!-- /.box-header -->
            <div class="box-body">
       
              
                
      <div class="nav-tabs-custom" >
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Vehicle Details</a></li>
            </ul>
            <div class="tab-content">

              <div class="tab-pane active" id="tab_1">
             
            <div class="form-group" style="width: 100px;">
                <label>Vehicle Type</label>
                  <select class="form-control">
                    <option>Car</option>
                    <option>SUV</option>
                    <option>Bike</option>
                    <option>Van</option>
                    <option>Truck</option>
                  </select>
            </div>
            
              
            <div class="form-group" style="width:300px;">
                  <label for="enterVmake">Make</label>
                  <input type="text" class="form-control" id="vMake" placeholder="Enter Vehicle Make">
            </div>  

            <div class="form-group" style="width:300px;">
                  <label for="enterVmodel">Model</label>
                  <input type="text" class="form-control" id="vModel" placeholder="Enter Vehicle Model">
            </div>    

            <div class="form-group" style="width:300px;">
                  <label for="enterVnum">Number Plate</label>
                  <input type="text" class="form-control" id="vnumbP" placeholder="Enter Vehicle Number Plate">
            </div>    
    
            <div class="box-footer" align="right">
                <button type="button" class="btn btn-block btn-primary" style="width:100px;" onclick="success()">Submit</button>
            </div>

              </div>
           
              <!-- /.tab-pane -->
              
            </div>
           
      </div> 
             
              
            </div>
            </form>
            
          </div>
          
          </div>

           <div class="col-md-6">    
      <section>
      
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit/ Delete Customer Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" style="width: 50px;">Customer ID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 361px;">Customer Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">Telephone</th>
                </thead>
                <tbody>
                               
                <tr role="row" class="odd">
                  <td class="sorting_1">CUS001</td>
                  <td>Thomas Wickramasinghe</td>
                  <td>0112729729</td>
                  <td> <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button></td>
                  <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></button></td>
                </tr>

                <tr role="row" class="odd">
                  <td class="sorting_1">CUS001</td>
                  <td>Thomas Wickramasinghe</td>
                  <td>0112729729</td>
                  <td> <button type="button" class="btn btn-success""><i class="fa fa-edit"></i></button></td>
                  <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></button></td>
                  </tr>

                <tr role="row" class="odd">
                  <td class="sorting_1">CUS001</td>
                  <td>Thomas Wickramasinghe</td>
                  <td>0112729729</td>
                  <td> <button type="button" class="btn btn-success""><i class="fa fa-edit"></i></button></td>
                  <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></button></td>
                  </tr>

                <tr role="row" class="odd">
                  <td class="sorting_1">CUS001</td>
                  <td>Thomas Wickramasinghe</td>
                  <td>0112729729</td>
                  <td> <button type="button" class="btn btn-success""><i class="fa fa-edit"></i></button></td>
                  <td><button type="button" class="btn btn-danger" onclick="alerts()"><i class="fa fa-trash"></button></td>
                </tr>
                  
                
                </tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Customer ID</th><th rowspan="1" colspan="1">Customer Name</th><th rowspan="1" colspan="1">Telephone</th>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-8"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
         </section>
         </div>


          </div>

          </section>
       

      
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
