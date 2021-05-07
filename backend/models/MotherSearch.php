<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Mother;

/**
 * MotherSearch represents the model behind the search form of `app\models\Mother`.
 */
class MotherSearch extends Mother
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'first_name', 'other_names', 'surname', 'email_address', 'husband_name', 'husband_phone_number', 'expected_date_of_delivery', 'facility', 'assigned_room_midwife', 'savings_contributor', 'financial_institution_partner', 'community_savings_group_name', 'cash_out_date', 'vas_preferences', 'other_preference', 'special_needs', 'created', 'modified'], 'safe'],
            [['gestation_age', 'savings_target'], 'number'],
            [['assigned_staff'], 'integer'],
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
        $query = Mother::find();

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
            'gestation_age' => $this->gestation_age,
            'expected_date_of_delivery' => $this->expected_date_of_delivery,
            'savings_target' => $this->savings_target,
            'cash_out_date' => $this->cash_out_date,
            'assigned_staff' => $this->assigned_staff,
            'created' => $this->created,
            'modified' => $this->modified,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'other_names', $this->other_names])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'email_address', $this->email_address])
            ->andFilterWhere(['like', 'husband_name', $this->husband_name])
            ->andFilterWhere(['like', 'husband_phone_number', $this->husband_phone_number])
            ->andFilterWhere(['like', 'facility', $this->facility])
            ->andFilterWhere(['like', 'assigned_room_midwife', $this->assigned_room_midwife])
            ->andFilterWhere(['like', 'savings_contributor', $this->savings_contributor])
            ->andFilterWhere(['like', 'financial_institution_partner', $this->financial_institution_partner])
            ->andFilterWhere(['like', 'community_savings_group_name', $this->community_savings_group_name])
            ->andFilterWhere(['like', 'vas_preferences', $this->vas_preferences])
            ->andFilterWhere(['like', 'other_preference', $this->other_preference])
            ->andFilterWhere(['like', 'special_needs', $this->special_needs]);

        return $dataProvider;
    }
}
