<?php
/**
 * Created by PhpStorm.
 * User: Desktop
 * Date: 15.11.2018
 * Time: 22:54
 */

namespace app\models;

use yii\db\ActiveRecord;

class Category  extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getArticles()
    {
        return $this->hasMany(Articles::className(), ['categoryid' => 'id']);
    }
}