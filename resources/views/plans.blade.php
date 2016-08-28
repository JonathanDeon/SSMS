<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
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
          <p>Himasha Harinda</p>
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
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="welcome"><i class="fa fa-calendar-minus-o"></i> <span>Reservations</span></a></li>
        <li><a href="assignments"><i class="fa fa-male"></i> <span>Assignments</span></a></li>
        <li class="active"><a href="plans"><i class="fa fa-check-square"></i> <span>Service Plans</span></a></li>
        <li><a href="logs"><i class="fa fa-file-text-o"></i> <span>Logs</span></a></li>
        <li><a href="reports"><i class="fa fa-pencil-square-o"></i> <span>Reports</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <p class="lead">
        Service Plans
        
      </p>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <script type="text/javascript">

          function deletePlans(splan_id){
                      

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
                                              url:'deletePlans',
                                              data:{splan_id:splan_id},
                                              success:function(){
                                                  swal({
                                                              title: "Deleted!",
                                                              text: "Successfully deleted the service plan record!",
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










   function alerts() {
                swal({   title: "Are you sure you want to delete?",   text: "You will not be able to recover this record!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Delete",   closeOnConfirm: false }, function(){   swal("Deleted!", "Employee Record has been deleted", "success"); });
            }
    



    function emptyField(field) {
                swal("Empty Field", "You cannot have one or more fields empty", "warning");
    }
    function successadd(field) {
                swal("Added Successfully", "New Service Plan has been added", "success");
    }













      
    function formValidate(){

       var planname = document.getElementById('planName').value;
       var plancategory = document.getElementById('planCategory').value;
       var planamount = document.getElementById('planAmount').value;
       
      

        if(!isEmpty(planname))
          if(!isEmpty(plancategory))
            if(!isEmpty(planamount))
                  if(isdigit(planamount))
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
       {  
          alert("Amount you entered is not numeric");
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
    <!--widgets -->
        <!-- categories widget -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-square-o"></i></span>

            <div class="info-box-content" id="cw">
              <span class="info-box-text">Categories</span>
              <span class="info-box-number" name="categ" id="categ">
               
              </span>
            </div>
            <!-- /.info-box-content -->
          </div >
          <!-- /.info-box -->
        </div>
        <!-- end of categories widget -->

        <!-- Plans widget -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-circle-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Service Plans</span>
              <span class="info-box-number">
                @foreach($serv as $se)   
                  <p>{{ $se->counter2 }}</p>
                @endforeach
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- End of Plans widget -->
    <!-- End of widgets -->


    



    

    <!-- Service plans info -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Available Service Plans</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="splans">
                <tbody><tr>
                  <th>ID</th>
                  <th>Name</th>
                  
                  <th>Category</th>
                  <th>Amount</th>
                </tr>
               
               
                @foreach ($plans as $plan)
                <tr>
                  <td>{{$plan->splan_id}}</td>
                  <td>{{$plan->title}}</td>
                  
                  <td>{{$plan->category}}</td>
                  <td>{{$plan->amount}}</td>


                  <td><button type="button" value="{{$plan->splan_id}}" class="btn btn-danger" onclick="deletePlans('{{$plan->splan_id}}')"><i class="fa fa-trash"></i></button></td>

                </tr>

                @endforeach

                






                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    <!-- End of service plans info -->














    <!-- add remove service plans -->
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Add Service Plans</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="addplan" method="post" name="addplans" onsubmit="return formValidate()">
          <div class="box-body">
            <div class="form-group">
              <label for="planName" class="col-sm-2 control-label">Service Plan</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="planName" placeholder="Name" name="planName">
              </div>
            </div>
            <div class="form-group">
              <label for="planCategory" class="col-sm-2 control-label">Category</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="planCategory" placeholder="category" name="planCategory">
              </div>
            </div>

            <div class="form-group">
              <label for="planDescription" class="col-sm-2 control-label">Rs.</label>

              <div class="col-sm-10">
                <input type="number" min="0" class="form-control" id="planAmount" placeholder="Amount" name="planAmount">
              </div>
            </div>
                
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            
            <button type="submit" class="btn btn-info pull-right" >Add</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
          </div>


              <!-- /.box-footer -->
        </form>
      </div>
    <!-- end of add remove service plans -->

    </section>
    <!-- /.content -













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
