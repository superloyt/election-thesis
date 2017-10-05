<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="TUP Online Election">
  <title>TUP Online Election</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-red.css">
  <link href="dist/css/bootstrap.min.css" rel="stylesheet" >
  <link href="dist/css/bootstrap.css" rel="stylesheet" >
  <link href="dist/css/AdminLTE.css" rel="stylesheet" >
  <link href="dist/css/AdminLTE.min.css" rel="stylesheet" >
  <link href="dist/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" >
  <link href="dist/bower_components/Ionicons/ionicons.min.css" rel="stylesheet" />
  <link href="dist/plugins/iCheck/square/blue.css" rel="stylesheet" />
  <link rel="stylesheet" href="dist/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link href="assets/css/tup-main.css" rel="stylesheet" />
  <link href="assets/css/tup-media.css" rel="stylesheet" />

  <script scr="dist/js/bootstrap.min.js"></script>
  <script scr="dist/js/bootstrap.js"></script>
  <script scr="dist/js/adminlte.js"></script>
  <script scr="dist/js/adminlte.min.js"></script>
</head>
<body class="hold-transition skin-red sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>TUP</b>OES</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>TUP</b> Online Election</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <!--
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        -->
        <!-- search form -->
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
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="treeview">
            <a href="overview.php">
              <i class="fa fa-eye"></i> <span>Overview</span>
              <!--
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            -->
            </a>
          </li>
          <li class="treeview active">
            <a href="voters.php">
              <i class="fa fa-user"></i>
              <span>Voters  </span>
              <!--
              <span class="pull-right-container">
                <span class="label label-primary pull-right">4</span>
              </span>
            -->
            </a>
            <!--
            <ul class="treeview-menu">
              <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
              <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
              <li class="active"><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
              <li><a href="collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
            </ul>
          -->
          </li>
          <li class="treeview">
            <a href="candidates.php">
              <i class="fa fa-users"></i>
              <span>Candidates </span>
              <!--
              <span class="pull-right-container">
                <small class="label pull-right bg-green">new</small>
              </span>
            -->
            </a>
          </li>
          <li class="treeview">
            <a href="results.php">
              <i class="fa  fa-star"></i>
              <span>Results</span>
              <!--
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            -->
            </a>
            <!--
            <ul class="treeview-menu">
              <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
              <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
              <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
              <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
            </ul>
          -->
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-gears (alias)"></i>
              <span>Maintenance</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-down pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> College</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Course</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Position</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Political Party</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="archives.php">
              <i class="fa fa-archive"></i> <span>Archives</span>
              <!--
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            -->
            </a>
            <!--
            <ul class="treeview-menu">
              <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
              <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
              <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
            </ul>
          -->
          </li>
          <li class="header">ELECTION</li>
          <li class="treeview">
            <a href="dashboard.php">
              <i class="fa fa-dashboard "></i>
              <span>Dashboard</span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
      <h1>
        Voters
        <small>Students</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="overview.php"><i class="fa fa-eye"></i> Overview</a></li>
        <li class="active"><a href="voters.php"><i class="fa fa-user"></i> Voters</a></li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Voter Table</h3>
              <div class="pull-right">
                <a href="add-voter.php" class="btn btn-info">Add Voter <i class="fa fa-user-plus"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Student ID</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Course</th>
                  <th>College</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>
                    <div class="btn-group">
                      <a href="edit-voter.php" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </div>
                    </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                  <td>
                    <div class="btn-group">
                      <a href="edit-voter.php" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </div>
                    </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>A</td>
                  <td>
                    <div class="btn-group">
                      <a href="edit-voter.php" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6
                  </td>
                  <td>Win 98+</td>
                  <td>6</td>
                  <td>A</td>
                  <td>
                    <div class="btn-group">
                      <a href="edit-voter.php" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet Explorer 7</td>
                  <td>Win XP SP2+</td>
                  <td>7</td>
                  <td>A</td>
                  <td>
                    <div class="btn-group">
                      <a href="edit-voter.php" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>AOL browser (AOL desktop)</td>
                  <td>Win XP</td>
                  <td>6</td>
                  <td>A</td>
                  <td>
                    <div class="btn-group">
                      <a href="edit-voter.php" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Firefox 1.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.7</td>
                  <td>A</td>
                  <td>
                    <div class="btn-group">
                      <a href="edit-voter.php" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Firefox 1.5</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                  <td>
                    <div class="btn-group">
                      <a href="edit-voter.php" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Firefox 2.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                  <td>
                    <div class="btn-group">
                      <a href="edit-voter.php" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Firefox 3.0</td>
                  <td>Win 2k+ / OSX.3+</td>
                  <td>1.9</td>
                  <td>A</td>
                  <td>
                    <div class="btn-group">
                      <a href="edit-voter.php" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Student ID</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Course</th>
                  <th>College</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="dist/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="dist/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="dist/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="dist/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="dist/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/dist/js/adminlte.min.js"></script>
  <!-- page script -->
  <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  </script>

</body>
</html>
