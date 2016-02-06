<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property integer $id
 * @property integer $IdBio
 * @property integer $IdJabDept
 * @property string $Nip
 * @property string $username
 * @property integer $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $role
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $RStat
 * @property string $TglMasuk
 * @property string $TglKeluar
 * @property string $tipe
 * @property string $Aktif
 *
 * @property Biodata $idBio
 * @property JabatanDepartmen $idJabDept
 * @property Rekening[] $rekenings
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'IdBio', 'IdJabDept', 'username', 'auth_key', 'password_hash', 'password_reset_token', 'role', 'status', 'created_at', 'updated_at', 'RStat', 'TglMasuk', 'TglKeluar', 'tipe', 'Aktif'], 'required'],
            [['id', 'IdBio', 'IdJabDept', 'auth_key'], 'integer'],
            [['created_at', 'updated_at', 'TglMasuk', 'TglKeluar'], 'safe'],
            [['Nip', 'username', 'password_hash', 'password_reset_token', 'role', 'status', 'RStat', 'tipe', 'Aktif'], 'string', 'max' => 20],
            [['Nip'], 'unique']
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
            'IdJabDept' => 'Id Jab Dept',
            'Nip' => 'Nip',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'role' => 'Role',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'RStat' => 'Rstat',
            'TglMasuk' => 'Tgl Masuk',
            'TglKeluar' => 'Tgl Keluar',
            'tipe' => 'Tipe',
            'Aktif' => 'Aktif',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBio()
    {
        return $this->hasOne(Biodata::className(), ['id' => 'IdBio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdJabDept()
    {
        return $this->hasOne(JabatanDepartmen::className(), ['id' => 'IdJabDept']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRekenings()
    {
        return $this->hasMany(Rekening::className(), ['IdKaryawan' => 'id']);
    }
}
