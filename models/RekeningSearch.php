<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rekening;

/**
 * RekeningSearch represents the model behind the search form about `app\models\Rekening`.
 */
class RekeningSearch extends Rekening
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'IdKaryawan', 'IdBank', 'NoRek', 'Aktif'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Rekening::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'IdKaryawan' => $this->IdKaryawan,
            'IdBank' => $this->IdBank,
            'NoRek' => $this->NoRek,
            'Aktif' => $this->Aktif,
        ]);

        return $dataProvider;
    }
}
