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
        <!-- Optionally, you can add icons to the links -->
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
        Categories
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        
        <li class="active"><a href="#tab_1" data-toggle="tab">Floor cleaning</a></li>
        <li><a href="#tab_2" data-toggle="tab">Roof cleaning</a></li>
        <li><a href="#tab_3" data-toggle="tab">Rooftop cleaning</a></li>
        <li><a href="#tab_4" data-toggle="tab"></a>Pool cleaning</li>
        <li><a href="#tab_5" data-toggle="tab"></a>Bathroom cleaning</li>
        <li><a href="#tab_6" data-toggle="tab">Window cleaning</a></li>
        <li><a href="#tab_7" data-toggle="tab">Outdoor cleaning</a></li>
        <li><a href="#tab_8" data-toggle="tab">Escalators and elevator cleaning</a></li>
        <div class="tab-content">

        <div class="tab-pane active" id="tab_1">
          <div class="container-fluid">
            <div class="clearfix"></div>
            <br>
            <div class="box">
              <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                  <div class="col-sm-12">
                  
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">CategoryID</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Floor Type</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Price(per square feet)</th>
                  </tr>
                  </thead>
                    <tbody>
                      @foreach ($categories as $category) 
                          <tr role="row" class="odd">
                            <td class="sorting_1">{{ $category->cat_id }}</td>
                            <td>{{ $category->type }}</td>
                            <td>{{ $category->price }}</td>
                            
                            <td><button class="btn btn-warning" value="{{$employee->janEmpId}}" data-toggle="modal" data-target="#employeeModal" >Update</button>
                            <button class="btn btn-danger">Delete</button></td>
                          </tr>
                      @endforeach
                    </tbody>

                    </table>
                    </div>
                    <!-- /.box-body -->
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
                    
                    <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">

                  <div class="container-fluid">
                  <div class="clearfix"></div><br>
                  <div class="box">
                  <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                  <div class="col-sm-12">
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">CategoryID</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Roof Type</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Price(per square feet)</th>
                  </tr>
                  </thead>
                    <tbody>
                    <tr role="row" class="odd">
                    <td class="sorting_1"></td>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-warning">Update</button><button class="btn btn-danger">Delete</button></td>
                    </tr>
                    </tbody>

                    </table>
                    </div>
                    <!-- /.box-body -->
                    </div></div></div></div>
                    </div>
                    </div>
                    <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                  <div class="container-fluid">
                  <div class="clearfix"></div><br>
                  <div class="box">
                  <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                  <div class="col-sm-12">
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">CategoryID</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rooftop Floor Type</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Price(per square feet)</th>
                  </tr>
                  </thead>
                    <tbody>
                    <tr role="row" class="odd">
                    <td class="sorting_1"></td>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-warning">Update</button><button class="btn btn-danger">Delete</button></td>
                    </tr>
                    </tbody>

                    </table>
                    </div>
                    <!-- /.box-body -->
                    </div></div></div></div>
                    </div>
                    </div>

                  <div class="tab-pane" id="tab_4">
                  <div class="container-fluid">
                  <div class="clearfix"></div><br>
                  <div class="box">
                  <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                  <div class="col-sm-12">
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">CategoryID</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Pool Floor Type</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Price(per square feet)</th>
                  </tr>
                  </thead>
                    <tbody>
                    <tr role="row" class="odd">
                    <td class="sorting_1"></td>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-warning">Update</button><button class="btn btn-danger">Delete</button></td>
                    </tr>
                    </tbody>

                    </table>
                    </div>
                    <!-- /.box-body -->
                    </div></div></div></div>
                    </div>
                    </div>

                  <div class="tab-pane" id="tab_5">
                  <div class="container-fluid">
                  <div class="clearfix"></div><br>
                  <div class="box">
                  <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                  <div class="col-sm-12">
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">CategoryID</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Bathroom Floor Type</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Price(per square feet)</th>
                  </tr>
                  </thead>
                    <tbody>
                    <tr role="row" class="odd">
                    <td class="sorting_1"></td>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-warning">Update</button><button class="btn btn-danger">Delete</button></td>
                    </tr>
                    </tbody>

                    </table>
                    </div>
                    <!-- /.box-body -->
                    </div></div></div></div>
                    </div>
                    </div>

                  <div class="tab-pane" id="tab_6">
                  <div class="container-fluid">
                  <div class="clearfix"></div><br>
                  <div class="box">
                  <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                  <div class="col-sm-12">
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">CategoryID</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Window Frame Type</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Price(per square feet)</th>
                  </tr>
                  </thead>
                    <tbody>
                    <tr role="row" class="odd">
                    <td class="sorting_1"></td>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-warning">Update</button><button class="btn btn-danger">Delete</button></td>
                    </tr>
                    </tbody>

                    </table>
                    </div>
                    <!-- /.box-body -->
                    </div></div></div></div>
                    </div>
                    </div>

                  <div class="tab-pane" id="tab_7">
                  <div class="container-fluid">
                  <div class="clearfix"></div><br>
                  <div class="box">
                  <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                  <div class="col-sm-12">
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">CategoryID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Price(per square feet)</th>
                  </tr>
                  </thead>
                    <tbody>
                    <tr role="row" class="odd">
                    <td class="sorting_1"></td>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-warning">Update</button><button class="btn btn-danger">Delete</button></td>
                    </tr>
                    </tbody>

                    </table>
                    </div>
                    <!-- /.box-body -->
                    </div></div></div></div>
                    </div>
                    </div>

                  <div class="tab-pane" id="tab_8">
                  <div class="container-fluid">
                  <div class="clearfix"></div><br>
                  <div class="box">
                  <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                  <div class="col-sm-12">
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                  <h4>Escalator</h4>
                  <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">CategoryID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Price(per escalator)</th>
                  </tr>
                  </thead>
                    <tbody>
                    <tr role="row" class="odd">
                    <td class="sorting_1"></td>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-warning">Update</button><button class="btn btn-danger">Delete</button></td>
                    </tr>
                    </tbody>

                    </table>
                    </div>
                    <!-- /.box-body -->
                    </div></div></div></div>
                    <div class="box">
                  <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                  <div class="col-sm-12">
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                  <h4>Elevator</h4>
                  <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">CategoryID</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Type</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Price</th>
                  </tr>
                  </thead>
                    <tbody>
                    <tr role="row" class="odd">
                    <td class="sorting_1"></td>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-warning">Update</button><button class="btn btn-danger">Delete</button></td>
                    </tr>
                    </tbody>

                    </table>
                    </div>
                    <!-- /.box-body -->
                    </div></div></div></div>
                    </div>
                    </div>
                    <div class="container-fluid">
                      <div class="fixed-action-btn" style="bottom: 55px; right: 24px;">
                    <a class="btn-floating btn-large" rel="tooltip" title="Add New Category" data-toggle="modal" data-target="#employeeModal" style=" background-color: #F44336" data-toggle="modal" data-target="#caseModal">
                    <i class="fa fa-plus"></i></a>
                    </div>

                    <div class="modal fade" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">New Category</h4>
                    </div>
                    <div class="modal-body">
                    <div class="container-fluid">
                    <div class="row">
                      <div class="form-group">
                      <div style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Select Categoty</div>
                      <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                      <select class="form-contorl">
                      <option value="1">Floor cleaning</option>
                      <option value="2">Roof cleaning</option>
                      <option value="3">Rooftop cleaning</option>
                      <option value="4">Pool Cleaning</option>
                      <option value="5">Bathroom cleaning</option>
                      <option value="6">Window cleaning</option>
                      <option value="8">Escalators and elevator cleaning </option>
                      </select>                       
                      </div>
                      </div>
                    </div><br />
                    <div class="row">
                      <div class="form-group">
                      <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Category ID</div>
                      <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                      <input id="cat_id" name="cat_id" type="text" placeholder="" class="form-control input-md" required>     
                      </div>
                      </div>                            
                    </div><br />
                    <div class="row">
                      <div class="form-group">
                      <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Type</div>
                      <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                      <input id="type" name="type" type="text" placeholder="" class="form-control input-md" required>     
                      </div>
                      </div>                            
                    </div><br />
                    <div class="row">
                      <div class="form-group">
                      <div style="text-align: left"class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">Price(per square feet)</div>
                      <div class="col-md-6 col-sm-6 col-xs-8 col-xxs-12">
                      <input id="price" name="price" type="number" min="0" placeholder="" class="form-control input-md" required>   
                      </div>
                      </div>                            
                    </div><br />
                    <div class="modal-footer">
                    <button type="button" class="close-popup btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addCaseType()">Save</button>
                    </div>
                    <input id="case_id" name="case_id" type="text" hidden="">
                    </div>
                    </div>
                    </div>
                    </div></div>
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
