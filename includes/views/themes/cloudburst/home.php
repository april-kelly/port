
<div id="test">
    <h2>My Library</h2>
    <ul class="bxsliderCar">
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%201"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%202"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%203"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%204"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%205"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%206"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%207"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%208"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%209"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%2010"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%2011"></li>
    </ul>
    <ul class="bxsliderCar">
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%201"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%202"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%203"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%204"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%205"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%206"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%207"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%208"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%209"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%2010"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%2011"></li>
    </ul>
    <ul class="bxsliderCar">
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%201"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%202"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%203"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%204"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%205"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%206"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%207"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%208"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%209"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%2010"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%2011"></li>
    </ul>
    <ul class="bxsliderCar">
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%201"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%202"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%203"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%204"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%205"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%206"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%207"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%208"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%209"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%2010"></li>
        <li class="slide"><img src="http://placehold.it/200x230&text=Show%2011"></li>
    </ul>
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