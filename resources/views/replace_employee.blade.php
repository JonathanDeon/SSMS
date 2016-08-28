<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Replace Employees</title>
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

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


 
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
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Auto</b>Gleam</span>
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

              <li class="treeview active">
                  <a href="#">
                      <i class="fa fa-user"></i> <span>Customer Management</span>
                      <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="RegisterCustomer"><i class="fa fa-user-plus"></i> Register Customer</a></li>
                      <li><a href="CustomerLoyalty"><i class="fa fa-thumbs-o-up"></i> Customer Loyalty</a></li>
                      <li><a href="Feedback"><i class="fa fa-commenting"></i>Customer Feedback</a></li>
                      <li><a href="Reports"><i class="fa fa-file-text"></i>Reports</a></li>
                      <li class="active"><a href="CustomerDeficit"><i class="fa fa-minus-square"></i>Customer Deficits</a></li>
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
        Replace Employees
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="main">

    <div  class="row">

      <h4 style="margin-left:40px">Unavailable Employees</h4>


        <div class="col-lg-3 col-xs-6" style="margin-left:50px">
          <!-- small box -->
          <div class="small-box bg-red">

            <div class="inner">
              <h3>11</h3>

              <p>Branch 1</p>
            </div>



            <div class="icon">
              <i class="fa fa-fw fa-user-times"></i>
            </div>

            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>

        </div>

        <div class="col-lg-3 col-xs-6" style="margin-left:50px">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>7</h3>

              <p>Branch 2</p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-user-times"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6" style="margin-left:50px">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>3</h3>

              <p>Branch 3</p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-user-times"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
  </div>

  <div>

     <div class="box box-danger">
              <div class="box-header with-border">
              <h3 class="box-title">Replacing Unavailable Employees</h3>
              </div>

              <div class="box-body">
            
            <div class="row">
            <div class="col-md-4">

            
            <form role="form" method="POST" action="{{url('selectShift')}}"> 
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

            <div class="form-group">
            <div style="padding:10px;">
            <div class="input-group input-group-sm">
                <select class="form-control" id="SelectShift" name="SelectShift">
                 @foreach ($Uplans as $shift)

                <option value="{{ $shift->PlanID }}">Shift plan {{ $shift->PlanID }}</option>
                
             @endforeach       
              </select>
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Go!</button>
                    </span>
              </div>
              </div>
              </div>
              </form>
            
            </div>

              <div class="col-md-6" style="margin-left:70px;">

            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">

             <tbody><tr>
                  <th>Name</th>
                  <th>Efficiency</th>
                  <th></th>
                </tr>
                @if ($employees != null)
                 @foreach ($employees as $employee)
                    <tr>
                      <td>{{ $employee->name }}</td>
                      <td>
                        <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><button type="button" value="{{$employee->eid}}" class="btn btn-success" onclick="Addemp({{$employee->eid}})">Replace</button></td>
                </tr>
                @endforeach
                @endif
               
                </tbody>

            </table>
            </div>
            </div>
            </div>
            </div>
            </div>


              
            </div>
          </div>
          </div>
    


       <div class="box box-danger">
              <div class="box-header with-border">
              <h3 class="box-title">Assigning The Most Efficient Employees</h3>
              </div>

              <div class="box-body">
              <div class="row">

               <div class="col-md-4">
                <div class="box box-success box-solid" style="margin-left:0px;">
                  <div class="box-header with-border">
                    <h3 class="box-title">Branch 1</h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                 </div>
           

                <div class="box-body no-padding">
                    <table class="table table-condensed">
                      <tbody><tr>
                        <th>Name</th>
                        <th>Efficiency</th>
                        <th></th>
                      </tr>

                @if ($efficiencylist != null)
                @foreach( $efficiencylist as $list )
                  <tr>
                    <td>{{ $list->name }}</td> 
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width:{{ $list->Efficiency }}%">
                      </div>
                    </td>
                    <td><button type="button" value="y" class="btn btn-success" onclick="Addemp({{$list->employee}})">Replace</button></td>
                </tr>
                @endforeach
                @endif
                
               
              </tbody></table>
            </div>
           
            <!-- /.box-body -->
            </div>


          </div>

          <div class="col-md-4">

          <div class="box box-warning box-solid" style="margin-left:0px;">
            <div class="box-header with-border">
              <h3 class="box-title">Branch 2</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            
            <!-- /.box-header -->
           
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tbody><tr>
                  <th>Name</th>
                  <th>Efficiency</th>
                  <th></th>
                </tr>
               
                @if ($efficiencylist != null)
                @foreach( $efficiencylist as $list )
                  <tr>
                    <td>{{ $list->name }}</td> 
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width:{{ $list->Efficiency }}%">
                      </div>
                    </td>
                    <td><button type="button" value="y" class="btn btn-success" onclick="Addemp({{$list->employee}})">Replace</button></td>
                </tr>
                @endforeach
                @endif
                
               
              </tbody></table>
            </div>
            <!-- /.box-body -->
            </div>




            </div>

            <div class="col-md-4">

            <div class="box box-danger box-solid" style="margin-left:0px;">
            <div class="box-header with-border">
              <h3 class="box-title">Branch 3</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            
            <!-- /.box-header -->
           
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tbody><tr>
                  <th>Name</th>
                  <th>Efficiency</th>
                  <th></th>
                </tr>
               
                @if ($efficiencylist != null)
                @foreach( $efficiencylist as $list )
                  <tr>
                    <td>{{ $list->name }}</td> 
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width:{{ $list->Efficiency }}%">
                      </div>
                    </td>
                    <td><button type="button" value="y" class="btn btn-success" onclick="Addemp('{{$list->employee}}')">Replace</button></td>
                </tr>
                @endforeach
                @endif
                
            </div>
            <!-- /.box-body -->
            </div>
            </div>
            </div>
          </div>

              </div>
      </div>

    </div>
      

    </section>
  
 <script type="text/javascript">
  function Addemp(emp) {

     swal({
            title: "Are you sure you want to Add?",
                    
                    type: "success",
                    showCancelButton: true,
                    confirmButtonColor: "#75c92c",
                    confirmButtonText: "Add",
                    closeOnConfirm: false },
                function(confirm){
                        if(confirm) {
                            alert("test"+emp);
                            $.ajax({
                                method:'get',
                                url:'replaceEmp',
                                data:{emp:emp},
                                success:function(){
                                    swal({
                                        title: "Add!",
                                        text: "Successfully added the employee record!",
                                        type: "Success",
                                        showCancelButton: false,
                                        confirmButtonColor: "#75c92c",
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
                        }else{
                        }
                }
            );
      
       
  }
</script>
  </div>

  
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

<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- <script src="jquery-1.12.4.min.js"></script> -->


</body>

</html>
