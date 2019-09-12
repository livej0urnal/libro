<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property int $articleid
 * @property string $published
 * @property string $name
 * @property string $content
 * @property string $image
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }
    public function getArticles()
    {
        return $this->hasOne(Articles::className() , ['id' => 'articleid']);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['articleid', 'name', 'content'], 'required'],
            [['articleid'], 'integer'],
            [['published'], 'safe'],
            [['name', 'content', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'articleid' => 'Articleid',
            'published' => 'Published',
            'name' => 'Name',
            'content' => 'Content',
            'image' => 'Image',
        ];
    }
}
