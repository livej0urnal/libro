<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "sliders".
 *
 * @property int $id
 * @property string $image
 * @property string $link
 * @property string $title
 * @property string $categorylink
 */
class Sliders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sliders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'link', 'title', 'categorylink'], 'required'],
            [['image', 'link', 'title', 'categorylink'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'link' => 'Link',
            'title' => 'Title',
            'categorylink' => 'Categorylink',
        ];
    }
}
