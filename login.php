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
      <a href="index.php"><b>TUP</b> ONLINE ELECTION</a>
    </div>
    <!-- /.login-logo -->

    <?php
    include'connection.php';
    session_start();

    if(isset($_SESSION['id'])){
      if($_SESSION['id']){
        header('location: home.php');
      }
    }

    if(isset($_POST['student_id'])){
      $student_id = $_POST['student_id'];
      $password = $_POST['password'];

      $query = mysqli_query($conn, "select * from students where student_id='".$student_id."' and password='".$password."'");
      $count = mysqli_num_rows($query);

      if(empty($count)){ ?>
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-ban"></i> Alert!</h4>
          Invalid Student ID and Password
        </div>
      <?php }else{
        $row = mysqli_fetch_assoc($query);
        $_SESSION['id'] = $row['id'];
        // var_dump($_SESSION['id']);
        header('location: index.php');
      }
    }
  ?>

    <div class="login-box-body">
      <p class="login-box-msg">SIGN IN TO START VOTING!</p>

      <form action="home.php" method="post">
        <div class="form-group has-feedback">
          <input type="name" name="student-id" class="form-control" placeholder="STUDENT ID">
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="PASSWORD">
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-xs-4 col-xs-offset-4">
            <button type="submit" class="btn btn-danger btn-block red-bg btn-flat">SIGN IN</button>
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
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
    </script>
</body>
</html>
