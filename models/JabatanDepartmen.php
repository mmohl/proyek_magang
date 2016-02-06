<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jabatan_departmen".
 *
 * @property integer $id
 * @property integer $IdJabatan
 * @property integer $IdDept
 *
 * @property Dept $idDept
 * @property Jabatan $idJabatan
 * @property Karyawan[] $karyawans
 */
class JabatanDepartmen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jabatan_departmen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'IdJabatan', 'IdDept'], 'required'],
            [['id', 'IdJabatan', 'IdDept'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'IdJabatan' => 'Id Jabatan',
            'IdDept' => 'Id Dept',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDept()
    {
        return $this->hasOne(Dept::className(), ['id' => 'IdDept']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdJabatan()
    {
        return $this->hasOne(Jabatan::className(), ['id' => 'IdJabatan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKaryawans()
    {
        return $this->hasMany(Karyawan::className(), ['IdJabDept' => 'id']);
    }
}
