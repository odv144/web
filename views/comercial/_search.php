<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\comercial\ClienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliventa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idCliente') ?>

    <?= $form->field($model, 'cuit') ?>

    <?= $form->field($model, 'dni') ?>

    <?= $form->field($model, 'rs') ?>

    <?= $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'apellido') ?>

    <?php // echo $form->field($model, 'domcilio') ?>

    <?php // echo $form->field($model, 'domiclioLegal') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'idTipoIva') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
