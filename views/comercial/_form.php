<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\comercial\cliventa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliventa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idCliente')->textInput() ?>

    <?= $form->field($model, 'cuit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dni')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'domcilio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'domiclioLegal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idTipoIva')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
