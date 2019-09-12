<?php
    use yii\helpers\Html;
    use yii\widgets\LinkPager;
?>

<?php if (!empty($articles)) : ?>
    <div class="row no-gutters">
        <?php foreach ($articles as $item) : ?>
        <div class="col-md-6 blog-entry-3 ftco-animate">
            <a href="<?= \yii\helpers\Url::to(['single' , 'id' => $item->id]) ?>" class="blog-img d-flex justify-content-center align-items-end" style="background-image: url(<?php echo $item->image  ?>);">
                <div class="text p-4">
                    <span><?= $item->category->title ?></span>
                    <h3><?= $item->title ?></h3>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
<div class="row mt-5">
    <div class="col text-center">
        <div class="block-27">
            <?php echo LinkPager::widget([
                'pagination' => $pages,
                'options' => ['class' => 'pagination right clear'],
                'linkOptions' => ['class' => 'link-pagination'],
            ]); ?>
        </div>
    </div>
</div>
<?php else : ?>
<h1 style="text-align: center; margin-top: 45%;">No articles</h1>
<?php endif; ?>