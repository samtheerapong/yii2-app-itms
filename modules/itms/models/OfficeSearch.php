<?php

namespace app\modules\itms\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\itms\models\Office;

/**
 * OfficeSearch represents the model behind the search form of `app\modules\itms\models\Office`.
 */
class OfficeSearch extends Office
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['asset_no', 'name', 'key', 'install_date', 'email_actived', 'email_password', 'vendor', 'docs', 'remask'], 'safe'],
            [['cost'], 'number'],
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
        $query = Office::find();

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
            'install_date' => $this->install_date,
            'cost' => $this->cost,
        ]);

        $query->andFilterWhere(['like', 'asset_no', $this->asset_no])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'key', $this->key])
            ->andFilterWhere(['like', 'email_actived', $this->email_actived])
            ->andFilterWhere(['like', 'email_password', $this->email_password])
            ->andFilterWhere(['like', 'vendor', $this->vendor])
            ->andFilterWhere(['like', 'docs', $this->docs])
            ->andFilterWhere(['like', 'remask', $this->remask]);

        return $dataProvider;
    }
}
