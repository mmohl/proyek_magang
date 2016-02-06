<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pekerjaan".
 *
 * @property integer $id
 * @property integer $IdBio
 * @property string $Perusahaan
 * @property string $Jabatan
 * @property string $TglMasuk
 * @property string $TglKeluar
 *
 * @property Biodata $idBio
 */
class Pekerjaan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pekerjaan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'IdBio', 'Perusahaan', 'Jabatan', 'TglMasuk', 'TglKeluar'], 'required'],
            [['id', 'IdBio'], 'integer'],
            [['TglMasuk', 'TglKeluar'], 'safe'],
            [['Perusahaan'], 'string', 'max' => 50],
            [['Jabatan'], 'string', 'max' => 20],
            [['Perusahaan'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'IdBio' => 'Id Bio',
            'Perusahaan' => 'Perusahaan',
            'Jabatan' => 'Jabatan',
            'TglMasuk' => 'Tgl Masuk',
            'TglKeluar' => 'Tgl Keluar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBio()
    {
        return $this->hasOne(Biodata::className(), ['id' => 'IdBio']);
    }
}
