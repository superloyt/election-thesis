<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="TUP Online Election">
  <title>TUP Online Election | You Have Already Voted</title>
  <link href="dist/css/bootstrap.min.css" rel="stylesheet" >
  <link href="dist/css/bootstrap.css" rel="stylesheet">
  <link href="dist/css/AdminLTE.css" rel="stylesheet">
  <link href="dist/bower_components/font-awesome/font-awesome.min.css" rel="stylesheet" >
  <link href="dist/bower_components/Ionicons/ionicons.min.css" rel="stylesheet">
  <link href="dist/plugins/iCheck/square/blue.css" rel="stylesheet" >

  <link href="assets/css/tup-main.css" rel="stylesheet" >
  <link href="assets/css/tup-media.css" rel="stylesheet" >

</head>
<body>
  <?php
    include "navbar-user.php";
  ?>
  <!-- Main content -->
  <section class="content">
    <div class="error-page" style="margin-top: 10%;">

      <div class="thank-vote">
        <h3 class="yellow-text"><i class="fa fa-warning"></i> Thank you for voting! </h3>

        <p>
          You have already voted in this election.
          Meanwhile, you may <a href="index.php">return to home</a> .
        </p>

      </div>
      <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
  </section>


  <!-- jQuery 3 -->
  <script src="dist/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="dist/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="dist/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>

</body>
</html>
