<?php

namespace app\models\comercial;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\comercial\cliventa;

/**
 * ClienteSearch represents the model behind the search form of `app\models\comercial\cliventa`.
 */
class ClienteSearch extends cliventa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idCliente', 'idTipoIva'], 'integer'],
            [['cuit', 'dni', 'rs', 'nombre', 'apellido', 'domcilio', 'domiclioLegal', 'telefono', 'email'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = cliventa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idCliente' => $this->idCliente,
            'idTipoIva' => $this->idTipoIva,
        ]);

        $query->andFilterWhere(['like', 'cuit', $this->cuit])
            ->andFilterWhere(['like', 'dni', $this->dni])
            ->andFilterWhere(['like', 'rs', $this->rs])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellido', $this->apellido])
            ->andFilterWhere(['like', 'domcilio', $this->domcilio])
            ->andFilterWhere(['like', 'domiclioLegal', $this->domiclioLegal])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
