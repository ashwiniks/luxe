<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Exclude */

$this->title = 'Update Exclude: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Excludes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exclude-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
