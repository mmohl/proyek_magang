<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jabatan".
 *
 * @property integer $id
 * @property string $Jabatan
 * @property integer $parent
 *
 * @property JabatanDepartmen[] $jabatanDepartmens
 */
class Jabatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jabatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Jabatan', 'parent'], 'required'],
            [['id', 'parent'], 'integer'],
            [['Jabatan'], 'string', 'max' => 20],
            [['Jabatan'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Jabatan' => 'Jabatan',
            'parent' => 'Parent',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJabatanDepartmens()
    {
        return $this->hasMany(JabatanDepartmen::className(), ['IdJabatan' => 'id']);
    }
}
