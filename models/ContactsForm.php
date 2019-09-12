<?php
/**
 * Created by PhpStorm.
 * User: Desktop
 * Date: 01.11.2018
 * Time: 12:43
 */

namespace app\models;

use yii\db\ActiveRecord;


class ContactsForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'forms';
    }
    public function rules()
    {
        return [
            [['name' , 'email'  , 'message' , 'subject' ] , 'required'],
            [['email'] , 'email'],
            ['name' , 'string' , 'min' => 3],
            ['name' , 'string' , 'max' => 20 ],
            ['message' , 'trim'],
            //[['image'], 'file' , 'skipOnEmpty' => false , 'extensions' => 'png, jpg', 'maxFiles' => 4 ],
        ];
    }
}