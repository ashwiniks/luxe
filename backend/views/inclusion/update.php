<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Inclusion */

$this->title = 'Update Inclusion: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Inclusions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inclusion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
