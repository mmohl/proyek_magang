<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "biodata".
 *
 * @property integer $id
 * @property string $NoKTP
 * @property string $Nama
 * @property string $TmptLahir
 * @property string $TglLahir
 * @property string $Alamat
 * @property string $AlamatTinggal
 * @property string $Agama
 * @property string $Status
 * @property string $Pekerjaan
 * @property integer $Kearganegaraan
 * @property string $ExpKtp
 * @property string $GolDar
 *
 * @property Karyawan[] $karyawans
 * @property Kontak[] $kontaks
 * @property Pasangan[] $pasangans
 * @property Pekerjaan[] $pekerjaans
 * @property Pendidikan[] $pendidikans
 */
class Biodata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'biodata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'NoKTP', 'Nama', 'TmptLahir', 'TglLahir', 'Alamat', 'AlamatTinggal', 'Agama', 'Status', 'Pekerjaan', 'Kearganegaraan'], 'required'],
            [['id', 'Kearganegaraan'], 'integer'],
            [['TglLahir', 'ExpKtp'], 'safe'],
            [['Alamat', 'AlamatTinggal'], 'string'],
            [['NoKTP'], 'string', 'max' => 16],
            [['Nama'], 'string', 'max' => 50],
            [['TmptLahir', 'Agama', 'Status', 'Pekerjaan'], 'string', 'max' => 20],
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
            'NoKTP' => 'No Ktp',
            'Nama' => 'Nama',
            'TmptLahir' => 'Tmpt Lahir',
            'TglLahir' => 'Tgl Lahir',
            'Alamat' => 'Alamat',
            'AlamatTinggal' => 'Alamat Tinggal',
            'Agama' => 'Agama',
            'Status' => 'Status',
            'Pekerjaan' => 'Pekerjaan',
            'Kearganegaraan' => 'Kearganegaraan',
            'ExpKtp' => 'Exp Ktp',
            'GolDar' => 'Gol Dar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKaryawans()
    {
        return $this->hasMany(Karyawan::className(), ['IdBio' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKontaks()
    {
        return $this->hasMany(Kontak::className(), ['IdBio' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPasangans()
    {
        return $this->hasMany(Pasangan::className(), ['IdBio' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPekerjaans()
    {
        return $this->hasMany(Pekerjaan::className(), ['IdBio' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPendidikans()
    {
        return $this->hasMany(Pendidikan::className(), ['IdBio' => 'id']);
    }

    public function id(){
        $_d = date("y");
        $_a = date("m");
        $_b = date("d");
        $_i = "P";
        $_left = $_i . $_d . $_a . $_b;
        $_first = "001";
        $_len = strlen($_left);
        $no = $_left . $_first;
      
        $last_po = $this->find(
                array(
                    "select"=>"id",
                    "condition" => "left(id, " . $_len . ") = :_left",
                    "params" => array(":_left" => $_left),
                    "order" => "id DESC"
                ));
      
        if($last_po != null){
            $_no = substr($last_po->id, $_len);
            $_no++;
            $_no = substr("000", strlen($_no)) . $_no;
            $no = $_left . $_no;
        }
      
        return $no;
    }
}
