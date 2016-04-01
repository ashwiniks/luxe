<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property integer $id
 * @property integer $tour_id
 * @property string $galleryimage
 *
 * @property Tour $tour
 */
class Gallery extends \yii\db\ActiveRecord
{
     public $galleryimage;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tour_id', 'galleryimage'], 'required'],
            [['tour_id'], 'integer'],
            [['galleryimage'], 'string', 'max' => 100]
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
            'galleryimage' => 'Galleryimage',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTour()
    {
        return $this->hasOne(Tour::className(), ['id' => 'tour_id']);
    }
    public function upload(){
        print_r($this->galleryimage);
        
      foreach ($this->galleryimage as $file) {
               
              // echo $file->baseName;
              
                $file->saveAs('uploads/gallery/' . $file->baseName . '.' . $file->extension);
                
            }
            return true;
    }
}
