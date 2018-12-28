<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AsociadosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asociados-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dni') ?>

    <?= $form->field($model, 'razon_social') ?>

    <?= $form->field($model, 'responsable') ?>

    <?= $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'actividad') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'sitio_web') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'fecha_asociado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
