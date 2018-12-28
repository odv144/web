<?php 
namespace app\models;

use Yii;
use yii\base\Model;


class Asociado extends Model
{
	public $id;
	public $dni;
	public $razon_social;
	public $responsable;
	public $direccion;
	public $actividad;
	public $telefono;
	public $email;
	public $sitio_web;
	public $logo;
	public $fecha_asociado;

	public function rules()
	{
		return[
		 	[['id','dni', 'razon_social', 'responsable', 'direccion', 'actividad', 'telefono', 'email', 'sitio_web', 'fecha_asociado'], 'required'],
			
			['dni','match','pattern'=>'/^[0-9\s]+$/i','message'=>'Solo se permiten numeros'],
			['dni','match','pattern'=>'/^.{6,8}$/','message'=>'Minimo de caracteres 6 y maximo 8'],

			
			['razon_social','match','pattern'=>'/^[0-9a-záéíóúñ\s]+$/i','message'=>'Solo se permiten letras'],
			['razon_social','match','pattern'=>'/^.{5,30}$/','message'=>'Minimo de caracteres 5 y maximo 30'],

			['responsable','match','pattern'=>'/^[a-záéíóúñ\s]+$/i','message'=>'Solo se permiten letras'],
			['responsable','match','pattern'=>'/^.{3,30}$/','message'=>'Minimo de caracteres 3 y maximo 30'],

			['direccion','match','pattern'=>'/^[0-9a-záéíóúñ\s]+$/i','message'=>'Solo se permiten letras'],
			['direccion','match','pattern'=>'/^.{3,30}$/','message'=>'Minimo de caracteres 3 y maximo 30'],
			
			['actividad','match','pattern'=>'/^[a-záéíóúñ\s]+$/i','message'=>'Solo se permiten letras'],
			['actividad','match','pattern'=>'/^.{3,30}$/','message'=>'Minimo de caracteres 3 y maximo 30'],

			['telefono','match','pattern'=>'/^[0-9-()\s]+$/i','message'=>'Solo se permiten numeros "(",")","-"'],
			['telefono','match','pattern'=>'/^.{6,15}$/','message'=>'Minimo de caracteres 6 y maximo 15'],

			['email','match','pattern'=>'/^[0-9a-z@_-.\s]+$/i','message'=>'Letras numeros y @ - _ '],
			['email','match','pattern'=>'/^.{3,45}$/','message'=>'Minimo de caracteres 3 y maximo 45'],

			
			['sitio_web','match','pattern'=>'/^.{3,50}$/','message'=>'Minimo de caracteres 3 y maximo 50'],


			['fecha_asociado','match','pattern'=>'/^[0-9-\s]+$/i','message'=>'Solo se permiten numero y como separador "-"'],
			['fecha_asociado','match','pattern'=>'/^.{10,10}$/','message'=>'Fecha en formato 12-25-2018'],

		];
	}

//'Revisar que estoy intentando hacer la validacion tambine en ajax y no esta andando'
}

?>