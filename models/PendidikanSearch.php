<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pendidikan;

/**
 * PendidikanSearch represents the model behind the search form about `app\models\Pendidikan`.
 */
class PendidikanSearch extends Pendidikan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'IdBio'], 'integer'],
            [['Jenjang', 'Sekolah', 'Jurusan', 'ThnLukus', 'Alamat'], 'safe'],
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
        $query = Pendidikan::find();

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
        ]);

        $query->andFilterWhere(['like', 'Jenjang', $this->Jenjang])
            ->andFilterWhere(['like', 'Sekolah', $this->Sekolah])
            ->andFilterWhere(['like', 'Jurusan', $this->Jurusan])
            ->andFilterWhere(['like', 'ThnLukus', $this->ThnLukus])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat]);

        return $dataProvider;
    }
}
