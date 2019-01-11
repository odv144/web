<?php

namespace app\models\comercial;

use Yii;

/**
 * This is the model class for table "condicioniva".
 *
 * @property int $idTipoIva
 * @property string $detalle
 *
 * @property Cliventa[] $cliventas
 */
class CondicionIva extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'condicioniva';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idTipoIva'], 'required'],
            [['idTipoIva'], 'integer'],
            [['detalle'], 'string', 'max' => 80],
            [['idTipoIva'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idTipoIva' => 'Id Tipo Iva',
            'detalle' => 'Detalle',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliventas()
    {
        return $this->hasMany(Cliventa::className(), ['idTipoIva' => 'idTipoIva']);
    }
}
