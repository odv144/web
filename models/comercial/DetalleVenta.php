<?php

namespace app\models\comercial;

use Yii;

/**
 * This is the model class for table "detalleventa".
 *
 * @property int $idDetFac
 * @property int $nroFactCom
 * @property int $idProducto
 * @property int $cantidad
 *
 * @property Facturaventa $nroFactCom0
 * @property Productos $nroFactCom1
 */
class DetalleVenta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detalleventa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idDetFac', 'idProducto', 'cantidad'], 'required'],
            [['idDetFac', 'nroFactCom', 'idProducto', 'cantidad'], 'integer'],
            [['idDetFac'], 'unique'],
            [['nroFactCom'], 'exist', 'skipOnError' => true, 'targetClass' => Facturaventa::className(), 'targetAttribute' => ['nroFactCom' => 'nroFactCom']],
            [['nroFactCom'], 'exist', 'skipOnError' => true, 'targetClass' => Productos::className(), 'targetAttribute' => ['nroFactCom' => 'nroFactCom']],
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
            'cantidad' => 'Cantidad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNroFactCom0()
    {
        return $this->hasOne(Facturaventa::className(), ['nroFactCom' => 'nroFactCom']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNroFactCom1()
    {
        return $this->hasOne(Productos::className(), ['nroFactCom' => 'nroFactCom']);
    }
}
