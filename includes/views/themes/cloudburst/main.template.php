<?php

    //Load the theme configuration
    include_once(dirname(__FILE__).'/config/theme_config.php');
    $theme = new theme_config;

    //Check for additional parameters
    if(!(empty($page['parameters']))){

        //Additional Parameters were set
        $parameters = json_decode($page['parameters']);

    }else{

        //Additional Parameters were NOT set
        $parameters;
    }
$message = '<b>Error: </b> This is a message!';
//var_dump($parameters);
?>
<html>

    <head>

        <title><?php echo $settings['page_title']; ?></title>

        <link href="<?php echo $settings['url']; ?>includes/views/themes/<?php echo $theme->dir_name ?>/styles/styles.css" rel="stylesheet"/>

        <link href="http://localhost/cloudburst/cludes/libraries/jquery/video-js.css" rel="stylesheet">
        <link rel="stylesheet" href="/includes/libraries/bxslider/jquery.bxslider.css">
        <script src="http://localhost/cloudburst/cludes/libraries/jquery/jquery-1.10.2.min.js"></script>
        <script src="http://localhost/cloudburst/cludes/libraries/video-js/video.js"></script>
        <script src="http://localhost/cloudburst/cludes/libraries/bxslider/jquery.bxslider.min.js"></script>

        <link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
        <script src="http://vjs.zencdn.net/c/video.js"></script>

    </head>

    <body>

        <div id="nav">

            <?php

                include_once(ABSPATH.'includes/views/themes/'.$theme->dir_name.'/nav.php');

            ?>

        </div>

        <?php
            if(isset($message)){
        ?>
        <div id="message">

            <?php echo $message; ?>

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


    </body>

</html>