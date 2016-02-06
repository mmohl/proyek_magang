<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pekerjaan;

/**
 * PekerjaanSearch represents the model behind the search form about `app\models\Pekerjaan`.
 */
class PekerjaanSearch extends Pekerjaan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'IdBio'], 'integer'],
            [['Perusahaan', 'Jabatan', 'TglMasuk', 'TglKeluar'], 'safe'],
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
        $query = Pekerjaan::find();

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
            'IdBio' => $this->IdBio,
            'TglMasuk' => $this->TglMasuk,
            'TglKeluar' => $this->TglKeluar,
        ]);

        $query->andFilterWhere(['like', 'Perusahaan', $this->Perusahaan])
            ->andFilterWhere(['like', 'Jabatan', $this->Jabatan]);

        return $dataProvider;
    }
}
