<?php

namespace app\modules\sam\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\sam\models\FnameLname;

/**
 * FnameLnameSearch represents the model behind the search form of `app\modules\sam\models\FnameLname`.
 */
class FnameLnameSearch extends FnameLname
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fname_id', 'lname_id'], 'integer'],
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
        $query = FnameLname::find();

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
            'fname_id' => $this->fname_id,
            'lname_id' => $this->lname_id,
        ]);

        return $dataProvider;
    }
}
