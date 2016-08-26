<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Service Management | Reservations</title>
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
    <style>
    .datepicker{z-index:1151 !important;}
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
              <li class="active"><a href="EmployeeInformation"><i class="fa fa-book"></i>Information</a></li>
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
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Employee Management
            </h1>
            <ol class="breadcrumb">
                <li><a href="/main"><i class="fa fa-user"></i> Employee</a></li>
                <li class="active">Info</li>
            </ol>
        </section>

        <!-- Main content -->
      <div style="padding:15px">
          <div class="box box-success" >
              <div class="box-header with-border">
                  <h3 class="box-title">All Employees</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal">
                  <div class="box">
                      <div class="box-header">
                          <div class="col-xs-4 form-group">
                              <select class="form-control" style="width: 75%;">
                                  <option>Filter</option>
                                  <option>Vehicle Grooming</option>
                                  <option>Janitorial</option>
                              </select>
                          </div>
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
                              <tbody>
                              <tr>
                                  <th>ID</th>
                                  <th>Employee Name</th>
                                  <th>Designation</th>
                                  <th>Gender</th>
                                  <th>Branch</th>
                                  <th>Manager</th>
                                  <th>Date Joined</th>
                                  <th></th>
                                  <th></th>
                              </tr>
                              @foreach($employees as $employee)
                                  <tr>
                                      <td>{{$employee->eid}}</td>
                                      <td>{{$employee->name}}</td>
                                      <td>{{$employee->title}}</td>
                                      <td>{{$employee->gender}}</td>
                                      <td>{{$employee->branch}}</td>
                                      <td>{{$employee->manager}}</td>
                                      <td>{{$employee->joined_date}}</td>
                                      <td><button type="button" id="view" value="{{$employee->eid}}" class="btn btn-success" onclick="getEmployee('{{$employee->eid}}')"><i class="fa fa-eye"></i></button></td>
                                      <td><button type="button" onclick="getEmployee('{{$employee->eid}}')" id="update" value="{{$employee->eid}}" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button></td>
                                      <td><button type="button" value="{{$employee->eid}}" class="btn btn-danger" onclick="deleteEmployee('{{$employee->eid}}')"><i class="fa fa-trash"></i></button></td>
                                  </tr>
                              @endforeach
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
                                      data: {id: id,ename:ename,gender:gender,address: address,dateJoined:dateJoined},
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
                      <!-- /.box-body -->
                  </div>
              </form>
          </div>
      </div>
        <!-- Modal prompt for update-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Update Employee Information</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box box-warning">
                            <div class="box-body">
                                <form role="form">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Employee ID:</label>
                                        <input type="text" class="form-control" id="employee-id" disabled>
                                        <label>Employee Name:</label>
                                        <input type="text" class="form-control" id="employee-name">
                                        <label>Date of Birth:</label>
                                        <div class="input-group" >
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" class="form-control pull-right datepicker" placeholder="date of birth" name="dob" id="dob" class="form-control" >
                                        </div>
                                        <label>Gender:</label><br>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="male" checked="">
                                        Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="female" checked="">
                                        Female<br>
                                        <label>Contact Number:</label>
                                        <input type="text" class="form-control" id="contact">
                                        <label>Address:</label>
                                        <input type="text" class="form-control" id="address">
                                        <label>Employee Designation:</label>
                                        <select class="form-control" name="designation" id="designation">
                                            <option>Select Designation</option>
                                            @foreach($designations as $designation)
                                                <option value="{{ $designation->id }}">{{$designation->title}}</option>
                                            @endforeach
                                        </select>
                                        <label>Branch:</label>
                                        <select class="form-control" name="branch" id="branch">
                                            <option>Select Branch</option>
                                            @foreach($branches as $branch)
                                                <option value="{{ $branch->id }}">{{$branch->bname}}</option>
                                            @endforeach
                                        </select>
                                        <label>Date Joined:</label>
                                        <input type="text" class="form-control" id="dateJoined">
                                        <label>Manager:</label>
                                        <select class="form-control" name="manager" id="manager">
                                            <option>Select Manager</option>
                                            @foreach($managers as $manager)
                                                <option value="{{ $manager->eid }}">{{$manager->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="save" onclick="updateEmployee()">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
<!-- ./wrapper -->
</div>
<!-- jQuery 2.2.0 -->
<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>


<script src="../../dist/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>


<script>
//    $('#dob').datepicker({
//        autoclose: true
//
//    });
    function deleteEmployee(empId) {

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
                            alert("test"+empId);
                            $.ajax({
                                method:'get',
                                url:'deleteEmployee',
                                data:{eid:empId},
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
                        }else{

                        }
                }
            );

    }

    function success() {
                swal("Successful", "Data Successfully Saved!", "success")
                location.reload();
    }

</script>
</body>
</html>
