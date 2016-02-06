<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kalender".
 *
 * @property string $tgl
 * @property string $Ket
 */
class Kalender extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kalender';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tgl', 'Ket'], 'required'],
            [['tgl'], 'safe'],
            [['Ket'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tgl' => 'Tgl',
            'Ket' => 'Ket',
        ];
    }
}
