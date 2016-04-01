<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tour */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
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
