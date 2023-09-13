<?php

namespace app\modules\itms\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\itms\models\SystemUser;

/**
 * SystemUserSearch represents the model behind the search form of `app\modules\itms\models\SystemUser`.
 */
class SystemUserSearch extends SystemUser
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user', 'department', 'position', 'role', 'location', 'code_mfc', 'computer', 'monitor_main', 'monitor_secondary', 'license_windows', 'license_office', 'printer_1', 'printer_2', 'ups', 'status'], 'integer'],
            [['default_username', 'default_password', 'company_email', 'company_phone', 'private_phone', 'line_id', 'remask', 'image', 'docs'], 'safe'],
            [['total'], 'number'],
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
        $query = SystemUser::find();

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
            'user' => $this->user,
            'department' => $this->department,
            'position' => $this->position,
            'role' => $this->role,
            'location' => $this->location,
            'code_mfc' => $this->code_mfc,
            'computer' => $this->computer,
            'monitor_main' => $this->monitor_main,
            'monitor_secondary' => $this->monitor_secondary,
            'license_windows' => $this->license_windows,
            'license_office' => $this->license_office,
            'printer_1' => $this->printer_1,
            'printer_2' => $this->printer_2,
            'ups' => $this->ups,
            'status' => $this->status,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'default_username', $this->default_username])
            ->andFilterWhere(['like', 'default_password', $this->default_password])
            ->andFilterWhere(['like', 'company_email', $this->company_email])
            ->andFilterWhere(['like', 'company_phone', $this->company_phone])
            ->andFilterWhere(['like', 'private_phone', $this->private_phone])
            ->andFilterWhere(['like', 'line_id', $this->line_id])
            ->andFilterWhere(['like', 'remask', $this->remask])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'docs', $this->docs]);

        return $dataProvider;
    }
}
