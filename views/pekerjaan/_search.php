<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PekerjaanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pekerjaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'IdBio') ?>

    <?= $form->field($model, 'Perusahaan') ?>

    <?= $form->field($model, 'Jabatan') ?>

    <?= $form->field($model, 'TglMasuk') ?>

    <?php // echo $form->field($model, 'TglKeluar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
