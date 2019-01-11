<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\comercial\cliventa */

$this->title = 'Update Cliventa: ' . $model->idCliente;
$this->params['breadcrumbs'][] = ['label' => 'Cliventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idCliente, 'url' => ['view', 'id' => $model->idCliente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cliventa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
