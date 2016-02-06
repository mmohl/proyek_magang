<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank".
 *
 * @property integer $id
 * @property string $Keterangan
 * @property string $OptimisticLockField
 * @property string $GCRecord
 * @property string $Lokasi
 *
 * @property Rekening[] $rekenings
 */
class Bank extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bank';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Keterangan', 'OptimisticLockField', 'GCRecord', 'Lokasi'], 'required'],
            [['id'], 'integer'],
            [['Lokasi'], 'string'],
            [['Keterangan', 'OptimisticLockField', 'GCRecord'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Keterangan' => 'Keterangan',
            'OptimisticLockField' => 'Optimistic Lock Field',
            'GCRecord' => 'Gcrecord',
            'Lokasi' => 'Lokasi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRekenings()
    {
        return $this->hasMany(Rekening::className(), ['IdBank' => 'id']);
    }
}
