<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProducerModel */

$this->title = 'Utwórz model samochodu';
$this->params['breadcrumbs'][] = ['label' => 'Model Samochodu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producer-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
