<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producer_model".
 *
 * @property int $id
 * @property int $producer_id
 * @property string $name
 *
 * @property Car[] $cars
 * @property Producer $producer
 */
class ProducerModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producer_model';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['producer_id', 'name'], 'required'],
            [['producer_id'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['producer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Producer::class, 'targetAttribute' => ['producer_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'producer_id' => 'Producent',
            'name' => 'Nazwa',
        ];
    }

    /**
     * Gets query for [[Cars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Car::class, ['producer_model_id' => 'id']);
    }

    /**
     * Gets query for [[Producer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducer()
    {
        return $this->hasOne(Producer::class, ['id' => 'producer_id']);
    }
}
