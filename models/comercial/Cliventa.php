<?php

namespace app\models\comercial;

use Yii;

/**
 * This is the model class for table "cliventa".
 *
 * @property int $idCliente
 * @property string $cuit
 * @property string $dni
 * @property string $rs
 * @property string $nombre
 * @property string $apellido
 * @property string $domcilio
 * @property string $domiclioLegal
 * @property string $telefono
 * @property string $email
 * @property int $idTipoIva
 *
 * @property Facturaventa $cliente
 * @property Condicioniva $tipoIva
 */
class Cliventa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliventa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idCliente'], 'required'],
            [['idCliente', 'idTipoIva'], 'integer'],
            [['cuit', 'dni'], 'string', 'max' => 13],
            [['rs', 'nombre', 'apellido', 'domcilio', 'domiclioLegal', 'email'], 'string', 'max' => 255],
            [['telefono'], 'string', 'max' => 100],
            [['idCliente'], 'unique'],
            [['idCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Facturaventa::className(), 'targetAttribute' => ['idCliente' => 'idCliente']],
            [['idTipoIva'], 'exist', 'skipOnError' => true, 'targetClass' => Condicioniva::className(), 'targetAttribute' => ['idTipoIva' => 'idTipoIva']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idCliente' => 'Id Cliente',
            'cuit' => 'Cuit',
            'dni' => 'Dni',
            'rs' => 'Rs',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'domcilio' => 'Domcilio',
            'domiclioLegal' => 'Domiclio Legal',
            'telefono' => 'Telefono',
            'email' => 'Email',
            'idTipoIva' => 'Id Tipo Iva',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Facturaventa::className(), ['idCliente' => 'idCliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoIva()
    {
        return $this->hasOne(Condicioniva::className(), ['idTipoIva' => 'idTipoIva']);
    }
}
