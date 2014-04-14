<?php

/**
 * Copyright ${year} William Caleb Kelly
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
 
 /**
 * Name:        Live TV Page
 * Description: 
 * Date:        4/14/14
 * Programmer:  Liam Kelly
 */

?>
<div id="container">
    <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none"
           data-setup="{}" poster="./includes/views/themes/cloudburst/images/default_poster.png">
        <source src="./<?php //echo $results['media'][0]['location']; ?>" type='video/mp4' />
    </video>
</div>


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