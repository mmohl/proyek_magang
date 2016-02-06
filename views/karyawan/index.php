<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KaryawanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Karyawans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="karyawan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Karyawan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'IdBio',
            'IdJabDept',
            'Nip',
            'username',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            // 'role',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'RStat',
            // 'TglMasuk',
            // 'TglKeluar',
            // 'tipe',
            // 'Aktif',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
