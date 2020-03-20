<?php

use app\models\Producer;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProducerModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producer-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'producer_id')-> dropDownList(ArrayHelper::map(Producer::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
