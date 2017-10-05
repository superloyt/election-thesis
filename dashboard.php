<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TUP Online Election</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="dist/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="dist/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css">

  <link href="assets/css/tup-main.css" rel="stylesheet" />
  <link href="assets/css/tup-media.css" rel="stylesheet" />

  <script scr="dist/js/bootstrap.min.js"></script>
  <script scr="dist/js/bootstrap.js"></script>
  <script scr="dist/js/adminlte.js"></script>
  <script scr="dist/js/adminlte.min.js"></script>
</head>
<body class="hold-transition skin-red layout-top-nav">
  <div class="wrapper">
    <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="#" class="navbar-brand"><b>TUP</b> Online Election</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="#"><i class="fa fa-user"></i> Voters</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="assets/img/tup-logo.png" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="assets/img/tup-logo.png" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">My Account</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
              </ul>
            </div>
          </div>
          <!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Elections
              <small></small>
            </h1>
            <ol class="breadcrumb">
              <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            </ol>
          </section>

        <!-- Main content -->
        <section class="content">
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title">Dashboard</h3>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-2">
                    <button type="button" class="btn btn-block darkgreen-bg"><i class="fa  fa-plus-square"></i> <span>Add Election</span></button>
                  <br  />
                  <strong>Filter by Status:</strong>
                    <div class="btn-group-vertical btn-block">
                      <button type="button" class="btn btn-primary">All</button>
                      <button type="button" class="btn btn-primary">Building</button>
                      <button type="button" class="btn btn-primary">Scheduled</button>
                      <button type="button" class="btn btn-primary">Running</button>
                      <button type="button" class="btn btn-primary">Completed</button>
                      <button type="button" class="btn btn-primary">Archived</button>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="box box-danger box-solid">
                      <div class="box-header with-border">
                        <a href="#"><h3 class="box-title">Title of Election</h3></a>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        Description of the Election
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box-solid -->
                  </div>
                  <!-- /.box-success -->
                  <div class="col-md-5">

                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </section>
          <!-- /.content -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-wrapper -->
  </div>
  <!-- /.wrapper -->

  <!-- jQuery 3 -->
<script src="dist/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="dist/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="dist/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


</body>
</html>
