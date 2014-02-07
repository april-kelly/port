
<div id="settings-nav">
        <ul>
        <li><a href="./status">Status</a></li>
        <li><a href="">General</a></li>
        <li><a href="">Users</a></li>
        <li><a href="">TV</a></li>
        <li><a href="">Library</a></li>

        <?php if($settings['debug'] == true){ ?>
            <li><a href="./debug">Debug</a></li>
            <li><a href="./developer">Developer</a></li>
        <?php } ?>

    </ul>
</div>

<div id="menu">

    <?php

        //Attempt to load the menu
        if(isset($parameters['menu'])){

            //Menu parameter passed, load it
            $menu = $parameters['menu'];

        }else{

            //Menu parameter NOT passed, load the default
            $menu = 'status.php';

        }


        //Include the menu
        include_once(ABSPATH.'includes/views/themes/'.$theme->dir_name.'/menus/'.$menu);

    ?>

</div>
