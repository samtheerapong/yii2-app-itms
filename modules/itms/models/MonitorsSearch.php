<?php

namespace app\modules\itms\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\itms\models\Monitors;

/**
 * MonitorsSearch represents the model behind the search form of `app\modules\itms\models\Monitors`.
 */
class MonitorsSearch extends Monitors
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['asset_number', 'model', 'serial', 'port_connected', 'install_date', 'docs', 'vendor', 'remask'], 'safe'],
            [['monitor_size', 'cost'], 'number'],
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
        $query = Monitors::find();

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
            'monitor_size' => $this->monitor_size,
            'install_date' => $this->install_date,
            'cost' => $this->cost,
        ]);

        $query->andFilterWhere(['like', 'asset_number', $this->asset_number])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'port_connected', $this->port_connected])
            ->andFilterWhere(['like', 'docs', $this->docs])
            ->andFilterWhere(['like', 'vendor', $this->vendor])
            ->andFilterWhere(['like', 'remask', $this->remask]);

        return $dataProvider;
    }
}
