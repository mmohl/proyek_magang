<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnakSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anak-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'IdPasangan') ?>

    <?= $form->field($model, 'NoKTP') ?>

    <?= $form->field($model, 'Nama') ?>

    <?= $form->field($model, 'TmptLahir') ?>

    <?php // echo $form->field($model, 'TglLahir') ?>

    <?php // echo $form->field($model, 'Alamat') ?>

    <?php // echo $form->field($model, 'AlamatTinggal') ?>

    <?php // echo $form->field($model, 'Agama') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'Pekerjaan') ?>

    <?php // echo $form->field($model, 'Kewarganegaraan') ?>

    <?php // echo $form->field($model, 'ExpKtp') ?>

    <?php // echo $form->field($model, 'GolDar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
