<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Inclusion */

$this->title = 'Create Inclusion';
$this->params['breadcrumbs'][] = ['label' => 'Inclusions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inclusion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>