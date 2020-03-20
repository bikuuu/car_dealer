<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Car */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Samochód', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="car-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Uaktualnij', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Usuń', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            ['label'=>'Model samochodu',
                'value'=>$model->producerModel->name,],
            ['label'=>'Właściciel samochodu',
                'value'=>$model->carOwner->name,],
            ['label'=>'Pojemność',
                'value'=>$model->capacity,],
            ['label'=>'Rok produkcji',
                'value'=>$model->year,],
            ['label'=>'Przebieg',
                'value'=>$model->mileage,],
            ['label'=>'Moc',
                'value'=>$model->power,],
            ['label'=>'Rodzaj paliwa',
                'value'=>$model->fuel_type],
            ['label'=>'Kolor',
                'value'=>$model->color,],
            ['label'=>'Wartość pojazdu',
                'value'=>$model->car_value,],
            ['label'=>'Prowizja',
                'value'=>$model->commission,],
        ],
    ]) ?>

</div>
