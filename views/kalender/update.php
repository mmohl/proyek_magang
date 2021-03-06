<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kalender */

$this->title = 'Update Kalender: ' . ' ' . $model->tgl;
$this->params['breadcrumbs'][] = ['label' => 'Kalenders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tgl, 'url' => ['view', 'id' => $model->tgl]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kalender-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
