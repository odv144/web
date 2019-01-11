<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\comercial\cliventa */

$this->title = 'Create Cliventa';
$this->params['breadcrumbs'][] = ['label' => 'Cliventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliventa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
