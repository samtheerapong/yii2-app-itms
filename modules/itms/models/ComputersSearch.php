<?php

namespace app\modules\itms\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\itms\models\Computers;

/**
 * ComputersSearch represents the model behind the search form of `common\modules\it\models\Computers`.
 */
class ComputersSearch extends Computers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'computer_type','computer_status'], 'integer'],
            [['asset_number', 'hostname', 'model', 'serial', 'cpu', 'ram', 'hdd1', 'hdd2', 'ssd1', 'ssd2', 'vga', 'lan_ip_address', 'lan_mac_address', 'wifi_ip_address', 'wifi_mac_address', 'install_date', 'image', 'vendor', 'remask'], 'safe'],
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
        $query = Computers::find();

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
            'computer_type' => $this->computer_type,
            'computer_status' => $this->computer_status,
            'install_date' => $this->install_date,
            'cost' => $this->cost,
        ]);

        $query->andFilterWhere(['like', 'asset_number', $this->asset_number])
            ->andFilterWhere(['like', 'hostname', $this->hostname])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'cpu', $this->cpu])
            ->andFilterWhere(['like', 'ram', $this->ram])
            ->andFilterWhere(['like', 'hdd1', $this->hdd1])
            ->andFilterWhere(['like', 'hdd2', $this->hdd2])
            ->andFilterWhere(['like', 'ssd1', $this->ssd1])
            ->andFilterWhere(['like', 'ssd2', $this->ssd2])
            ->andFilterWhere(['like', 'vga', $this->vga])
            ->andFilterWhere(['like', 'lan_ip_address', $this->lan_ip_address])
            ->andFilterWhere(['like', 'lan_mac_address', $this->lan_mac_address])
            ->andFilterWhere(['like', 'wifi_ip_address', $this->wifi_ip_address])
            ->andFilterWhere(['like', 'wifi_mac_address', $this->wifi_mac_address])
            ->andFilterWhere(['like', 'docs', $this->docs])
            ->andFilterWhere(['like', 'vendor', $this->vendor])
            ->andFilterWhere(['like', 'remask', $this->remask]);

        return $dataProvider;
    }
}
