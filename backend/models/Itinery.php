<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "itinery".
 *
 * @property integer $id
 * @property integer $tour_id
 * @property string $day
 * @property string $details
 *
 * @property Tour $tour
 */
class Itinery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'itinery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tour_id', 'day', 'details'], 'required'],
            [['tour_id'], 'integer'],
            [['details'], 'string'],
            [['day'], 'string', 'max' => 100],
           
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tour_id' => 'Tour ID',
            'day' => 'Day',
            'details' => 'Details',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTour()
    {
        return $this->hasOne(Tour::className(), ['id' => 'tour_id']);
    }
}
