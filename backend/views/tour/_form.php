<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Category;

/* @var $this yii\web\View */
/* @var $model backend\models\Tour */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
      <?php
        $model1=new Category();
        //$parent_cat=array();
      $category=$model1::findAll(['parent_id'=>0]);
      foreach ($category as $category)
      {
       $key=$category->category_id;
       $value =$category->category_name;
       $parent_cat["$key"]= $value;
      }
      print_r($parent_cat);
      
   echo $form->field($model, 'category')->dropDownList($parent_cat,['prompt'=>'Select category']);
   ?>
    <div >
        <label id="sub1" for="tour-subcategory" class="control-label">SubCategory</label>
        <select  id="sub" class="form-control" name="Tour[subcategory]"></select>
        
    </div>
    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
    <?php
      $days=array('1'=>'1days','2'=>'2days','3'=>'3days','4'=>'4days','5'=>'5days','6'=>'6days','7'=>'7days','8'=>'8days');
    echo $form->field($model, 'days')->dropDownList($days,['prompt'=>'Select days']);
   ?>

    <?= $form->field($model, 'excerpt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tourimage')->fileInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
