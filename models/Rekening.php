<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rekening".
 *
 * @property integer $id
 * @property integer $IdKaryawan
 * @property integer $IdBank
 * @property integer $NoRek
 * @property integer $Aktif
 *
 * @property Karyawan $idKaryawan
 * @property Bank $idBank
 */
class Rekening extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rekening';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'IdKaryawan', 'IdBank', 'NoRek'], 'required'],
            [['id', 'IdKaryawan', 'IdBank', 'NoRek', 'Aktif'], 'integer'],
            [['NoRek'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'IdKaryawan' => 'Id Karyawan',
            'IdBank' => 'Id Bank',
            'NoRek' => 'No Rek',
            'Aktif' => 'Aktif',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKaryawan()
    {
        return $this->hasOne(Karyawan::className(), ['id' => 'IdKaryawan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBank()
    {
        return $this->hasOne(Bank::className(), ['id' => 'IdBank']);
    }
}
