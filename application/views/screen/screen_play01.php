<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo base_url();?>assets/owncss/newscreen01.css" rel="stylesheet" type="text/css">
<!--https://grid.layoutit.com/?id=aQDSipO-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
    <title>Screen 01</title>
</head>
<body onload="startTime()">
<div class="grid-container">
  <div class="right"></div>
  <div class="left"></div>
  <div class="top"></div>
  <div class="bottom"></div>
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
  <div class="clockarea">
  <div class="jam" id="txt">
    </div>
  </div>
  <div class="noticearea">
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
  <div class="Logo jpstitle">
  <img class="jpslogo" src="<?php echo base_url();?>assets/logo/jps.png">  JABATAN PENGAIRAN DAN SALIRAN KUALA MUDA / SIK / BALING

  </div>
  <div class="videoarea">
  <div class="" style="width:100%; height:100%;" id="video-placeholder"></div>
     <script src="https://www.youtube.com/iframe_api"></script>
  </div>
  <script type='text/javascript'>
var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('video-placeholder', {
        width:'auto',
        height: 'auto',
        videoId: '<?php echo $get_lastidyoutube[0]->content ?>',
        playerVars: {
            color: 'white',
            autoplay:'1',
            loop:'1',
            enablejsapi:'1',
            playlist: '<?php foreach ($get_youtube as $row) { ?> <?php echo $row->content.",";?><?php } ?>'
        },
        events: {
            onReady: initialize
        }
    });
}

function initialize(){

    // Update the controls on load
    updateTimerDisplay();
    updateProgressBar();

    // Clear any old interval.
    clearInterval(time_update_interval);

    // Start interval to update elapsed time display and
    // the elapsed part of the progress bar every second.
    time_update_interval = setInterval(function () {
        updateTimerDisplay();
        updateProgressBar();
    }, 1000)

}
</script>




  <div class="banner">
    <div class="bannerlayourt">
    <div id="demo" class="carousel slide" data-ride="carousel">

<div class="carousel-inner crsize">
    <?php $lastid =  $get_lastbanner[0]->id;?>
        <?php foreach ($get_banner as $row) {?>
        <div class="carousel-item <?php if($row->id==$lastid){echo "active";} ?> ">
            <img class="imgcrs" src="<?php echo site_url("/assets/images/")?><?php echo $row->banner_content?>">
        </div>
    <?php } ?>
</div>
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