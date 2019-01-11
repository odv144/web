<?php

namespace app\models\comercial;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property int $idEmpresa
 * @property string $razonSocial
 * @property string $cuit
 * @property string $domicilio
 * @property string $inicioActi
 * @property string $cetegoriaIva
 *
 * @property Facturaventa $empresa
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idEmpresa'], 'required'],
            [['idEmpresa'], 'integer'],
            [['inicioActi'], 'safe'],
            [['razonSocial', 'domicilio', 'cetegoriaIva'], 'string', 'max' => 255],
            [['cuit'], 'string', 'max' => 13],
            [['idEmpresa'], 'unique'],
            [['idEmpresa'], 'exist', 'skipOnError' => true, 'targetClass' => Facturaventa::className(), 'targetAttribute' => ['idEmpresa' => 'idEmpresa']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idEmpresa' => 'Id Empresa',
            'razonSocial' => 'Razon Social',
            'cuit' => 'Cuit',
            'domicilio' => 'Domicilio',
            'inicioActi' => 'Inicio Acti',
            'cetegoriaIva' => 'Cetegoria Iva',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresa()
    {
        return $this->hasOne(Facturaventa::className(), ['idEmpresa' => 'idEmpresa']);
    }
}
