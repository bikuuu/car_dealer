<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CarOwner */

$this->title = 'Stwórz właściciela pojazdu';
$this->params['breadcrumbs'][] = ['label' => 'Właściciel Samochodu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="car-owner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
