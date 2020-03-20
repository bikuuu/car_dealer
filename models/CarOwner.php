<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car_owner".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $address
 * @property int $postal_code
 * @property int|null $pesel
 * @property int|null $nip
 * @property string $phone_number
 * @property string|null $email
 *
 * @property Car[] $cars
 */
class CarOwner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'car_owner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'address', 'postal_code', 'phone_number'], 'required'],
            [['postal_code', 'pesel', 'nip'], 'integer'],
            [['name', 'phone_number', 'email'], 'string', 'max' => 30],
            [['surname'], 'string', 'max' => 40],
            [['address'], 'string', 'max' => 100],
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
            'surname' => 'Surname',
            'address' => 'Address',
            'postal_code' => 'Postal Code',
            'pesel' => 'Pesel',
            'nip' => 'Nip',
            'phone_number' => 'Phone Number',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[Cars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Car::class, ['car_owner_id' => 'id']);
    }
}
