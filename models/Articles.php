<?php
/**
 * Created by PhpStorm.
 * User: Desktop
 * Date: 15.11.2018
 * Time: 22:54
 */

namespace app\models;

use yii\db\ActiveRecord;

class Articles  extends ActiveRecord
{
    public static function tableName()
    {
        return 'articles';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className() , ['id' => 'categoryid']);
    }

    public function getAuthors()
    {
        return $this->hasOne(Authors::className() , ['id' => 'author']);
    }

    public function getComments()
    {
        return $this->hasMany(Comments::className() , ['id' => 'articleid']);
    }
}