<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dept".
 *
 * @property integer $id
 * @property string $Dept
 * @property integer $parent
 *
 * @property JabatanDepartmen[] $jabatanDepartmens
 */
class Dept extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dept';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Dept', 'parent'], 'required'],
            [['id', 'parent'], 'integer'],
            [['Dept'], 'string', 'max' => 20],
            [['Dept'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Dept' => 'Dept',
            'parent' => 'Parent',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJabatanDepartmens()
    {
        return $this->hasMany(JabatanDepartmen::className(), ['IdDept' => 'id']);
    }
}
