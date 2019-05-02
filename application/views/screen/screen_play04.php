<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo base_url();?>assets/owncss/screen05.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
    <title>screen 04</title>
</head>

<body onload="startTime()">

<div class="grid-container">
  <div class="top"></div>
  <div class="l"></div>
  <div class="r"></div>
  <div class="b"></div>
  <div class="logodanjps jpstitle">
  <img class="jpslogo" src="<?php echo base_url();?>assets/logo/jps.png">  JABATAN PENGAIRAN DAN SALIRAN KUALA MUDA \ SIK \ BALING

  </div>
  <div class="youtube">
  <iframe width="100%" height="100%"
        src="https://www.youtube.com/embed/2JImBb9YLdg=1"frameborder="0" 
        allowfullscreen>
  </iframe>
  </div>
  <div class="noticeboard">
    <div class="thenotis">
        <marquee behavior="scroll" direction="up" height="100%" scrollamount="3" style="padding-left:15px; padding-right:15px;">
         <?php

            foreach ($get_notice as $row) {
                 if ($row->notice_status == 'Show') {
                 echo $row->notice_content;
                 } else {
                echo " ";
                }

                } ?>

  </marquee>
    </div>
  </div>
  <div class="clock">
      <div class="jam" id="txt">

      </div>
  </div>
  <div class="messagebot">
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
  <div class="cuaca">
  <a class="weatherwidget-io" href="https://forecast7.com/en/5d64100d49/sungai-petani/" data-label_1="SUNGAI PETANI" data-label_2="Cuaca" data-theme="original" >SUNGAI PETANI Cuaca</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
  </div>
  <div class="slideimage">
  <div id="demo" class="carousel slide" data-ride="carousel">

<div class="carousel-inner crsize">
    <?php $lastid =  $get_lastid[0]->id;?>
        <?php foreach ($get_slide as $row) {?>
        <div class="carousel-item <?php if($row->id==$lastid){echo "active";} ?> ">
            <img class="imgcrs" src="<?php echo site_url("/assets/images/")?><?php echo $row->slide_content?>">
        </div>
    <?php } ?>
</div>
</div>
  </div>
</div>



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