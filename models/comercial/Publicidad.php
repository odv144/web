<?php

namespace app\models\comercial;

use Yii;

/**
 * This is the model class for table "publicidad".
 *
 * @property int $id
 * @property string $empresa
 * @property string $imagen
 * @property int $medida
 */
class Publicidad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'publicidad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['empresa', 'imagen', 'medida'], 'required'],
            [['imagen'], 'string'],
            [['medida'], 'integer'],
            [['empresa'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'empresa' => 'Empresa',
            'imagen' => 'Imagen',
            'medida' => 'Medida',
        ];
    }
}
