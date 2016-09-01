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
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css"
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
            <li><a href="RegisterCustomer"><i class="fa fa-user-plus"></i> Register Customer</a></li>
            <li class="active"><a href="CustomerLoyalty"><i class="fa fa-thumbs-o-up"></i> Customer Loyalty</a></li>
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
        Customer Loyalty Management
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Customer Management</a></li>
        <li class="active">Customer Loyalty Management</li>>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-xs-12">

          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Manage Special Offers</h3>
            </div>
             <form role="form" method="POST" action="{{url('CustomerLoyalty')}}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
           
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
               <div class="col-md-6">

                 <div class="form-group">
                 
                  <label>Customer Name</label>
                  <select class="form-control" name="cusname" id="cusname">
                  <option></option>
                  @foreach ($customers as $customer)
                    <option value="{{$customer->cus_id}}">{{$customer->name}}</option> 
                  @endforeach
                  </select>
                </div>
                
                  <div class="form-group">
                <label>Discount Rate (Percentage %)</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 15%;" tabindex="-1" aria-hidden="true" name="discount">
                  <option selected="selected">0</option>
                  <option>5</option> 
                  <option>10</option>
                  <option>20</option>
                  <option>100</option>
                </select>
              </div>
        
               </div>

                 <div class="col-md-6" position=50%>              
            
                    <div class="form-group">
                    <label>Customer ID</label>
                    
                    <input type="text" class="form-control" disabled="" name="cusid" id="cusid">
                  
                    </div>
      
                    <div class="form-group">
                      <label>From:</label>

                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input class="form-control" id="datepicker" name="from" type="date">
                      </div>
                      <!-- /.input group -->
                    </div>

                    <div class="form-group">
                      <label>To: </label>

                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input class="form-control pull-right" id="datepicker" name="to" type="date" data-date-format="DD MMMM YYYY">
                      </div>
                      <!-- /.input group -->
                    </div>

                    <div class="input-group-btn">
                  <button type="submit" class="btn btn-block btn-primary" style="width:100px; float:right; margin-top:5%;" >Save</button>
                  </div>
                  </div>
                </div> 
                </form>       
               </div>
              </div>

          </div>

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="dataTables_wrapper form-inline dt-bootstrap" id="example1_wrapper"><div class="row"><div class="col-sm-6"><div id="example1_length" class="dataTables_length"><label>Show <select class="form-control input-sm" aria-controls="example1" name="example1_length"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div class="dataTables_filter" id="example1_filter"><label>Search:<input aria-controls="example1" placeholder="" class="form-control input-sm" type="search"></label></div></div></div><div class="row"><div class="col-sm-12"><table aria-describedby="example1_info" role="grid" id="example1" class="table table-bordered table-striped dataTable">
                                <thead>
                                <tr role="row"><th aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" style="width: 181px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting_asc">Rendering engine</th><th aria-label="Browser: activate to sort column ascending" style="width: 224px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">Browser</th><th aria-label="Platform(s): activate to sort column ascending" style="width: 198px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">Platform(s)</th><th aria-label="Engine version: activate to sort column ascending" style="width: 155px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">Engine version</th><th aria-label="CSS grade: activate to sort column ascending" style="width: 110px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">CSS grade</th></tr>
                                </thead>
                                <tbody>

























































                                <tr class="odd" role="row">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Firefox 1.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.7</td>
                                    <td>A</td>
                                </tr><tr class="even" role="row">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr><tr class="odd" role="row">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Firefox 2.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr><tr class="even" role="row">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Firefox 3.0</td>
                                    <td>Win 2k+ / OSX.3+</td>
                                    <td>1.9</td>
                                    <td>A</td>
                                </tr><tr class="odd" role="row">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr><tr class="even" role="row">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Camino 1.5</td>
                                    <td>OSX.3+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr><tr class="odd" role="row">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Netscape 7.2</td>
                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                                    <td>1.7</td>
                                    <td>A</td>
                                </tr><tr class="even" role="row">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Netscape Browser 8</td>
                                    <td>Win 98SE+</td>
                                    <td>1.7</td>
                                    <td>A</td>
                                </tr><tr class="odd" role="row">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Netscape Navigator 9</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr><tr class="even" role="row">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Mozilla 1.0</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td>1</td>
                                    <td>A</td>
                                </tr></tbody>
                                <tfoot>
                                <tr><th colspan="1" rowspan="1">Rendering engine</th><th colspan="1" rowspan="1">Browser</th><th colspan="1" rowspan="1">Platform(s)</th><th colspan="1" rowspan="1">Engine version</th><th colspan="1" rowspan="1">CSS grade</th></tr>
                                </tfoot>
                            </table></div></div><div class="row"><div class="col-sm-5"><div aria-live="polite" role="status" id="example1_info" class="dataTables_info">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div id="example1_paginate" class="dataTables_paginate paging_simple_numbers"><ul class="pagination"><li id="example1_previous" class="paginate_button previous disabled"><a tabindex="0" data-dt-idx="0" aria-controls="example1" href="#">Previous</a></li><li class="paginate_button active"><a tabindex="0" data-dt-idx="1" aria-controls="example1" href="#">1</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="2" aria-controls="example1" href="#">2</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="3" aria-controls="example1" href="#">3</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="4" aria-controls="example1" href="#">4</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="5" aria-controls="example1" href="#">5</a></li><li class="paginate_button "><a tabindex="0" data-dt-idx="6" aria-controls="example1" href="#">6</a></li><li id="example1_next" class="paginate_button next"><a tabindex="0" data-dt-idx="7" aria-controls="example1" href="#">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
        </div>


        <div class="row">
            <div class="col-xs-12">

                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Manage Special Offers</h3>
                    </div>
                    <form role="form" method="POST" action="{{url('CustomerLoyalty')}}">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <!-- /.box-header -->
                        <!-- form start -->

                        <div class="box-body">
                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>Customer Name</label>
                                    <select class="form-control" name="cusname" id="cusname">
                                        <option></option>
                                        @foreach ($customers as $customer)
                                            <option value="{{$customer->cus_id}}">{{$customer->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Discount Rate (Percentage %)</label>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 15%;" tabindex="-1" aria-hidden="true" name="discount">
                                        <option selected="selected">0</option>
                                        <option>5</option>
                                        <option>10</option>
                                        <option>20</option>
                                        <option>100</option>
                                    </select>
                                </div>

                            </div>

                            <div class="col-md-6" position=50%>

                                <div class="form-group">
                                    <label>Customer ID</label>

                                    <input type="text" class="form-control" disabled="" name="cusid" id="cusid">

                                </div>

                                <div class="form-group">
                                    <label>From:</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input class="form-control" id="datepicker" name="from" type="date">
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                    <label>To: </label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input class="form-control pull-right" id="datepicker" name="to" type="date" data-date-format="DD MMMM YYYY">
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-block btn-primary" style="width:100px; float:right; margin-top:5%;" >Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            </div>


        </div>
    
          
        </section>
         
      </div>

<script type="text/javascript">
  $( "#cusname" ).change(function() {
  $val=$( "#cusname" ).val();
  
  $("#cusid").val($val);
//subtotal').val(data);
});

</script>




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
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>  
</body>
</html>
