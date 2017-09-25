<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="TUP Online Election">
  <title>TUP Online Election</title>
  <link href="dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="dist/css/bootstrap.css" rel="stylesheet" />
  <link href="dist/css/AdminLTE.css" rel="stylesheet" />
  <link rel="stylesheet" href="dist/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="dist/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link href="dist/bower_components/Ionicons/ionicons.min.css" rel="stylesheet" />
  <link href="dist/plugins/iCheck/square/blue.css" rel="stylesheet" />
  <link rel="stylesheet" href="dist/plugins/iCheck/minimal/_all.css">
  <link rel="stylesheet" href="dist/plugins/iCheck/all.css">

  <link href="assets/css/tup-main.css" rel="stylesheet" />
  <link href="assets/css/tup-media.css" rel="stylesheet" />

  <script scr="dist/js/bootstrap.min.js"></script>
  <script scr="dist/js/bootstrap.js"></script>
  <script scr="dist/js/adminlte.js"></script>
  <script scr="dist/js/adminlte.min.js"></script>
</head>
<body>
  <?php
  include "navbar-user.php";
   ?>
   <div class="container">
     <div class="box box-solid box-danger box-vote">
        <div class="box-header with-border ">
          <h3 class="box-title">President</h3>

          <div class="box-tools pull-right">
          <!--
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          -->
          </div>
          <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Date picker</h3>
            </div>
            <div class="box-body">
              <!-- Date -->
              <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date range -->
              <div class="form-group">
                <label>Date range:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date and time range -->
              <div class="form-group">
                <label>Date and time range:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservationtime">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date and time range -->
              <div class="form-group">
                <label>Date range button:</label>

                <div class="input-group">
                  <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                    <span>
                      <i class="fa fa-calendar"></i> Date range picker
                    </span>
                    <i class="fa fa-caret-down"></i>
                  </button>
                </div>
              </div>
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->
              </div>
              <!-- Profile Image -->
              <div class="col-md-4">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="assets/img/tup-logo.png" alt="User profile picture">

                  <h3 class="profile-username text-center"><strong>Fritzi Ann Pinto</strong></h3>

                  <p class="text-muted text-center">ASAP</p>

                </div>
                <!-- /.box-body -->
                <div class="progress-box">
                  <div class="progress">
                    <div class="progress-bar progress-bar-red progress-bar-striped active" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%">
                      38%
                    </div>
                  </div>
                  <p class="text-center">
                    3697 votes
                  </p>
                </div>
                <!-- /.progress-box -->
                </div>
              <div class="col-md-4">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="assets/img/tup-logo.png" alt="User profile picture">

                  <h3 class="profile-username text-center"><strong>Nina Mcintire</strong></h3>

                  <p class="text-muted text-center">KAMPI</p>

                </div>
                <!-- /.box-body -->
                <div class="progress-box">
                  <div class="progress">
                    <div class="progress-bar progress-bar-red progress-bar-striped active" role="progressbar" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100" style="width: 21%">
                      21%
                    </div>
                  </div>
                  <p class="text-center">
                    2043 votes
                  </p>
                </div>
                <!-- /.progress-box -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
      </div>
      <!-- /.President -->

      <div class="box box-danger box-solid">
         <div class="box-header with-border">
           <h3 class="box-title">Vice President</h3>

           <div class="box-tools pull-right">
             <!--
           <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
           </button>
           -->
           </div>
           <!-- /.box-tools -->
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <!-- Profile Image -->
               <div class="col-md-4">
                 <div class="box-body box-profile">
                   <img class="profile-user-img img-responsive img-circle" src="assets/img/tup-logo.png" alt="User profile picture">

                   <h3 class="profile-username text-center"><strong>Fritzi Ann Pinto</strong></h3>

                   <p class="text-muted text-center">ASAP</p>

                 </div>
                 <!-- /.box-body -->
                 <div class="progress-box">
                   <div class="progress">
                     <div class="progress-bar progress-bar-red progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                       40%
                     </div>
                   </div>
                   <p class="text-center">
                     3892 votes
                   </p>
                 </div>
                 <!-- /.progress-box -->
               </div>
               <div class="col-md-4">
                 <div class="box-body box-profile">
                   <img class="profile-user-img img-responsive img-circle" src="assets/img/tup-logo.png" alt="User profile picture">

                   <h3 class="profile-username text-center"><strong>Nina Mcintire</strong></h3>

                   <p class="text-muted text-center">KAMPI</p>

                 </div>
                 <!-- /.box-body -->
                 <div class="progress-box">
                   <div class="progress">
                     <div class="progress-bar progress-bar-red  progress-bar-striped active" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%">
                       38%
                     </div>
                   </div>
                   <p class="text-center">
                     3697 votes
                   </p>
                 </div>
                 <!-- /.progress-box -->
               </div>
               <!-- /.box -->
             </div>
             <!-- /.row -->
           </div>
         <!-- /.box-body -->
       </div>
       <!-- /.Vice President -->

       <div class="box box-danger box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Senators</h3>

            <div class="box-tools pull-right">
            <!--
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            -->
            </div>
            <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <!-- Profile Image -->
                <div class="col-md-4">
                  <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="assets/img/tup-logo.png" alt="User profile picture">

                    <h3 class="profile-username text-center"><strong> Fritzi Ann Pinto</strong></h3>

                    <p class="text-muted text-center">ASAP</p>

                  </div>
                  <!-- /.box-body -->
                  <div class="progress-box">
                    <div class="progress">
                      <div class="progress-bar progress-bar-red progress-bar-striped active" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%">
                        38%
                      </div>
                    </div>
                    <p class="text-center">
                      3697 votes
                    </p>
                  </div>
                  <!-- /.progress-box -->
                </div>
                <div class="col-md-4">
                  <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="assets/img/tup-logo.png" alt="User profile picture">

                    <h3 class="profile-username text-center"><strong> Nina Mcintire</strong></h3>

                    <p class="text-muted text-center">KAMPI</p>

                  </div>
                  <!-- /.box-body -->
                  <div class="progress-box">
                    <div class="progress">
                      <div class="progress-bar progress-bar-red progress-bar-striped active" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%">
                        38%
                      </div>
                    </div>
                    <p class="text-center">
                      3697 votes
                    </p>
                  </div>
                  <!-- /.progress-box -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.row -->
            </div>
          <!-- /.box-body -->
        </div>
        <!-- /.Senators -->

        <div class="box box-danger box-solid">
           <div class="box-header with-border">
             <h3 class="box-title">Governor</h3>

             <div class="box-tools pull-right">
               <!--
             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
             </button>
             -->
             </div>
             <!-- /.box-tools -->
             </div>
             <!-- /.box-header -->
             <div class="box-body">
               <div class="row">
                 <!-- Profile Image -->
                 <div class="col-md-4">
                   <div class="box-body box-profile radio">
                     <img class="profile-user-img img-responsive img-circle" src="assets/img/tup-logo.png" alt="User profile picture">

                     <h3 class="profile-username text-center"><strong> Fritzi Ann Pinto</strong></h3>

                     <p class="text-muted text-center">ASAP</p>

                   </div>
                   <!-- /.box-body -->
                   <div class="progress-box">
                     <div class="progress">
                       <div class="progress-bar progress-bar-red progress-bar-striped active" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%">
                         38%
                       </div>
                     </div>
                     <p class="text-center">
                       3697 votes
                     </p>
                   </div>
                   <!-- /.progress-box -->
                 </div>
                 <div class="col-md-4">
                   <div class="box-body box-profile radio">
                     <img class="profile-user-img img-responsive img-circle" src="assets/img/tup-logo.png" alt="User profile picture">

                     <h3 class="profile-username text-center"><strong> Nina Mcintire</strong></h3>

                     <p class="text-muted text-center">KAMPI</p>

                   </div>
                   <!-- /.box-body -->
                   <div class="progress-box">
                     <div class="progress">
                       <div class="progress-bar progress-bar-red progress-bar-striped active" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%">
                         38%
                       </div>
                     </div>
                     <p class="text-center">
                       3697 votes
                     </p>
                   </div>
                   <!-- /.progress-box -->
                 </div>
                 <!-- /.box -->
               </div>
               <!-- /.row -->
             </div>
           <!-- /.box-body -->
         </div>
         <!-- /.Governor -->

         <div class="box box-danger box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Vice Governor</h3>

              <div class="box-tools pull-right">
                <!--
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            -->
              </div>
              <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row form-group">
                  <!-- Profile Image -->
                  <div class="col-md-4">
                    <div class="box-body box-profile radio">
                      <img class="profile-user-img img-responsive img-circle" src="assets/img/tup-logo.png" alt="User profile picture">

                      <h3 class="profile-username text-center"><strong> Fritzi Ann Pinto</strong></h3>

                      <p class="text-muted text-center">ASAP</p>

                    </div>
                    <!-- /.box-body -->
                    <div class="progress-box">
                      <div class="progress">
                        <div class="progress-bar progress-bar-red progress-bar-striped active" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%">
                          38%
                        </div>
                      </div>
                      <p class="text-center">
                        3697 votes
                      </p>
                    </div>
                    <!-- /.progress-box -->
                  </div>
                  <div class="col-md-4">
                    <div class="box-body box-profile radio">
                      <img class="profile-user-img img-responsive img-circle" src="assets/img/tup-logo.png" alt="User profile picture">

                      <h3 class="profile-username text-center"><strong> Nina Mcintire</strong></h3>

                      <p class="text-muted text-center">KAMPI</p>

                    </div>
                    <!-- /.box-body -->
                    <div class="progress-box">
                      <div class="progress">
                        <div class="progress-bar progress-bar-red progress-bar-striped active" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%">
                          38%
                        </div>
                      </div>
                      <p class="text-center">
                        3697 votes
                      </p>
                    </div>
                    <!-- /.progress-box -->
                  </div>
                  <!-- /.box -->
                </div>
                <!-- /.row -->
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.Vice Governor -->
   </div>
   <div class="footer-black">
     <strong>Copyright &copy; 2014-2016 </strong> All rights reserved.
   </div>


   <script scr="dist/js/bootstrap.min.js"></script>
   <script src="dist/bower_components/jquery/dist/jquery.min.js"></script>
   <script scr="dist/js/adminlte.js"></script>
   <script src="dist/plugins/input-mask/jquery.inputmask.js"></script>
   <script src="dist/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
   <script src="dist/plugins/input-mask/jquery.inputmask.extensions.js"></script>
   <script src="dist/plugins/iCheck/icheck.min.js"></script>
   <script src="dist/bower_components/moment/min/moment.min.js"></script>
   <script src="dist/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
   <script src="dist/plugins/iCheck/icheck.js"></script>
   <script src="dist/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
   <script src="dist/plugins/timepicker/bootstrap-timepicker.min.js"></script>
   <script>
   $(function() {
     $('.dropdown-toggle').dropdown()
     //Datemask dd/mm/yyyy
     $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
     //Datemask2 mm/dd/yyyy
     $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
     //Money Euro
     $('[data-mask]').inputmask()

         //Date range picker
         $('#reservation').daterangepicker()
         //Date range picker with time picker
         $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
         //Date range as a button
         $('#daterange-btn').daterangepicker(
           {
             ranges   : {
               'Today'       : [moment(), moment()],
               'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month'  : [moment().startOf('month'), moment().endOf('month')],
               'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
             },
             startDate: moment().subtract(29, 'days'),
             endDate  : moment()
           },
           function (start, end) {
             $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
           }
         )

         //Date picker
         $('#datepicker').datepicker({
           autoclose: true
         })

   });


   </script>

</body>
</html>
