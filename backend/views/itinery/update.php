<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Itinery */

$this->title = 'Update Itinery: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Itineries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="itinery-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
