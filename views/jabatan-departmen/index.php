<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JabatanDepartmenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jabatan Departmens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-departmen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jabatan Departmen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'IdJabatan',
            'IdDept',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
