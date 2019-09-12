<?php
use yii\helpers\Html ;

?>


        <div class="slider-item js-fullheight" style="background-image: url('<?= $slide['image']; ?>');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-end" data-scrollax-parent="true">
                    <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <p class="cat"><span><?= $slide['categorylink'] ?></span></p>
                        <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?= $slide['title'] ?></h1>
                    </div>
                </div>
            </div>
        </div>
