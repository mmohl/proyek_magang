<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Karyawan;

/**
 * KaryawanSearch represents the model behind the search form about `app\models\Karyawan`.
 */
class KaryawanSearch extends Karyawan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'IdBio', 'IdJabDept', 'auth_key'], 'integer'],
            [['Nip', 'username', 'password_hash', 'password_reset_token', 'role', 'status', 'created_at', 'updated_at', 'RStat', 'TglMasuk', 'TglKeluar', 'tipe', 'Aktif'], 'safe'],
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
        $query = Karyawan::find();

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
            'IdJabDept' => $this->IdJabDept,
            'auth_key' => $this->auth_key,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'TglMasuk' => $this->TglMasuk,
            'TglKeluar' => $this->TglKeluar,
        ]);

        $query->andFilterWhere(['like', 'Nip', $this->Nip])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'role', $this->role])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'RStat', $this->RStat])
            ->andFilterWhere(['like', 'tipe', $this->tipe])
            ->andFilterWhere(['like', 'Aktif', $this->Aktif]);

        return $dataProvider;
    }
}
