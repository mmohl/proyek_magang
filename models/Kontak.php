<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kontak".
 *
 * @property integer $id
 * @property integer $IdBio
 * @property string $Jenis
 * @property string $Kontak
 *
 * @property Biodata $idBio
 */
class Kontak extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kontak';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'IdBio', 'Jenis', 'Kontak'], 'required'],
            [['id', 'IdBio'], 'integer'],
            [['Jenis', 'Kontak'], 'string', 'max' => 20]
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
            'Jenis' => 'Jenis',
            'Kontak' => 'Kontak',
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
