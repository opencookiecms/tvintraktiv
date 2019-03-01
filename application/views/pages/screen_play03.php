<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>

    <link href="<?php echo base_url();?>assets/style/css/block.css" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url();?>assets/style/js/bootstrap.min.css"></script>

  <title>Screen cast 03</title>
</head>
<body>

<div class="container-fluid">
  <div class="imagelogo">
<img src="<?php echo base_url();?>assets/logo/jps.png">
</div>
  <div class="logoandwelcome jps">

<span>JABATAN PENGAIRAN DAN SALIRAN KUALA MUDA \ SIK \ BALING</span>
  </div>
<div class="vedioblock">
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
<div class="noticeboard noticecolorfont">
  <marquee behavior="scroll" direction="up" height="500" scrollamount="3" style="padding-left:15px; padding-right:15px;">
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
<div class="bottommessage">
  <marquee behavior="scroll" height="<?php echo $get_height[0]->bannerheight ?>" style="margin-top:25px;">
    <?php
    $pre     = "<span class='spantests'>";
    $append  = "</span>";

    foreach ($get_message as $message_get) {
      echo $pre.$message_get->message_content.$append;

    }
    ?>
  </marquee>
</div>

<div class="slideimage">
  <div id="demo" class="carousel slide" data-ride="carousel" >



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

<div class="tiktok">
  <div class="clock-container">
    <div class="clock-col">
      <p class="clock-day clock-timer">
      </p>
      <p class="clock-label">
        Day
      </p>
    </div>
    <div class="clock-col" >
      <p class="clock-hours clock-timer">
      </p>
      <p class="clock-label" >
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
