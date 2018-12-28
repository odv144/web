<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asociados".
 *
 * @property string $id
 * @property string $dni
 * @property string $razon_social
 * @property string $responsable
 * @property string $direccion
 * @property string $actividad
 * @property string $telefono
 * @property string $email
 * @property string $sitio_web
 * @property string $logo
 * @property string $fecha_asociado
 */
class Asociados extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asociados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dni', 'razon_social', 'responsable', 'direccion', 'actividad', 'telefono', 'email', 'sitio_web', 'logo'], 'required'],
           
            ['dni','match','pattern'=>'/^[0-9\s]+$/i','message'=>'Solo se permiten numeros'],
            ['dni','string', 'max'=>8],
            [['razon_social', 'responsable', 'direccion', 'actividad'], 'string', 'max' => 30],
            [['razon_social','direccion'],'match','pattern'=>'/^[0-9a-záéíóúñ\s]+$/i','message'=>'Solo se permiten letras'],
            //[['responsable','actividad'],'match','pattern'=>'/^[a-záéíóúñ\s]+$/i','message'=>'Solo se permiten letras'],
            [['telefono'], 'string', 'max' => 15],
            ['telefono','match','pattern'=>'/^[0-9\-\(\)\s]+$/i','message'=>'Solo se permiten numeros "(",")","-"'],
            [['email'], 'string', 'max' => 45],
            ['email','match','pattern'=>'/^[\-\.0-9\_a-z\@\s]+$/i','message'=>'Letras numeros y @ - _ '],
            ['sitio_web','match','pattern'=>'/^[0-9a-z\_\-\.\s]+$/i','message'=>'Solo se permiten letras'],
            [['sitio_web'], 'string', 'max' => 50],
            [['logo'], 'string', 'max' => 100],
            ['fecha_asociado','match','pattern'=>'/^[0-9\-\s]+$/i','message'=>'Solo se permiten numero y como separador "-"'],
            [['fecha_asociado'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dni' => 'Dni',
            'razon_social' => 'Razon Social',
            'responsable' => 'Responsable',
            'direccion' => 'Direccion',
            'actividad' => 'Actividad',
            'telefono' => 'Telefono',
            'email' => 'Email',
            'sitio_web' => 'Sitio Web',
            'logo' => 'Logo de la Empresa',
            'fecha_asociado' => 'Fecha Asociado',
        ];
    }
    public function validacion()
    {
        $cadena= explode('-',$this->fecha_asociado);
        if($cadena[0]<31&&$cadena[1]<12&&($cadena[2]>1950&&$cadena[2]<2019))
           return true;
        else
            return false;
    }
}
