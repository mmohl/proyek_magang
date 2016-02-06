<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnakSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Anaks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anak-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Anak', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'IdPasangan',
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
