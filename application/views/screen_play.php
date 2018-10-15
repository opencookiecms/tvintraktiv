<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Jabatan Pengairan dan Saliran</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/carousel.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/owncss/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
   /* Make the image fully responsive */
   .carousel-inner img {
     width: 100%;
     height: 350px;
   }
   .carousel-inner{
     width: 100%;
     height: 350px;
   }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <nav class="navbar navbar-static-top" style="margin-left:0px">
        <marquee behavior="scroll">
          <h1>Selamat datang ke Jabatan Pengairan dan Saliran Negeri Kedah Darul Aman</h1>
        </marquee

        </nav>
      </header>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper clear-fixmargin" style="margin-left:0px;">

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <!--this is card row-->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="box box-solid bg-light-blue-gradient">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
              </div>

              <!-- /.nav-tabs-custom -->

              <div class="box box-solid bg-light-blue-gradient" style="height:200px">
                <center>
                  <?php
                  $i = 1;

                  foreach ($get_banner as $row) {
                 # code..

                   ?>

                   <tr>
                   <br>
                    <td><h3>NEW MESSAGE</h3></td>
                    <td><?php echo $row->banner_title?></td>
                    <br>
                    <td><?php echo $row->banner_content?></td>
                    <br>

                  </tr>


                  <?php } ?>
                </div>
              </center>




            </section>

            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">


              <!-- Map box -->
              <div class="box box-success">

                <div class="box-body">


                  <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="1" class="active"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                      <li data-target="#demo" data-slide-to="3"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="<?php echo base_url('/assets/images/slide-1.jpg');?>" alt="Los Angeles" width="1100" height="500">
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo base_url('/assets/images/slide-2.jpg');?>" alt="Chicago" width="1100" height="500">
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo base_url('/assets/images/slide-3.jpg');?>" alt="New York" width="1100" height="500">
                      </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
                  </div>





                </div>

              </div>

              <div class="box" style="padding:0px;">
                <div class="box-body">
                  <span class="loremss">
                    <marquee behavior="scroll" direction="up" height="350">
                      <?php echo $get_notice[0]->notice_content ?>

                    </marquee>
                  </span>
                </div>
              </div>







            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
        <div class="row">
          <section class="col-lg-12 connectedSortable">
            <div class="box">

              <marquee behavior="scroll" height="80" class="marquee">
                <?php
                $pre     = "<span class='spantest'>";
                $append  = "</span>";

                foreach ($get_message as $message_get) {
                  echo $pre.$message_get->message_content.$append;

                }
                ?>
              </marquee>

            </div>
          </div>
          <footer class="main-footer" style="margin-left:0px;height:100px;">
            get time
          </footer>

        </div>
        <!-- /.content-wrapper -->


      </div>
      <!-- ./wrapper -->

      <!-- jQuery 3 -->
      <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="<?php echo base_url();?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button);
      </script>
      <!-- Bootstrap 3.3.7 -->
      <script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- Morris.js charts -->
      <script src="<?php echo base_url();?>assets/bower_components/raphael/raphael.min.js"></script>
      <script src="<?php echo base_url();?>assets/bower_components/morris.js/morris.min.js"></script>
      <!-- Sparkline -->
      <script src="<?php echo base_url();?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
      <!-- jvectormap -->
      <script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="<?php echo base_url();?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="<?php echo base_url();?>assets/bower_components/moment/min/moment.min.js"></script>
      <script src="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
      <!-- datepicker -->
      <script src="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
      <!-- Bootstrap WYSIHTML5 -->
      <script src="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
      <!-- Slimscroll -->
      <script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
      <!-- FastClick -->
      <script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
    </html>
