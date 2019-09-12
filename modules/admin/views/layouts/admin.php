<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <title><?= Html::encode($this->title) ?></title>
        <meta charset="<?= Yii::$app->charset ?>">
        <?= Html::csrfMetaTags() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->head() ?>
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="/css/admin.css">
    </head>
    <body>
    <?php $this->beginBody() ?>


    <div id="colorlib-page">

        <div id="main" class="admin-panel">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-2 ">
                        <div class="sidebar">
                            <div class="header-logo">
                                <img src="https://myprojects.info/images/logo.png.pagespeed.ce.gnW6iZO-0U.png" alt="">
                            </div>
                            <ul class="admin-menu">
                                <li><a href="/admin/menu/index">Menu</a></li>
                                <li><a href="/admin/sliders/index">Sliders</a></li>
                                <li><a href="/admin/articles/index">Articles</a></li>
                                <li><a href="/admin/category/index">Category</a></li>
                                <li><a href="/admin/comments/index">Comments</a></li>
                                <li><a href="/admin/authors/index">Authors</a></li>
                                <li><a href="/admin/forms/index">Contact forms</a></li>
                            </ul>

                            <li><a href="/site/logout">Logout</a></li>
                        </div>

                    </div>
                    <div class="col-sm-10 content-admin">
                        <div class="content-panel">

                            <?= $content; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg>
        </div>

    </div>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>