<?php
use yii\helpers\Html;
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

<?php else : ?>
    <h1 style="text-align: center; margin-top: 45%;">No articles</h1>
<?php endif; ?>