<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Car;

/**
 * CarSearch represents the model behind the search form of `app\models\Car`.
 */
class CarSearch extends Car
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'producer_model_id', 'car_owner_id', 'capacity', 'year', 'mileage', 'power'], 'integer'],
            [['fuel_type', 'color'], 'safe'],
            [['car_value', 'commission'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Car::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'producer_model_id' => $this->producer_model_id,
            'car_owner_id' => $this->car_owner_id,
            'capacity' => $this->capacity,
            'year' => $this->year,
            'mileage' => $this->mileage,
            'power' => $this->power,
            'car_value' => $this->car_value,
            'commission' => $this->commission,
        ]);

        $query->andFilterWhere(['like', 'fuel_type', $this->fuel_type])
            ->andFilterWhere(['like', 'color', $this->color]);

        return $dataProvider;
    }
}
