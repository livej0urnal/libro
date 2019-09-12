<?php
/**
 * Created by PhpStorm.
 * User: Desktop
 * Date: 16.11.2018
 * Time: 0:09
 */

namespace app\models;

use yii\db\ActiveRecord;

class Comments  extends ActiveRecord
{
    public static function tableName()
    {
        return 'comments';
    }

    public function getArticles()
    {
        return $this->hasOne(Articles::className() , ['articleid' => 'id']);
    }
}