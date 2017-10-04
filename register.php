<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="TUP Online Election">
  <title>TUP Online Election</title>
  <link href="dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="dist/css/bootstrap.css" rel="stylesheet" />
  <link href="dist/css/AdminLTE.css" rel="stylesheet" />
  <link href="dist/css/AdminLTE.min.css" rel="stylesheet" />
  <link href="dist/bower_components/font-awesome/font-awesome.min.css" rel="stylesheet" />
  <link href="dist/bower_components/Ionicons/ionicons.min.css" rel="stylesheet" />
  <link href="dist/plugins/iCheck/square/blue.css" rel="stylesheet" />
  <link rel="stylesheet" href="dist/bower_components/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" href="dist/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="dist/plugins/iCheck/all.css">
  <link rel="stylesheet" href="dist/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="dist/plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="dist/bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <link href="assets/css/tup-main.css" rel="stylesheet" />
  <link href="assets/css/tup-media.css" rel="stylesheet" />

  <script scr="dist/js/bootstrap.min.js"></script>
  <script scr="dist/js/bootstrap.js"></script>
  <script scr="dist/js/adminlte.js"></script>
  <script scr="dist/js/adminlte.min.js"></script>
</head>
<body class="hold-transition login-page" id="login-bg">
  <div class="login-box">
    <div class="login-logo red-text">
      <a href="index.php"><b>TUP - USG</b> ONLINE ELECTION SYSTEM</a>
    </div>
    <!-- /.login-logo -->

    <div class="login-box-body">
      <p class="login-box-msg">REGISTER NOW!</p>

      <form action="home.php" method="post">
        <div class="form-group has-feedback">
          <input type="name" name="student-id" class="form-control" placeholder="STUDENT ID">
        </div>
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="EMAIL">
        </div>
        <div class="form-group has-feedback">
          <input type="name" name="firstname" class="form-control" placeholder="FIRST NAME">
        </div>
        <div class="form-group has-feedback">
          <input type="name" name="midname" class="form-control" placeholder="MIDDLE NAME">
        </div>
        <div class="form-group has-feedback">
          <input type="name" name="lastname" class="form-control" placeholder="LAST NAME">
        </div>
        <div class="form-group has-feedback">
          <select class="form-control select2">
            <option value="" selected="selected" disabled="disabled">SELECT YOUR COLLEGE</option>
            <option value="CAFA">COLLEGE OF ARCHITECTURE AND FINE ARTS</option>
            <option value="COE">COLLEGE OF ENGINEERING</option>
            <option value="CIE">COLLEGE OF INDUSTRIAL EDUCATION</option>
            <option value="CIT">COLLEGE OF INDUSTRIAL TECHNOLOGY</option>
            <option value="CLA">COLLEGE OF LIBERAL ARTS</option>
            <option value="COS">COLLEGE OF SCIENCE</option>
          </select>
        </div>
        <div class="form-group has-feedback">
          <select class="form-control select2">
            <option value="" selected="selected" disabled="disabled">SELECT YOUR COURSE</option>
            <option value="BSIT">BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY (BSIT)</option>
            <option value="BSIS">BACHELOR OF SCIENCE IN INFORMATION SYSTEM (BSIS)</option>
            <option value="BSCS">BACHELOR OF SCIENCE IN COMPUTER SCIENCE (BSCS)</option>
            <option value="BS-ES">BACHELOR OF SCIENCE IN ENVIRONMENTAL SCIENCE (BS-ES)</option>
            <option value="BAS-LT">BACHELOR IN APPLIED SCIENCE MAJOR IN LABORATOTY TECHNOLOGY (BAS-LT)</option>
          </select>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-xs-6 col-xs-offset-3">
            <button type="submit" class="btn btn-danger btn-block red-bg btn-flat">REGISTER</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

<!--
      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
          Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
          Google+</a>
      </div>
    -->
      <!-- /.social-auth-links -->

<!--
      <a href="#">I forgot my password</a><br>
      <a href="register.html" class="text-center">Register a new membership</a>
    -->

    </div>
    <!-- /.login-box-body -->
  </div>

  <!-- jQuery 3 -->
  <script src="dist/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="dist/plugins/iCheck/icheck.min.js"></script>

  <script src="dist/bower_components/select2/dist/js/select2.full.min.js"></script>
  <script>
    $(function () {
      $('.select2').select2()
    });
    </script>
</body>
</html>
