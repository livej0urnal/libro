<?php
/**
 * Created by PhpStorm.
 * User: Desktop
 * Date: 15.11.2018
 * Time: 21:59
 */

namespace app\models;
use yii\db\ActiveRecord;

class Menu  extends ActiveRecord
{
    public static function tableName()
    {
        return 'menu';
    }
}