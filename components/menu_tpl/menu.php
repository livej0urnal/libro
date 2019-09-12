<?php
use yii\helpers\Html;
?>
<?php if(!empty($category)) : ?>
<ul class="mb-5">

    <li class="<?php if($category['link'] === $_SERVER['REQUEST_URI'] ) {echo 'active';} ?>"><a href="<?= $category['link'] ?>"><span><?= $category['title'] ?></span></a></li>
</ul>
<?php endif; ?>