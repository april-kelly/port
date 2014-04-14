<?php

//Start the users session
if(!(isset($_SESSION))){
    session_start();
}

//includes
if(!(defined('ABSPATH'))){
    require_once('../../path.php');
}
/*
require_once(ABSPATH.'includes/controllers/data.php');
require_once(ABSPATH.'includes/models/video.php');

//Fetch video
$video = new video;
$results = $video->fetch_video($_SESSION['video_id']);*/
?>

<!--
<style>
    article, aside, figure, footer, header, hgroup,
    menu, nav, section { display: block; }
</style>

<style type="text/css">
    #container {
        margin: 0px auto;
    }
    video {
        max-width: 100%;
        height: auto;
    }
</style>-->


        <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none"
               data-setup="{}" poster="./includes/views/themes/cloudburst/images/default_poster.png">
            <source src="/CloudBurst/content/uploads/mlp.mp4" type='video/mp4' />
        </video>


<script>


    // Once the video is ready
    _V_("example_video_1").ready(function(){

        // Store the video object
        var myPlayer = this;
        // Make up an aspect ratio
        var aspectRatio = 1536/2731;

        function resizeVideoJS(){
            var width = document.getElementById("container").offsetWidth;//document.getElementById("container").parentElement.offsetWidth;
            myPlayer.width(width).height( width * aspectRatio );

        }

        // Initialize resizeVideoJS()
        resizeVideoJS();
        // Then on resize call resizeVideoJS()
        window.onresize = resizeVideoJS;

        //myPlayer.play();
        //myPlayer.currentTime(200);

    });

</script>