<?php

namespace app\models\comercial;

use Yii;

/**
 * This is the model class for table "detallecompra".
 *
 * @property int $idDetFac
 * @property int $nroFactCom
 * @property int $idProducto
 * @property string $costo
 * @property string $iva
 * @property int $cantidad
 * @property int $lote
 *
 * @property Productos $nroFactCom0
 * @property Facturacompra $nroFactCom1
 */
class DetalleCompra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detallecompra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idDetFac', 'idProducto', 'costo', 'iva', 'cantidad', 'lote'], 'required'],
            [['idDetFac', 'nroFactCom', 'idProducto', 'cantidad', 'lote'], 'integer'],
            [['costo', 'iva'], 'number'],
            [['idDetFac'], 'unique'],
            [['nroFactCom'], 'exist', 'skipOnError' => true, 'targetClass' => Productos::className(), 'targetAttribute' => ['nroFactCom' => 'nroFactCom']],
            [['nroFactCom'], 'exist', 'skipOnError' => true, 'targetClass' => Facturacompra::className(), 'targetAttribute' => ['nroFactCom' => 'nroFactCom']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idDetFac' => 'Id Det Fac',
            'nroFactCom' => 'Nro Fact Com',
            'idProducto' => 'Id Producto',
            'costo' => 'Costo',
            'iva' => 'Iva',
            'cantidad' => 'Cantidad',
            'lote' => 'Lote',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNroFactCom0()
    {
        return $this->hasOne(Productos::className(), ['nroFactCom' => 'nroFactCom']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNroFactCom1()
    {
        return $this->hasOne(Facturacompra::className(), ['nroFactCom' => 'nroFactCom']);
    }
}
