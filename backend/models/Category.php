<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $category_id
 * @property string $category_name
 * @property string $category_link
 * @property integer $parent_id
 * @property integer $sort_order
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name', 'category_link'], 'required'],
            [['parent_id', 'sort_order'], 'integer'],
            [['category_name'], 'string', 'max' => 50],
            [['category_link'], 'string', 'max' => 255],
            [['category_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'category_name' => 'Category Name',
            'category_link' => 'Category Link',
            'parent_id' => 'Parent ID',
            'sort_order' => 'Sort Order',
        ];
    }
    
    public function beforeSave($insert) {
        if(parent::beforeSave($insert))
        {
            if($this->parent_id == "")
            {
                $this->parent_id = 1;
                
            }
            return TRUE;
        }
        
    }
}
