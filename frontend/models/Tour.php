<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tour".
 *
 * @property integer $id
 * @property string $title
 * @property string $excerpt
 * @property string $tour_image
 * @property string $created_at
 * @property string $updated_at
 */
class Tour extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tour';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'excerpt', 'tour_image', 'created_at', 'updated_at'], 'required'],
            [['excerpt'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 1000],
            [['tour_image'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'excerpt' => 'Excerpt',
            'tour_image' => 'Tour Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
