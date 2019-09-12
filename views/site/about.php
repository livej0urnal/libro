<?php
    use yii\helpers\Html;
?>
<div class="row about-section">
    <div class="col-md-6 ftco-animate">
        <?= Html::img([$author->image   , 'alt' => $author->name] , ['class' => 'img-fluid']) ?>
    </div>
    <div class="col-md-6 ftco-animate">
       <?= $author->text ?>
    </div>
    <div class="col-md-12 mt-5 ftco-animate">
        <p><?= $author->short ?></p>
        <h3 class="mb-4 mt-5">Follow us here</h3>
        <ul class="ftco-footer-social list-unstyled">
            <li class="ftco-animate"><a href="<?= $author->twitter ?>" target="_blank"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="<?= $author->facebook ?>" target="_blank"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="<?= $author->instagram ?>" target="_blank"><span class="icon-instagram"></span></a></li>
        </ul>
    </div>
</div>