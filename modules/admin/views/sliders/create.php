<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Sliders */

$this->title = 'Create Sliders';
$this->params['breadcrumbs'][] = ['label' => 'Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sliders-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
