<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="car-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'producer_model_id') ?>

    <?= $form->field($model, 'car_owner_id') ?>

    <?= $form->field($model, 'capacity') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'mileage') ?>

    <?= $form->field($model, 'power') ?>

    <?= $form->field($model, 'fuel_type') ?>

    <?= $form->field($model, 'color') ?>

    <?= $form->field($model, 'car_value') ?>

    <?= $form->field($model, 'commission') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
