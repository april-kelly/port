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
    <img src="<?php echo $settings['url']; ?>includes/views/themes/<?php echo $theme->dir_name; ?>/images/logo.svg" width="100"/>
    <ul>
        <li><a href="/<?php echo $base_dir; ?>/home">Library</a></li>
        <li><a href="/<?php echo $base_dir; ?>/live">Live TV</a></li>
        <li><a href="/<?php echo $base_dir; ?>/settings">Settings</a></li>
    </ul>
</div>
<div id="nav-right">
    <ul>
        <li><a id="ul-right" href="/<?php echo $base_dir; ?>/logout">Hi, <?php echo $name; ?></a></li>
    </ul>
</div>



