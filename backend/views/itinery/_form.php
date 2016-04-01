<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Itinery */
/* @var $form yii\widgets\ActiveForm */
$id= Yii::$app->getRequest()->getQueryParam('id');
?>

<div class="itinery-form">
<div class="add_m">Add More Itinery <img src="images/add.png"></div>
    <?php $form = ActiveForm::begin(); ?>
<div class="test">
    
<div class="copy">
    <?= $form->field($model, 'tour_id[]')->textInput(['value' => $id,'type'=>'hidden']) ?>
    <?= $form->field($model, 'day[]')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'details[]')->textarea(['rows' => 6]) ?>
</div>
    
</div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
