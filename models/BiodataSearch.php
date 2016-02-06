<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Biodata;

/**
 * BiodataSearch represents the model behind the search form about `app\models\Biodata`.
 */
class BiodataSearch extends Biodata
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Kearganegaraan'], 'integer'],
            [['NoKTP', 'Nama', 'TmptLahir', 'TglLahir', 'Alamat', 'AlamatTinggal', 'Agama', 'Status', 'Pekerjaan', 'ExpKtp', 'GolDar'], 'safe'],
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
        $query = Biodata::find();

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
            'TglLahir' => $this->TglLahir,
            'Kearganegaraan' => $this->Kearganegaraan,
            'ExpKtp' => $this->ExpKtp,
        ]);

        $query->andFilterWhere(['like', 'NoKTP', $this->NoKTP])
            ->andFilterWhere(['like', 'Nama', $this->Nama])
            ->andFilterWhere(['like', 'TmptLahir', $this->TmptLahir])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat])
            ->andFilterWhere(['like', 'AlamatTinggal', $this->AlamatTinggal])
            ->andFilterWhere(['like', 'Agama', $this->Agama])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Pekerjaan', $this->Pekerjaan])
            ->andFilterWhere(['like', 'GolDar', $this->GolDar]);

        return $dataProvider;
    }
}
