<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RekeningSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekenings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekening-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rekening', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'IdKaryawan',
            'IdBank',
            'NoRek',
            'Aktif',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
