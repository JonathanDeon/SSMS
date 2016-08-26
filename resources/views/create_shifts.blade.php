<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Create Shift</title>
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

 <script>
    function alerts() {
                swal({   title: "Are you sure you want to delete?",   text: "You will not be able to recover this record!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Delete",   closeOnConfirm: false }, function(){   swal("Deleted!", "Employee Record has been deleted", "success"); });
            }
    function success() {
                swal("Successful", "Data Successfully Saved!", "success")
    }
</script>
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
      <span class="logo-lg"><b>Admin</b>LTE</span>
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

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Work Shift Management</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="create"><i class="fa fa-link"></i> <span>Create Shifts</span></a></li>
        <li><a href="assign"><i class="fa fa-link"></i> <span>Assign Employees</span></a></li>
          <li class="treeview">
          <a><i class="fa fa-link"></i> <span>Manage Employees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="replace">Replace Employees</a></li>
            <li><a href="request">Request Employees</a></li>
          </ul>
        </li>  <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Shift Analysis</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="efficiency">Efficiency Analysis</a></li>
            <li><a href="OW">Over-worked Employee Report</a></li>
          </ul>
        </li>
        
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
        Create Shifts
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="main">

        <div class="row">
        
        <div class="col-md-6">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Enter Shift Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" method="POST" action="{{url('shiftcreate')}}"> 
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

            @if(Session::has('flash_message'))
              <?php
                echo '<script type="text/javascript">',
                       'success();',
                       '</script>';
              ?>
            @endif
           
              <div class="box-body">

                <div class="form-group">
                  <span class="form-group-addon"><i class="fa fa-fw fa-building"></i></span>
                  <label for="Branch">Branch</label>
                
                    <select class="form-control" id="SelectBranch" name="SelectBranch">

                    @foreach ($branches as $branch)

                      <option>{{ $branch->Branch_name }}</option>

                    @endforeach
                 
                    </select>
                    
                </div>

                


                
                <div class="row1">
                  <div class="col-md-6">

                  <div class="form-group">
                    <span class="form-group-addon"><i class="fa fa-fw fa-calendar"></i></span>
                    <label for="Day">Day</label>
                
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="selectDay1" value="week-day">
                          Week-day
                        </label>
                      </div>

                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="selectday2" value="week-end">
                          Week-end
                        </label>
                      </div>

                  </div>

                  </div>

                  <div class="col-md-6">

                  <div class="form-group">
                    <span class="form-group-addon"><i class="fa fa fa-fw fa-calendar-times-o"></i></span>
                    <label for="Time">Time</label>
                
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios1" id="optionsRadios11" value="peak">
                          Peak
                        </label>
                      </div>

                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios1" id="optionsRadios12" value="non-peak">
                          Non-peak
                        </label>
                      </div>

                  </div>
                  
                  </div>                  
                </div>
              </div>


              <div class="box-footer" style="height:70px">
                <button type="submit" class="btn btn-primary" onclick="AddtoTable()" style="margin-left:400px; margin-top:8px; margin-bottom:8px;" >Submit</button>
              </div>
            </form>
          </div>



        </div>
        <div id="result"></div>

        <div class="col-md-6">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Shift Plan Details</h3>

              <div class="box-tools">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">«</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">»</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table  id="myTable" class="table table-hover">
                <tbody><tr>
                   <th>ID</th>
                   <th>Branch</th>
                   <th>Day</th>
                   <th>Time</th>
                </tr>

                @foreach ($plans as $plan)
                  <tr>
                    <td>{{ $plan->SPID }}</td>
                    <td>{{ $plan->BID }}</td>
                    <td>{{ $plan->day }}</td>
                    <td>{{ $plan->Tim }}</td>
                  </tr> 
                @endforeach                     
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          </div>
          
           
          

        

            <div class="box box-primary">
              <div class="box-header with-border">
              <h3 class="box-title">Assigned Employees</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body1 no-padding">
              <table class="table table-condensed">
                <tbody>
                <tr>
                  <th >Employee Name</th>
                  <th style="width:350px">Providing Services</th>
                  <th style="width:300px">Efficiency</th>
                  <th style="width:200px">Over-worked percentage<th>
                </tr>
                <tr>

                @if ($employees != null)  
                  @foreach ($employees as $employee)
                  <td>{{ $employee->name }}</td>
                  <td><span class="badge bg-blue">Full Exterior Grooming</span></td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td align="center"><span class="badge bg-red">55%</span></td>
                  @endforeach
                @endif
                </tr>
                
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
            
          </div>
          </div>

      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  

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
<script src="function.js"></script>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!--
<script type="text/javascript">

          function AddtoTable()
          {
            var element = document.getElementById("SelectBranch");
            var branchName = element.options[element.selectedIndex].text;
            var branchID = branchName.match(/\d+/)[0];

            var day = document.querySelector('input[name="optionsRadios"]:checked').value;

            var time = document.querySelector('input[name="optionsRadios1"]:checked').value;
            
            CreateShiftsController@AddShiftPlans(Number(branchID),String(day),String(time));

          } 
          
</script>
  -->


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->


</body>
</html>


