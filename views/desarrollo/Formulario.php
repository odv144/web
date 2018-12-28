<?php 
use yii\helpers\Url;
use yii\helpers\Html;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	<h1>Formulario</h1>
	<h3><?= $mensaje?></h3>
	<?= Html::beginForm(
		Url::toRoute("desarrollo/request"),
		"get",
		['class'=>'form-inline']
		);
	?>
	<div class="form-group">
		<?= Html::label("Intruduce tu nombre", "nombre")?>
		<?= Html::textInput("nombre",null,['class'=>"form-control"])?>
		<?= Html::submitInput("Enviar nombre", ["class"=>"btn btn-primary"])?>
	</div>
	<?= Html::endForm() ?>
	<p>Estoy creando un formulario</p>
</body>
</html>