<?php

//Navigation bar

//Session
if(!(isset($_SESSION))){
    session_start();
}

//Check for user login
if(isset($_SESSION['user_id'])){

    //User is logged in
    $name = $_SESSION['name'];

}else{

    //User is not logged in, send to login
    header('location: ./?p=login');
    $name = '';


}

?>

<div id="nav-left">
    <img src="<?php $io->dout($settings['url']); ?>includes/views/themes/<?php $io->dout($theme->dir_name) ?>/images/logo.svg" width="100"/>
    <ul>
        <li><a href="./library">Library</a></li>
        <li><a href="./live">Live TV</a></li>
        <li><a href="./settings">Settings</a></li>
    </ul>
</div>
<div id="nav-right">
    <ul>
        <li><a id="ul-right" href="./logout">Hi, <?php $io->out($name);?></a></li>
    </ul>
</div>



