<?php

namespace app\models\comercial;

use Yii;

/**
 * This is the model class for table "facturacompra".
 *
 * @property int $id
 * @property int $nroFactCom
 * @property int $idProveedor
 * @property string $fecha
 * @property bool $recibido
 * @property int $idDetCom
 *
 * @property Detallecompra[] $detallecompras
 * @property Proveedores $proveedor
 */
class FacturaCompra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'facturacompra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nroFactCom', 'idProveedor', 'idDetCom'], 'integer'],
            [['fecha'], 'safe'],
            [['recibido'], 'boolean'],
            [['idProveedor'], 'exist', 'skipOnError' => true, 'targetClass' => Proveedores::className(), 'targetAttribute' => ['idProveedor' => 'idProveedor']],
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
            'idProveedor' => 'Id Proveedor',
            'fecha' => 'Fecha',
            'recibido' => 'Recibido',
            'idDetCom' => 'Id Det Com',
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
    public function getProveedor()
    {
        return $this->hasOne(Proveedores::className(), ['idProveedor' => 'idProveedor']);
    }
}
