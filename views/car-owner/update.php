<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CarOwner */

$this->title = 'Uaktualnij posiadacza pojazdu: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Właściciel samochodu', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="car-owner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
