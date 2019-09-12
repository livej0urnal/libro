<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $published
 * @property int $author
 * @property int $categoryid
 * @property string $short
 * @property string $content
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'image', 'author', 'categoryid', 'short', 'content'], 'required'],
            [['published'], 'safe'],
            [['author', 'categoryid'], 'integer'],
            [['short', 'content'], 'string'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image' => 'Image',
            'published' => 'Published',
            'author' => 'Author',
            'categoryid' => 'Categoryid',
            'short' => 'Short',
            'content' => 'Content',
        ];
    }
}
