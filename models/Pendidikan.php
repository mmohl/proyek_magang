<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pendidikan".
 *
 * @property integer $id
 * @property integer $IdBio
 * @property string $Jenjang
 * @property string $Sekolah
 * @property string $Jurusan
 * @property string $ThnLukus
 * @property string $Alamat
 *
 * @property Biodata $idBio
 */
class Pendidikan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pendidikan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'IdBio', 'Jenjang', 'Sekolah', 'Jurusan', 'ThnLukus', 'Alamat'], 'required'],
            [['id', 'IdBio'], 'integer'],
            [['Alamat'], 'string'],
            [['Jenjang'], 'string', 'max' => 5],
            [['Sekolah'], 'string', 'max' => 50],
            [['Jurusan'], 'string', 'max' => 20],
            [['ThnLukus'], 'string', 'max' => 4],
            [['Jenjang'], 'unique']
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
            'Jenjang' => 'Jenjang',
            'Sekolah' => 'Sekolah',
            'Jurusan' => 'Jurusan',
            'ThnLukus' => 'Thn Lukus',
            'Alamat' => 'Alamat',
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
