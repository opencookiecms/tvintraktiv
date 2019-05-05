<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link href="<?php echo base_url();?>assets/owncss/screen4.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>

    <link href="<?php echo base_url();?>assets/owncss/block.css" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url();?>assets/style/js/bootstrap.min.css"></script>
  <title>Screen-02</title>
</head>

<body onload="startTime()">
  <div class="containers">

    <div class="title jps4" style="padding-top:10px;"><img src="<?php echo base_url();?>assets/logo/jps.png"/>  JABATAN PENGAIRAN DAN SALIRAN KUALA MUDA \ SIK \ BALING</div>
    <div class="sidemesg noticecolorfont3">
      <marquee behavior="scroll" direction="up" height="750" scrollamount="3" style="padding-left:15px; padding-right:15px;">
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
    <div class="vedios">
      <?php
      $lastvedioid= $get_lastidv[0]->id;
      ?>

       <video id="myvideo"  controls autoplay>
        <?php
        foreach ($get_playback as $row) { ?>

         <source class="<?php if($row->id==$lastvedioid){echo "active";} ?>"src="<?php echo base_url("/assets/video/")?><?php echo $row->playback_video?>" type="video/mp4">

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

    <div class="clock" id="txt"></div>
    <div class="msgbot">
      <marquee behavior="scroll" height="50" style="margin-top:10px;">
        <?php
        $pre     = "<span class='spantestss'>";
        $append  = "</span>";

        foreach ($get_message as $message_get) {
          echo $pre.$message_get->message_content.$append;

        }
        ?>
      </marquee>
    </div>
  </div>
</body>

<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
</html>
