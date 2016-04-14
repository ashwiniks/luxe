<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Exclude */

$this->title = 'Create Exclude';
$this->params['breadcrumbs'][] = ['label' => 'Excludes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exclude-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
