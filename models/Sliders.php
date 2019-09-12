<?php
/**
 * Created by PhpStorm.
 * User: Desktop
 * Date: 15.11.2018
 * Time: 22:29
 */

namespace app\models;
use yii\db\ActiveRecord;


class Sliders extends ActiveRecord
{
    public static function tableName()
    {
        return 'sliders';
    }
}