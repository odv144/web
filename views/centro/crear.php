<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;

 ?>
 <h1>Crear Nuevo Asociado</h1>
 <h3><? if($msg!=null) echo $msg; ?></h3>
 <?php $form=ActiveForm::begin([
 		'method'=>'post',
 		'enableClientValidation'=>false,
 		'enableAjaxValidation'=>true,
 ]);
  ?>
  <div class="form-group">
  	<?= $form->field($model,"dni")->input("text")?>
  </div>
  <div class="form-group">
  	<?= $form->field($model,"razon_social")->input("text")?>
  </div>
  <div class="form-group">
  	<?= $form->field($model,"responsable")->input("text")?>
  </div>
  <div class="form-group">
  <?= $form->field($model,"direccion")->input("text")?>
  	
  </div>
  <div class="form-group">
  	<?= $form->field($model,"actividad")->input("text")?>
  </div>
  <div class="form-group">
  	<?= $form->field($model,"telefono")->input("text")?>
  </div>
  <div class="form-group">
  	<?= $form->field($model,"email")->input("text")?>
  </div>
  
  <div class="form-group">
  	<?= $form->field($model,"sitio_web")->input("text")?>
  </div>
  
  <div class="form-group">
  	<?= $form->field($model,"logo")->input("text")?>
  </div>	
  <?= Html::submitButton("Crear",['class'=>'btn btn-primary'])?>
  
  <?php $form->end() ?>		
