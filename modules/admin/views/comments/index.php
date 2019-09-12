<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-index">


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'articleid',
            [
                    'attribute' => 'articleid',
                    'value' => function($data){
                        return $data->articles->title;
                    },
            ],
            'published',
            'name',
            //'content',
            //'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
