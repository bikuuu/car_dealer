<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CarOwnerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Właściciel samochodu';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="car-owner-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Stwórz właściciela pojazdu', ['create'], ['class' => 'btn btn-success']); ?>

    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'name',
            'surname',
            'address',
            'postal_code',
            'pesel',
            'nip',
            'phone_number',
            'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
