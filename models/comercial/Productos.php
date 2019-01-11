<?php

namespace app\models\comercial;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property int $idProducto
 * @property string $codProducto
 * @property int $nroFactCom
 * @property string $detalle
 * @property string $p_u
 * @property string $iva
 * @property int $cantidad
 * @property int $lote
 * @property string $fechaCompra
 * @property int $estado
 *
 * @property Detallecompra[] $detallecompras
 * @property Detalleventa[] $detalleventas
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nroFactCom', 'cantidad', 'lote', 'estado'], 'integer'],
            [['detalle', 'p_u', 'iva', 'cantidad', 'lote', 'estado'], 'required'],
            [['p_u', 'iva'], 'number'],
            [['codProducto', 'fechaCompra'], 'string', 'max' => 100],
            [['detalle'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idProducto' => 'Id Producto',
            'codProducto' => 'Cod Producto',
            'nroFactCom' => 'Nro Fact Com',
            'detalle' => 'Detalle',
            'p_u' => 'P U',
            'iva' => 'Iva',
            'cantidad' => 'Cantidad',
            'lote' => 'Lote',
            'fechaCompra' => 'Fecha Compra',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetallecompras()
    {
        return $this->hasMany(Detallecompra::className(), ['nroFactCom' => 'nroFactCom']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleventas()
    {
        return $this->hasMany(Detalleventa::className(), ['nroFactCom' => 'nroFactCom']);
    }
}
