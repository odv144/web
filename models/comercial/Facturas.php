<?php

namespace app\models\comercial;

use Yii;

/**
 * This is the model class for table "facturas".
 *
 * @property int $id_factura
 * @property int $numero_factura
 * @property string $fecha_factura
 * @property int $id_cliente
 * @property string $vendedor
 * @property string $condicionPago
 * @property string $condicionIva
 * @property string $total_venta
 * @property int $estado_factura
 */
class Facturas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'facturas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numero_factura', 'fecha_factura', 'id_cliente', 'vendedor', 'condicionPago', 'condicionIva', 'total_venta', 'estado_factura'], 'required'],
            [['numero_factura', 'id_cliente', 'estado_factura'], 'integer'],
            [['fecha_factura', 'condicionPago'], 'string', 'max' => 30],
            [['vendedor', 'condicionIva'], 'string', 'max' => 255],
            [['total_venta'], 'string', 'max' => 20],
            [['numero_factura'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_factura' => 'Id Factura',
            'numero_factura' => 'Numero Factura',
            'fecha_factura' => 'Fecha Factura',
            'id_cliente' => 'Id Cliente',
            'vendedor' => 'Vendedor',
            'condicionPago' => 'Condicion Pago',
            'condicionIva' => 'Condicion Iva',
            'total_venta' => 'Total Venta',
            'estado_factura' => 'Estado Factura',
        ];
    }
}
