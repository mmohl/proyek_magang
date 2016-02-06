<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PasanganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pasangans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasangan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pasangan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'IdBio',
            'NoKTP',
            'Nama',
            'TmptLahir',
            // 'TglLahir',
            // 'Alamat:ntext',
            // 'AlamatTinggal:ntext',
            // 'Agama',
            // 'Status',
            // 'Pekerjaan',
            // 'Kewarganegaraan',
            // 'ExpKtp',
            // 'GolDar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
