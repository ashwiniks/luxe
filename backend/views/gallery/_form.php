<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-form">
<div class="add_m">Add More Itinery <img src="images/add.png"></div>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
     <?php  $id= Yii::$app->getRequest()->getQueryParam('id');?>
<div class="test">
    <?= $form->field($model, 'tour_id')->textInput(['type' => 'hidden','value'=>$id]) ?>
    
    <?= $form->field($model, 'galleryimage[]')->fileInput(['class'=>'copy','multiple' => true]) ?>
     

 
</div>
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
