<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "exclude".
 *
 * @property integer $id
 * @property integer $tour_id
 * @property string $details
 *
 * @property Tour $tour
 */
class Exclude extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exclude';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tour_id', 'details'], 'required'],
            [['tour_id'], 'integer'],
            [['details'], 'string', 'max' => 1000]
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
