<?php
/**
 * Created by PhpStorm.
 * User: Desktop
 * Date: 16.11.2018
 * Time: 0:28
 */

namespace app\models;

use yii\db\ActiveRecord;

class CommentsForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'comments';
    }

    public function rules()
    {
        return [
            [['name'  , 'content' ] , 'required'],
            ['name' , 'string' , 'min' => 3],
            ['name' , 'string' , 'max' => 20 ],
            ['content' , 'trim'],
            //[['image'], 'file' , 'skipOnEmpty' => false , 'extensions' => 'png, jpg', 'maxFiles' => 4 ],
        ];
    }
}