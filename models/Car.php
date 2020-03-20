<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car".
 *
 * @property int $id
 * @property int $producer_model_id
 * @property int $car_owner_id
 * @property int $capacity
 * @property int $year
 * @property int $mileage
 * @property int $power
 * @property string $fuel_type
 * @property string $color
 * @property float $car_value
 * @property float $commission
 *
 * @property CarOwner $carOwner
 * @property ProducerModel $producerModel
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'car';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['producer_model_id', 'car_owner_id', 'capacity', 'year', 'mileage', 'power', 'fuel_type', 'color', 'car_value', 'commission'], 'required'],
            [['producer_model_id', 'car_owner_id', 'capacity', 'year', 'mileage', 'power'], 'integer'],
            [['car_value', 'commission'], 'number'],
            [['fuel_type'], 'string', 'max' => 3],
            [['color'], 'string', 'max' => 30],
            [['car_owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => CarOwner::class, 'targetAttribute' => ['car_owner_id' => 'id']],
            [['producer_model_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProducerModel::class, 'targetAttribute' => ['producer_model_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'producer_model_id' => 'Producer Model ID',
            'car_owner_id' => 'Car Owner ID',
            'capacity' => 'Capacity',
            'year' => 'Year',
            'mileage' => 'Mileage',
            'power' => 'Power',
            'fuel_type' => 'Fuel Type',
            'color' => 'Color',
            'car_value' => 'Car Value',
            'commission' => 'Commission',
        ];
    }

    /**
     * Gets query for [[CarOwner]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarOwner()
    {
        return $this->hasOne(CarOwner::class, ['id' => 'car_owner_id']);
    }

    /**
     * Gets query for [[ProducerModel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducerModel()
    {
        return $this->hasOne(ProducerModel::class, ['id' => 'producer_model_id']);
    }
}
