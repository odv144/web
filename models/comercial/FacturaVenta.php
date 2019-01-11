<?php

namespace app\models\comercial;

use Yii;

/**
 * This is the model class for table "facturaventa".
 *
 * @property int $id
 * @property int $nroFactCom
 * @property int $idCliente
 * @property string $fecha
 * @property int $idTipoPago
 * @property int $idEmpresa
 *
 * @property Cliventa $cliventa
 * @property Detalleventa[] $detalleventas
 * @property Empresa $empresa
 */
class FacturaVenta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'facturaventa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nroFactCom', 'idCliente', 'idTipoPago', 'idEmpresa'], 'integer'],
            [['idCliente'], 'required'],
            [['fecha'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nroFactCom' => 'Nro Fact Com',
            'idCliente' => 'Id Cliente',
            'fecha' => 'Fecha',
            'idTipoPago' => 'Id Tipo Pago',
            'idEmpresa' => 'Id Empresa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliventa()
    {
        return $this->hasOne(Cliventa::className(), ['idCliente' => 'idCliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleventas()
    {
        return $this->hasMany(Detalleventa::className(), ['nroFactCom' => 'nroFactCom']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresa()
    {
        return $this->hasOne(Empresa::className(), ['idEmpresa' => 'idEmpresa']);
    }
}
