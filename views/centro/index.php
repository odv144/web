<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AsociadosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asociados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asociados-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asociados', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dni',
            'razon_social',
            'responsable',
            'direccion',
            //'actividad',
            //'telefono',
            //'email:email',
            //'sitio_web',
            //'logo',
            //'fecha_asociado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
