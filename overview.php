<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="TUP Online Election">
  <title>TUP Online Election</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-red.css">
  <link href="dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="dist/css/bootstrap.css" rel="stylesheet" />
  <link href="dist/css/AdminLTE.css" rel="stylesheet" />
  <link href="dist/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="dist/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet" />
  <link href="dist/plugins/iCheck/square/blue.css" rel="stylesheet" />
  <link rel="stylesheet" href="dist/bower_components/morris.js/morris.css">
    <link rel="stylesheet" href="dist/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <link href="assets/css/tup-main.css" rel="stylesheet" />
  <link href="assets/css/tup-media.css" rel="stylesheet" />

  <script scr="dist/js/bootstrap.min.js"></script>
  <script scr="dist/js/bootstrap.js"></script>
  <script scr="dist/js/adminlte.js"></script>
  <script scr="dist/js/adminlte.min.js"></script>

<!-- Morris.js charts -->
<script src="dist/bower_components/raphael/raphael.min.js"></script>
<script src="dist/bower_components/morris.js/morris.min.js"></script>
</head>
<body class="hold-transition skin-red fixed sidebar-mini">
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

        <div style="color: #ffffff; margin-top: 13.7px; margin-left: 10px;">
          <h4>Title of Election</h4>
        </div>
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
          <li class="treeview active">
            <a href="overview.php">
              <i class="fa fa-eye"></i> <span>Overview</span>
              <!--
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            -->
            </a>
          </li>
          <li class="treeview">
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
          <li>
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
            <a href="">
              <i class="fa fa-dashboard "></i>
              <span>Dashboard</span>
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
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Overview
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li class="active"><a href="#"><i class="fa fa-eye"></i> Overview</a></li>
        </ol>
      </section>

      <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>44</h3>

              <p>Voted</p>
            </div>
            <!--
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
          -->
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>40</h3>

              <p>Candidates</p>
            </div>
            <!--
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
          -->
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>150</h3>

              <p>Voters Registered</p>
            </div>
            <!--
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          -->
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Visitors</p>
            </div>
            <!--
            <div class="icon">
              <i class="ion ion-eye"></i>
            </div>
          -->
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="pull-left header"><i class="fa fa-user"></i>Voter Chart</li>
            </ul>
            <div class="tab-content no-padding">
            <div class="box-body chart-responsive">
              <div class="chart" id="bar-chart" style="height: 300px;"></div>
            </div>
          <!-- /.box -->
            </div>
          </div>
          <!-- /.nav-tabs-custom -->
  </section>
</div>
</section>
</div>

  <!-- jQuery 3 -->
  <script src="dist/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="dist/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="dist/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/dist/js/adminlte.min.js"></script>

<!-- Morris.js charts -->
<script src="dist/bower_components/raphael/raphael.min.js"></script>
<script src="dist/bower_components/morris.js/morris.min.js"></script>

  <script>
  $(function () {
    //BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y:  'CAFA', a: 100, b: 90},
        {y: 'COE', a: 75, b: 65},
        {y: 'CIE', a: 50, b: 40},
        {y: 'CIT', a: 75, b: 65},
        {y: 'CLA', a: 50, b: 40},
        {y: 'COS', a: 75, b: 65},
      ],
      barColors: ['#bd2031', '#222'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Voters', 'Voted'],
      hideHover: 'auto'
    });
  });
</script>

</body>
</html>
