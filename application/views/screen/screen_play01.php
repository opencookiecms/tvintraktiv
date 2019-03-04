<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>screen 06</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url();?>assets/owncss/screen01.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>

</head>
<body onload="startTime()">
<div class="containers">
    <div class="tv-header">
        <div class="headerload">
        <img class="logoimage" src="<?php echo base_url();?>assets/logo/jps.png">  Jabatan Pengairan dan Saliran Kuala Muda / Sik / Baling
        </div>
    </div>
    <div class="tv-notice">
        <div class="sidenotice">
            <marquee behavior="scroll" direction="up"  scrollamount="3" class="slidemarque">
                <?php
                    foreach ($get_notice as $row) 
                    {
                        if ($row->notice_status == 'Show') 
                        {
                        echo $row->notice_content;
                        } 
                        else 
                         {
                        echo " ";
                         }
                    } 
            ?>
        </marquee>
        </div>
    </div>
    <div class="tv-vedio">
        <?php $lastvedioid= $get_lastidv[0]->id;?>

        <video id="myvideo" controls autoplay>
            <?php foreach ($get_playback as $row) { ?>
                <source class="<?php if($row->id==$lastvedioid){echo "active";} ?>"src="<?php echo base_url("/assets/video/")?><?php echo $row->playback_video?>" type="video/mp4">
            <?php } ?>
        </video>
        
    </div>
    <div class="tv-slide">
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
    <div class="tv-banner">
        tv-banner
    </div>
    <div class="tv-clock">
        <div id="txt"></div>
    </div>
    <div class="tv-massagebot">
        <marquee behavior="scroll"  style="margin-top:10px;">
            <?php
                $pre     = "<span class='spanmsgbot'>";
                $append  = "</span>";
                foreach ($get_message as $message_get) 
                {
                    echo $pre.$message_get->message_content.$append;
                }
            ?>
         </marquee>
    </div>
</div>
<script src="<?php echo base_url()?>assets/owncss/js/v.js"></script>
<script src="<?php echo base_url()?>assets/owncss/js/t.js"></script>
</body>
</html>