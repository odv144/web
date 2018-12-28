<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Asociados */

$this->title = 'Create Asociados';
$this->params['breadcrumbs'][] = ['label' => 'Asociados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asociados-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
