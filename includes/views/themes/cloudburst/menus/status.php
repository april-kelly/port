<h3>Status</h3>
<p>

    Welcome to <?php echo $settings['product_name']; ?>
    <?php echo $settings['version']; ?>
    <?php echo $settings['version_type']; ?>!
    <br />

    <a href="./video" class="button">Videos</a>

</p>
<hr />
<p class="info">
    <em>
        Powered by The <?php echo $settings['foundation_product_name']; ?>
        version <?php echo $settings['foundation_version']; ?>
        <?php echo $settings['foundation_version_type']; ?>.
    </em>
</p>
<p>
    <?php

    foreach($settings as $key => $value){
        echo '<span style="text-align: left;">'.$key.'</span>';
        echo '<span style="text-align: center;"> => </span>';
        echo '<span style="text-align: right;">'.$value.'</span>';
        echo '<br/>';
    }
    ?>
</p>