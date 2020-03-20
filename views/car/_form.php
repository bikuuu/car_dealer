<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Car */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="car-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'producer_model_id')->textInput()->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\ProducerModel::find()->all(), 'id', 'name'))->label('Model Samochodu') ?>

    <?= $form->field($model, 'car_owner_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\CarOwner::find()->all(), 'id', 'name'))->label('Właściciel samochodu') ?>

    <?= $form->field($model, 'capacity')->textInput()->label('Pojemność (cm3)') ?>

    <?= $form->field($model, 'year')->textInput() -> label('Rok produkcji') ?>

    <?= $form->field($model, 'mileage')->textInput()->label('Przebieg') ?>

    <?= $form->field($model, 'power')->textInput() ->label('Moc (KM)')?>

    <?= $form->field($model, 'fuel_type')->textInput()->dropDownList(array("ON", "PB", "LPG", "Elektryczny"))->label('Rodzaj paliwa') ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true])->label('Kolor') ?>

    <?= $form->field($model, 'car_value')->textInput(['maxlength' => true])->label('Wartość samochodu') ?>

    <?= $form->field($model, 'commission')->textInput(['maxlength' => true]) ->label('Prowizja')?>

    <div class="form-group">
        <?= Html::submitButton('Zapisz', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
