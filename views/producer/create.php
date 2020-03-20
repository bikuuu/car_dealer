<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Producer */

$this->title = 'Stwórz producenta';
$this->params['breadcrumbs'][] = ['label' => 'Producenci', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
