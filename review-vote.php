<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="TUP Online Election">
  <title>TUP Online Election | Review Your Vote</title>
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
   <div class="container">
     <div class="row">
       <div class="col-md-8 col-md-offset-2">
         <div class="pad margin no-print">
          <div class="callout callout-danger" style="margin: -2% -3% 0!important; ">
            <h4><i class="fa fa-info"></i> Note:</h4>
            Please review your chosen representatives. You can vote again to change them or submit your votes.
          </div>
        </div>
        <!-- /.note -->
       </div>
     </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="box box-danger">
          <div class="box-body ">
            <dl>
              <dt class="position-design">President: </dt>
              <dd class="candidate-design">Pinto, Fritzi Ann</dd>
              <dt class="position-design">Vice President:</dt>
              <dd class="candidate-design">Dela Cruz, Robert John</dd>
              <dt class="position-design">Senators:</dt>
              <dd class="candidate-design">Eusebio, Monique</dd>
              <dd class="candidate-design">Tan, Loise Jiele</dd>
              <dd class="candidate-design">Moyo, Marinel</dd>
              <dd class="candidate-design">Baquiran, Jaine Nicole</dd>
              <dd class="candidate-design">Reyes, Keny Jean</dd>
              <dd class="candidate-design">Valin, Crisa Faye</dd>
              <dt class="position-design">Governor</dt>
              <dd class="candidate-design">Elbo, Khim </dd>
              <dt class="position-design">Vice Governor</dt>
              <dd class="candidate-design">Crownguard, Luxanna</dd>
            </dl>
          </div>
          <div class="box-footer">
            <a href="index.php" class="btn btn-default">Change Vote</a>
            <button class="btn btn-danger pull-right">Submit</button>
          </div>
        </div>
        <!-- /.box-danger -->
      </div>
    </div>

    <div class>

    </div>
   </div>
</body>
</html>
