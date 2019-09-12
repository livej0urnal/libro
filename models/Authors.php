<?php
/**
 * Created by PhpStorm.
 * User: Desktop
 * Date: 15.11.2018
 * Time: 23:44
 */

namespace app\models;

use yii\db\ActiveRecord;

class Authors extends ActiveRecord
{
    public static function tableName()
    {
        return 'authors';
    }

    public function getArticles()
    {
        return $this->hasMany(Articles::className() , ['author' => 'id']);
    }
}