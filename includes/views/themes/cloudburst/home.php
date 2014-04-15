
<div id="lib_container">

<h2>My Library</h2>

    <?php

    $library = array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);

    $i = 0;
    $count = count($library);
    //Generate the sliders
    foreach($library as $title){

        $count--;
        //Beginning of the slider
        if($i == 0 && !($count == 0)){
            echo '<ul class="bxsliderCar">';
        }

        echo '<li class="slide"><img src="http://placehold.it/200x230&text=Show%20'.$i.'"></li>'."\r\n";

        $i++;
        //End of the slider
        if($i == 10 || $count == 0){
            echo '</ul>'."\r\n";
            $i = 0;
        }

    }


    ?>

    </div>


<script>
    $(document).ready(function(){
        $(".bxsliderCar").bxSlider({
            slideMargin: 5,
            slideWidth: 200,
            minSlides: 1,
            maxSlides: 10,
            moveSlides: 3,
            pager: false,
            infiniteLoop: true
        });
    });
</script>
<style>
    #test{
        padding-right: 20px;
        padding-left: 20px
    }
    .bx-wrapper .bx-viewport{
        background: transparent;
        border-top: solid #dbdbdb 3px;
        border-bottom: solid #dbdbdb 3px;
        border-left: none;
        border-right: none;
    }

    .bxsliderCar {
        padding-top: 0px;
        margin-top: 0px;
    }
</style>