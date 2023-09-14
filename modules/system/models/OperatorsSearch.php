<?php

namespace app\modules\system\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\system\models\Operators;

/**
 * OperatorsSearch represents the model behind the search form of `app\modules\system\models\Operators`.
 */
class OperatorsSearch extends Operators
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'parent', 'department', 'status'], 'integer'],
            [['thai_name', 'eng_name', 'nick_name', 'team_name', 'email', 'tel1', 'tel2', 'line', 'avatar'], 'safe'],
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
        $query = Operators::find();

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
            'parent' => $this->parent,
            'department' => $this->department,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'thai_name', $this->thai_name])
            ->andFilterWhere(['like', 'eng_name', $this->eng_name])
            ->andFilterWhere(['like', 'nick_name', $this->nick_name])
            ->andFilterWhere(['like', 'team_name', $this->team_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'tel1', $this->tel1])
            ->andFilterWhere(['like', 'tel2', $this->tel2])
            ->andFilterWhere(['like', 'line', $this->line])
            ->andFilterWhere(['like', 'avatar', $this->avatar]);

        return $dataProvider;
    }
}
