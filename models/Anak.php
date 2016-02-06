<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anak".
 *
 * @property integer $id
 * @property integer $IdPasangan
 * @property integer $NoKTP
 * @property string $Nama
 * @property string $TmptLahir
 * @property string $TglLahir
 * @property string $Alamat
 * @property string $AlamatTinggal
 * @property string $Agama
 * @property string $Status
 * @property string $Pekerjaan
 * @property string $Kewarganegaraan
 * @property string $ExpKtp
 * @property string $GolDar
 *
 * @property Pasangan $idPasangan
 */
class Anak extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anak';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'IdPasangan', 'NoKTP', 'Nama', 'TmptLahir', 'TglLahir', 'Alamat', 'AlamatTinggal', 'Agama', 'Status', 'Pekerjaan', 'Kewarganegaraan', 'GolDar'], 'required'],
            [['id', 'IdPasangan', 'NoKTP'], 'integer'],
            [['TglLahir', 'ExpKtp'], 'safe'],
            [['Alamat', 'AlamatTinggal'], 'string'],
            [['Nama'], 'string', 'max' => 50],
            [['TmptLahir', 'Agama', 'Status', 'Pekerjaan', 'Kewarganegaraan'], 'string', 'max' => 20],
            [['GolDar'], 'string', 'max' => 2],
            [['NoKTP'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'IdPasangan' => 'Id Pasangan',
            'NoKTP' => 'No Ktp',
            'Nama' => 'Nama',
            'TmptLahir' => 'Tmpt Lahir',
            'TglLahir' => 'Tgl Lahir',
            'Alamat' => 'Alamat',
            'AlamatTinggal' => 'Alamat Tinggal',
            'Agama' => 'Agama',
            'Status' => 'Status',
            'Pekerjaan' => 'Pekerjaan',
            'Kewarganegaraan' => 'Kewarganegaraan',
            'ExpKtp' => 'Exp Ktp',
            'GolDar' => 'Gol Dar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPasangan()
    {
        return $this->hasOne(Pasangan::className(), ['id' => 'IdPasangan']);
    }
}
