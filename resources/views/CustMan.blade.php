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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script src="../../dist/js/demo.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"> </script>
  
  <style>
            .btn-floating {
                display: inline-block;
                color: #fff;
                position: relative;
                overflow: hidden;
                z-index: 1;
                width: 37px;
                height: 37px;
                line-height: 37px;
                padding: 0;
                background-color: #26a69a;
                border-radius: 50%;
                transition: .3s;
                cursor: pointer;
                vertical-align: middle;
            }
            .btn-floating i {
                width: inherit;
                display: inline-block;
                text-align: center;
                color: #fff;
                font-size: 1.6rem;
                line-height: 37px;
            }

            .btn-floating:hover {
                background-color: #26a69a;
            }

            .btn-floating:before {
                border-radius: 0;
            }

            .btn-floating.btn-large {
                width: 55.5px;
                height: 55.5px;
            }

            .btn-floating.btn-large i {
                line-height: 55.5px;
            }

            button.btn-floating {
                border: none;
            }
            .fixed-action-btn {
                position: fixed;
                right: 23px;
                bottom: 23px;
                padding-top: 15px;
                margin-bottom: 0;
                z-index: 998;
            }

            .fixed-action-btn.active ul {
                visibility: visible;
            }

            .fixed-action-btn.horizontal {
                padding: 0 0 0 15px;
            }

            .fixed-action-btn.horizontal ul {
                text-align: right;
                right: 64px;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                height: 100%;
                left: initial;
                width: 500px;
                /*width 100% only goes to width of button container */
            }

            .fixed-action-btn.horizontal ul li {
                display: inline-block;
                margin: 15px 15px 0 0;
            }

            .fixed-action-btn ul {
                left: 0;
                right: 0;
                text-align: center;
                position: absolute;
                bottom: 64px;
                margin: 0;
                visibility: hidden;
            }

            .fixed-action-btn ul li {
                margin-bottom: 15px;
            }

            .fixed-action-btn ul a.btn-floating {
                opacity: 0;
            }
            .btn-large {
                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            }
            .circle {
                border-radius: 150em;
                border: 0px solid #B7B1B1;
                box-shadow: 0px 5px 2px rgba(0, 0, 0, 0.3); 
            }
            .circle:hover {
                box-shadow: 0px 7px 2px rgba(0, 0, 0, 0.3); 
            }

        </style>



  
 
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
            <li><a href="AssignService"><i class="fa fa-check-square-o"></i>Assign Service</i></a></li>
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
              <li><a href="#"><i class="fa fa-user-plus"></i>Recruitment</a></li>
              <li><a href="EmployeeInformation"><i class="fa fa-book"></i>Information</a></li>
              <li><a href="payroll"><i class="fa fa-dollar"></i>Payroll Management</a></li>
              <li><a href="leave"><i class="fa fa-calendar-minus-o"></i>Attendance</a></li>
              <li><a href="EmployeeLoans"><i class="fa fa-credit-card"></i>Employee Loans</a></li>
            </ul>
       </li>

      
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i>Janitorial Service Management<span></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="emp">Employee Managment</a></li>
            <li><a href="cust">Customer Managment</a></li>
            <li><a href="package">Categories</a></li>
            <li><a href="order">Order Managment</a></li>
          </ul>
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

      <div class="main">
      <div class="container-fluid">
        <div class="clearfix"></div>
        <br>
        <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
              <div class="col-sm-6">
                  <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;">Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Address</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Contact Number</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;">Contact Person</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">E-mail</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">NIC</th></tr>
                  </thead>               
                  <tbody>
                    @foreach ($customer as $customer) 
                          <tr role="row" class="odd">
                            <td class="sorting_1">{{ $customer->name }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->contactNo }}</td>
                            <td>{{ $customer->contactPerson }}</td>
                            <td>{{ $customer->mail }}</td>
                            <td>{{ $customer->nic }}</td>
                            <td><button class="btn btn-danger" value="{{$customer->cus_id}}"  onclick="deleteCustomer('{{$customer->cus_id}}')">Delete</button></td>
                          </tr>
                        @endforeach
                  </tbody>

                  </table></div></div>

                  <script>

                        function deleteCustomer(cus_id) {
                              swal({
                                title: "Are you sure you want to delete?",
                                text: "You will not be able to recover this record!",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "Delete",
                                closeOnConfirm: false },

                              function(confirm){
                                if(confirm) {
                                
                                  $.ajax({
                                  method:'get',
                                  url:'deleteCustomer',
                                  data:{cus_id:cus_id},
                                  success:function(){
                                    swal({
                                        title: "Deleted!",
                                        text: "Successfully deleted the employee record!",
                                        type: "warning",
                                        showCancelButton: false,
                                        confirmButtonColor: "#DD6B55",
                                        confirmButtonText: "Ok",
                                        closeOnConfirm: false },
                                            function (confirm) {
                                                location.reload();
                                            });
                                },
                                error:function(x,y,thrownError){
                                    console.log(thrownError);
                                }
                              });
                            }
                            else{
                            }
                          }
                          );
                          }
    
                          function success() {
                            swal("Successful", "Data Successfully Saved!", "success")
                            location.reload();
                          } 
                        </script>

                  <div class="row"><div class="col-sm-5"></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                    </div>
                                    
                                    <div class="fixed-action-btn" style="bottom: 55px; right: 24px;">
                                        <a class="btn-floating btn-large" rel="tooltip" title="Add New Customer" data-toggle="modal" data-target="#customerModal" style=" background-color: #F44336" data-toggle="modal" data-target="#caseModal">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>

                                    <!-- Customer Modal -->
                                    <div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">New Customer</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
