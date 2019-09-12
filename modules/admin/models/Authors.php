<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "authors".
 *
 * @property int $id
 * @property string $name
 * @property string $short
 * @property string $shortimg
 * @property string $image
 * @property string $text
 * @property string $facebook
 * @property string $twitter
 * @property string $instagram
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'short', 'shortimg', 'image', 'text', 'facebook', 'twitter', 'instagram'], 'required'],
            [['short', 'text'], 'string'],
            [['name', 'shortimg', 'image', 'facebook', 'twitter', 'instagram'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'short' => 'Short',
            'shortimg' => 'Shortimg',
            'image' => 'Image',
            'text' => 'Text',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'instagram' => 'Instagram',
        ];
    }
}
