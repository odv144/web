<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\comercial\cliventa */

$this->title = $model->idCliente;
$this->params['breadcrumbs'][] = ['label' => 'Cliventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cliventa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idCliente], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idCliente], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idCliente',
            'cuit',
            'dni',
            'rs',
            'nombre',
            'apellido',
            'domcilio',
            'domiclioLegal',
            'telefono',
            'email:email',
            'idTipoIva',
        ],
    ]) ?>

</div>
