<?php

namespace app\models\comercial;

use Yii;

/**
 * This is the model class for table "proveedores".
 *
 * @property int $idProveedor
 * @property string $razonSocial
 * @property string $cuit
 * @property string $domicilio
 * @property string $telefono
 * @property string $contacto
 * @property string $email
 *
 * @property Facturacompra[] $facturacompras
 */
class Proveedores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proveedores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idProveedor'], 'required'],
            [['idProveedor'], 'integer'],
            [['razonSocial', 'domicilio', 'telefono', 'contacto', 'email'], 'string', 'max' => 255],
            [['cuit'], 'string', 'max' => 13],
            [['idProveedor'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idProveedor' => 'Id Proveedor',
            'razonSocial' => 'Razon Social',
            'cuit' => 'Cuit',
            'domicilio' => 'Domicilio',
            'telefono' => 'Telefono',
            'contacto' => 'Contacto',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacturacompras()
    {
        return $this->hasMany(Facturacompra::className(), ['idProveedor' => 'idProveedor']);
    }
}
