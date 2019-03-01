<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
  <link href="<?php echo base_url();?>assets/style/css/ourthemes.css" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url();?>assets/style/js/bootstrap.min.css"></script>



  <script type="text/javascript">
    $('.carousel').carousel({
      interval: 5000
    })
  </script>

  <title>test</title>
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 whiteboxlogo headsize"><div class="imageposition"><img src="<?php echo base_url('/assets/images/jps.png');?>"></div></div>
      <div class="col-md-9 whiteboxcontent headsize"><span class="fonthead">JABATAN PENGAIRAN SALIRAN KUALA MUDA \ SIK \ BALING</span></div>
    </div>

    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row">
      <div class="col-md-7 blackbox">
        <?php
        $lastvedioid= $get_lastidv[0]->id;
        ?>
        <div class="embed-responsive embed-responsive-16by9">
         <video id="myvideo" width="100" height="<?php echo $get_height[0]->mediaheight ?>" controls autoplay>
          <?php
          foreach ($get_playback as $row) { ?>

           <source class="<?php if($row->id==$lastvedioid){echo "active";} ?>"src="<?php echo base_url("/assets/video/")?><?php echo $row->playback_content?>" type="video/mp4">

            <?php } ?>

          </video>

          <script type='text/javascript'>

           var myvid = document.getElementById('myvideo');

           myvid.addEventListener('ended', function(e) {
// get the active source and the next video source.
// I set it so if there's no next, it loops to the first one
var activesource = document.querySelector("#myvideo source.active");
var nextsource = document.querySelector("#myvideo source.active + source") || document.querySelector("#myvideo source:first-child");

// deactivate current source, and activate next one
activesource.className = "";
nextsource.className = "active";

// update the video source and play
myvid.src = nextsource.src;
myvid.play();
});
</script>


</div>
    </div>
      <div class="col-md-5 imagebox">
        <div id="demo" class="carousel slide" data-ride="carousel">



          <!-- The slideshow -->
          <div class="carousel-inner">

            <?php
            $lastid =  $get_lastid[0]->id;


            ?>
            <?php
            foreach ($get_slide as $row) {    ?>

            <div class="carousel-item
            <?php
            if($row->id==$lastid)
            {
             echo "active";
           }
           ?> ">
           <img  src="<?php echo site_url("/assets/images/")?><?php echo $row->slide_content?>">
         </div>

         <?php } ?>
       </div>

     </div>


   </div>
 </div>

 <!-- Columns are always 50% wide, on mobile and desktop -->
 <div class="row">
  <div class="col-sm-7">
    <div class=" noticebox">
      <marquee behavior="scroll" direction="up" height="300" style="padding-left:15px; padding-right:15px;">
        <?php

        foreach ($get_notice as $row) {
   # code..

          if ($row->notice_status == 'Show') {

            echo $row->notice_content;
          } else {

            echo " ";
          }

        } ?>

      </marquee>
    </div>
  </div>
  <div class="col-sm-5">

    <div class="clock-container">
      <div class="clock-col">
        <p class="clock-day clock-timer">
        </p>
        <p class="clock-label">
          Day
        </p>
      </div>
      <div class="clock-col">
        <p class="clock-hours clock-timer">
        </p>
        <p class="clock-label">
          Hours
        </p>
      </div>
      <div class="clock-col">
        <p class="clock-minutes clock-timer">
        </p>
        <p class="clock-label">
          Minutes
        </p>
      </div>
      <div class="clock-col">
        <p class="clock-seconds clock-timer">
        </p>
        <p class="clock-label">
          Seconds
        </p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <div class=" hourbox">
      <marquee behavior="scroll" height="<?php echo $get_height[0]->bannerheight ?>" style="margin-top:25px;">
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
</div>
</div>


<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', () =>
    requestAnimationFrame(updateTime)
    )

  function updateTime() {
    document.documentElement.style.setProperty('--timer-day', "'" + moment().format("dd") + "'");
    document.documentElement.style.setProperty('--timer-hours', "'" + moment().format("k") + "'");
    document.documentElement.style.setProperty('--timer-minutes', "'" + moment().format("mm") + "'");
    document.documentElement.style.setProperty('--timer-seconds', "'" + moment().format("ss") + "'");
    requestAnimationFrame(updateTime);
  }
</script>


</body>

</html>