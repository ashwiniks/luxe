<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tour".
 *
 * @property integer $id
 * @property string $title
 * @property string $price
 * @property string $days
 * @property string $excerpt
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Itinery[] $itineries
 */
class Tour extends \yii\db\ActiveRecord
{
    public $tourimage;
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
            [['title','category','subcategory','price', 'days', 'excerpt', 'image', 'created_at', 'updated_at'], 'required'],
            [['excerpt'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 1000],
            [['price'], 'string', 'max' => 10],
            [['days', 'image'], 'string', 'max' => 100]
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
            'price' => 'Price',
            'days' => 'Days',
            'excerpt' => 'Excerpt',
            'image' => 'Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItineries()
    {
        return $this->hasMany(Itinery::className(), ['tour_id' => 'id']);
    }
    
    public function upload()
    {
        
            
            $this->tourimage->saveAs('uploads/' . $this->tourimage->baseName . '.' . $this->tourimage->extension);
            return true;
       
    }
}
