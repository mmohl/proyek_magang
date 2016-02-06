<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pasangan */

$this->title = 'Create Pasangan';
$this->params['breadcrumbs'][] = ['label' => 'Pasangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
