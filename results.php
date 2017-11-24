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
  <link href="dist/css/AdminLTE.min.css" rel="stylesheet" />
  <link href="dist/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="dist/bower_components/Ionicons/ionicons.min.css" rel="stylesheet" />
  <link href="dist/plugins/iCheck/square/blue.css" rel="stylesheet" />

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
          <li class="treeview active">
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
          Results
          <small>Title of Election</small>
        </h1>
        <ol class="breadcrumb">
          <li class="active"><a href="#"><i class="fa fa-star"></i> Results</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-6 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
              <!-- Tabs within a box -->
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-bar-chart-o"></i>President Chart</li>
              </ul>
              <div class="tab-content no-padding">
                <div class="box-body chart-responsive">
                  <div id="donut-chart" style="height: 300px;"></div>
                </div>
                <!-- /.box -->
              </div>
            </div>
            <!-- /.nav-tabs-custom -->
          </section>
          <!-- Right col -->
          <section class="col-md-6 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
              <!-- Tabs within a box -->
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-bar-chart-o"></i>Vice President Chart</li>
              </ul>
              <div class="tab-content no-padding">
                <div class="box-body chart-responsive">
                  <div id="donut-chart1" style="height: 300px;"></div>
                </div>
                <!-- /.box -->
              </div>
            </div>
            <!-- /.nav-tabs-custom -->
          </section>
          <!-- Right col -->
          <section class="col-md-6 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
              <!-- Tabs within a box -->
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-bar-chart-o"></i>Senators Chart</li>
              </ul>
              <div class="tab-content no-padding">
                <div class="box-body chart-responsive">
                  <div id="donut-chart2" style="height: 300px;"></div>
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
  <!-- FLOT CHARTS -->
<script src="dist/bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="dist/bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="dist/bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="dist/bower_components/Flot/jquery.flot.categories.js"></script>
<!-- Page script -->

  <script>
    $(function () {
      /*
     * DONUT CHART
     * -----------
     */

    var PresData = [
      { label: 'Candidate 1', data: 30, color: '#bd2031' },
      { label: 'Candidate 2', data: 20, color: '#971927' },
      { label: 'Candidate 3', data: 50, color: '#c33645' }
    ]
    var VicePresData = [
      { label: 'Candidate 1', data: 30, color: '#bd2031' },
      { label: 'Candidate 2', data: 20, color: '#971927' },
      { label: 'Candidate 3', data: 50, color: '#c33645' }
    ]
    var SenatorData = [
      { label: 'Candidate 1', data: 30, color: '#bd2031' },
      { label: 'Candidate 2', data: 20, color: '#971927' },
      { label: 'Candidate 3', data: 50, color: '#c33645' }
    ]
    $.plot('#donut-chart', PresData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });
    $.plot('#donut-chart1', VicePresData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });
    $.plot('#donut-chart2', VicePresData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });
    /*
     * END DONUT CHART
     */


     /*
        * Custom Label formatter
        * ----------------------
        */
       function labelFormatter(label, series) {
         return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
           + label
           + '<br>'
           + Math.round(series.percent) + '%</div>'
       }
   });
  </script>

</body>
</html>
