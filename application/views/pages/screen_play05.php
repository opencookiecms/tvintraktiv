<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <link href="<?php echo base_url();?>assets/owncss/screen4.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>

    <link href="<?php echo base_url();?>assets/style/css/block.css" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url();?>assets/style/js/bootstrap.min.css"></script>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body onload="startTime()">
<table width="100%" border="0">
  <tr>
    <td height="120" colspan="3" bgcolor="#2c2c54" style="text-align: center">
      <div class="title jps4" style="padding-top:10px;"><img src="<?php echo base_url();?>assets/logo/jps.png">  JABATAN PENGAIRAN DAN SALIRAN KUALA MUDA \ SIK \ BALING</div>
    </td>
  </tr>
  <tr>
    <td height="394" colspan="2" bgcolor="#16a085" style="text-align: center">
      <div class="sidemesg noticecolorfont3">
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
    </td>
    <td width="65%" rowspan="2" style="text-align: top" >
      <?php
      $lastvedioid= $get_lastidv[0]->id;
      ?>

       <video id="myvideo" controls autoplay>
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



    </td>
  </tr>
  <tr>
    <td height="251" colspan="2" bgcolor="#16a085" style="text-align: center">

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

    </td>
  </tr>
  <tr>
    <td width="20%" height="51" bgcolor="#e74c3c" style="text-align: center">
      <div class="clock2" id="txt"></div>
    </td>
    <td colspan="2" bgcolor="#2c3e50" style="text-align: center">
      <div class="msgbot">
        <marquee behavior="scroll" height="<?php echo $get_height[0]->bannerheight ?>" style="margin-top:10px;">
          <?php
          $pre     = "<span class='spantestss'>";
          $append  = "</span>";

          foreach ($get_message as $message_get) {
            echo $pre.$message_get->message_content.$append;

          }
          ?>
        </marquee>
      </div>
    </td>
  </tr>
</table>
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

</body>
</html>
