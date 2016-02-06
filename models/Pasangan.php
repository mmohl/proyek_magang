<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasangan".
 *
 * @property integer $id
 * @property integer $IdBio
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
 * @property Anak[] $anaks
 * @property Biodata $idBio
 */
class Pasangan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pasangan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'IdBio', 'NoKTP', 'Nama', 'TmptLahir', 'TglLahir', 'Alamat', 'AlamatTinggal', 'Agama', 'Status', 'Pekerjaan', 'Kewarganegaraan', 'ExpKtp', 'GolDar'], 'required'],
            [['id', 'IdBio', 'NoKTP'], 'integer'],
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
            'IdBio' => 'Id Bio',
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
    public function getAnaks()
    {
        return $this->hasMany(Anak::className(), ['IdPasangan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBio()
    {
        return $this->hasOne(Biodata::className(), ['id' => 'IdBio']);
    }
}
