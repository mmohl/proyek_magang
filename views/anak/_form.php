<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Anak */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'IdPasangan')->textInput() ?>

    <?= $form->field($model, 'NoKTP')->textInput() ?>

    <?= $form->field($model, 'Nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TmptLahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TglLahir')->textInput() ?>

    <?= $form->field($model, 'Alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'AlamatTinggal')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Agama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kewarganegaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ExpKtp')->textInput() ?>

    <?= $form->field($model, 'GolDar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
