<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Inclusion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inclusion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tour_id')->textInput() ?>

    <?= $form->field($model, 'details')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
