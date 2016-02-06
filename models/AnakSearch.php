<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Anak;

/**
 * AnakSearch represents the model behind the search form about `app\models\Anak`.
 */
class AnakSearch extends Anak
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'IdPasangan', 'NoKTP'], 'integer'],
            [['Nama', 'TmptLahir', 'TglLahir', 'Alamat', 'AlamatTinggal', 'Agama', 'Status', 'Pekerjaan', 'Kewarganegaraan', 'ExpKtp', 'GolDar'], 'safe'],
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
        $query = Anak::find();

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
            'IdPasangan' => $this->IdPasangan,
            'NoKTP' => $this->NoKTP,
            'TglLahir' => $this->TglLahir,
            'ExpKtp' => $this->ExpKtp,
        ]);

        $query->andFilterWhere(['like', 'Nama', $this->Nama])
            ->andFilterWhere(['like', 'TmptLahir', $this->TmptLahir])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat])
            ->andFilterWhere(['like', 'AlamatTinggal', $this->AlamatTinggal])
            ->andFilterWhere(['like', 'Agama', $this->Agama])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Pekerjaan', $this->Pekerjaan])
            ->andFilterWhere(['like', 'Kewarganegaraan', $this->Kewarganegaraan])
            ->andFilterWhere(['like', 'GolDar', $this->GolDar]);

        return $dataProvider;
    }
}