<!--                                                        <div class="col-md-12 nopadding" style="margin-right: -13px;">
                                                            <div class="alert alert-danger" id="err_msg1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 nopadding" style="margin-right: -13px;">
                                                            <div class="alert alert-success" id="success_msg1">
                                                            </div>
                                                        </div>-->
                                  <form role="form" method="POST" action="{{url('addCust')}}"> 
                                  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                                  <!-- <div class="row">
                                  <div class="form-group">
                                    <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Customer ID</div>
                                      <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                      <input id="custid" name="custid" type="text" placeholder="" class="form-control input-md" required>      
                                      </div>
                                  </div>
                                  </div><br /> -->

                                  <div class="row">
                                  <div class="form-group">
                                  <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Name</div>
                                  <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required>
                                  </div>
                                  </div>
                                  </div><br />

                                  <div class="row">
                                  <div class="form-group">
                                  <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Address</div>
                                  <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                  <input id="address" name="address" type="text" placeholder="" class="form-control input-md" required>
                                  </div>
                                  </div>
                                  </div><br />

                                  <div class="row">
                                  <div class="form-group">
                                  <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Contact Number</div>
                                  <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                  <input id="contactNo" name="contactNo" type="number" min="0" placeholder="" class="form-control input-md" required></div>
                                  </div>
                                  </div><br />

                                  <div class="row">
                                  <div class="form-group">
                                  <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Contact Person</div>
                                  <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                  <input id="contactPerson" name="contactPerson" type="text" placeholder="" class="form-control input-md" required></div>
                                  </div>
                                  </div><br />

                                  <div class="row">
                                  <div class="form-group">
                                  <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">E-mail</div>
                                  <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                  <input id="mail" name="mail" type="email" placeholder="" class="form-control input-md" required>  </div>
                                  </div>
                                  </div><br />

                                  <div class="row">
                                  <div class="form-group">
                                  <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">NIC</div>
                                  <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                  <input id="nic" name="nic" type="text" placeholder="" min="0" class="form-control input-md" required>     
                                  </div>
                                  </div>
                                  </div><br />

                                  <div class="row">
                                  <div class="form-group">
                                  <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Password</div>
                                  <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                                  <input id="pwd" name="pwd" type="password" placeholder="" class="form-control input-md" required></div>
                                  </div>
                                  </div><br />
                                                        
                                  </div>
                                </div>
                              <div class="modal-footer">
                              <button type="button" class="close-popup btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" onclick="addCaseType()">Add</button>
                              </div>
                              <input id="case_id" name="case_id" type="text" hidden="">
                            </div>
                         </div>
                      </div>
          
      </div> 
                        
    </div>


      
      </section>


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




</body>
</html>
