<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JabatanDepartmen */

$this->title = 'Create Jabatan Departmen';
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Departmens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-departmen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
