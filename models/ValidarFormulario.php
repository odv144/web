<?php 
namespace app\models;
use Yii;
use yii\base\model;

class ValidarFormulario extends model{

	public $nombre;
	public $email;

	public function rules()
	{
		return[
			['nombre','required','message'=>'Campo Requerido'],
			['nombre','match','pattern'=>"/^.{3,50}$/","message"=>"Minimo 3 y máximo 50"],
			['nombre','match','pattern'=>"/^[0-9a-z]+$/i","message"=>"solo se aceptan letas y numeros"],
			['email','required',"message"=>"campo requerido"],
			['email','match','pattern'=>"/^.{5,80}$/","message"=>"Minimo 5 y máximo 80"],
			['email','email','message'=>'Formato no valido'],
		];
	}

	public function attributeLabels()
	{
		return[
		'nombre'=>"Nombre:",
		'email'=>"Email:"
		];
	}
}

 ?>