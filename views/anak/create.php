<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Anak */

$this->title = 'Create Anak';
$this->params['breadcrumbs'][] = ['label' => 'Anaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
