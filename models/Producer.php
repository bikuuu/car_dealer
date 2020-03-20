<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producer".
 *
 * @property int $id
 * @property string $name
 *
 * @property ProducerModel[] $producerModels
 */
class Producer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[ProducerModels]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducerModels()
    {
        return $this->hasMany(ProducerModel::class, ['producer_id' => 'id']);
    }
}
