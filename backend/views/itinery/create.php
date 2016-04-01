<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Itinery */

$this->title = 'Create Itinery';
$this->params['breadcrumbs'][] = ['label' => 'Itineries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itinery-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
