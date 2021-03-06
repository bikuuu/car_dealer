<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Samochód';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Stwórz samochód', ['create'], ['class' => 'btn btn-success']); ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,



        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'power',
            'producer_model_id',
            'car_owner_id',
            'capacity',
            'color',
            'power',
            'year',
            'mileage',
            'fuel_type',
            'car_value',
            'commission',

           ['class'=>'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
