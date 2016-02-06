<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pendidikan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendidikan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'IdBio')->textInput() ?>

    <?= $form->field($model, 'Jenjang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Sekolah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jurusan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ThnLukus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
