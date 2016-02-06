<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Kalender */

$this->title = 'Create Kalender';
$this->params['breadcrumbs'][] = ['label' => 'Kalenders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kalender-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
