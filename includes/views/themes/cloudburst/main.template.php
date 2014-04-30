<?php

    //Prevent direct access
    require_once(dirname(__FILE__).'/kill_direct.php');

    //Load the theme configuration
    include_once(dirname(__FILE__).'/config/theme_config.php');
    $theme = new theme_config;

    //Check for additional parameters
    if(!(empty($page['parameters']))){

        //Additional Parameters were set
        $parameters = (array) json_decode($page['parameters']);

    }else{

        //Additional Parameters were NOT set
        $parameters = false;
    }

    //Fetch Alerts
    $alerts   = $alert->fetch_alerts();
    $notices  = $alert->fetch_notices();


?>
<html>

    <head>

        <title><?php echo $settings['page_title']; ?></title>

        <link href="<?php echo $settings['url']; ?>includes/views/themes/<?php echo $theme->dir_name; ?>/styles/styles.css" rel="stylesheet"/>

        <link href="http://localhost/cloudburst/cludes/libraries/jquery/video-js.css" rel="stylesheet">
        <link rel="stylesheet" href="/cloudburst/includes/libraries/bxslider/jquery.bxslider.css">
        <script src="http://localhost/cloudburst/includes/libraries/jquery/jquery-1.10.2.min.js"></script>
        <script src="http://localhost/cloudburst/includes/libraries/video-js/video.js"></script>
        <script src="http://localhost/cloudburst/includes/libraries/bxslider/jquery.bxslider.min.js"></script>

        <link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
        <script src="http://vjs.zencdn.net/c/video.js"></script>

    </head>

    <body>


        <?php

            //Allow disabling of the nav bar
            if(!(isset($parameters['nav'])) || $parameters['nav'] == true){

        ?>
        <div id="nav">

            <?php

            include_once(ABSPATH.'includes/views/themes/'.$theme->dir_name.'/nav.php');

            ?>

        </div>

        <?php
        }
        ?>

        <?php
        if(count($alerts) > 0){
            ?>
            <div id="alert">

                <?php

                $count = count($alerts);
                foreach($alerts as $alert){

                    echo $alert;


                    if($count > 1){
                        echo '<br /><br />';
                    }
                    $count--;

                }


                ?>

            </div>
        <?php
        }
        ?>

        <div id="<?php echo $page['div_id']; ?>">

            <?php

                include_once(ABSPATH.'includes/views/themes/'.$theme->dir_name.'/'.$page['path']);

            ?>

        </div>

        <div id="footer">
            <?php

                include_once(ABSPATH.'includes/views/themes/'.$theme->dir_name.'/footer.php');

            ?>
        </div>


        <?php
        if(count($notices) > 0){
            ?>
            <div id="notice">

                <?php

                $count = count($notices);
                foreach($notices as $notice){

                    echo $notice;


                    if($count > 1){
                        echo '<br />';
                    }
                    $count--;

                }


                ?>

            </div>
        <?php
        }
        ?>


    </body>

</html>