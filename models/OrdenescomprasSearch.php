<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ordenescompras;

/**
 * OrdenescomprasSearch represents the model behind the search form of `app\models\Ordenescompras`.
 */
class OrdenescomprasSearch extends Ordenescompras
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orc_num', 'cot_num'], 'integer'],
            [['numero', 'concepto_servicio', 'contacto', 'fecha_orden_compra', 'creado_por', 'fecha_creacion', 'modificado_por', 'fecha_modificacion', 'eliminado_por', 'fecha_eliminacion'], 'safe'],
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
        $query = Ordenescompras::find();

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
            'orc_num' => $this->orc_num,
            'fecha_orden_compra' => $this->fecha_orden_compra,
            'cot_num' => $this->cot_num,
            'fecha_creacion' => $this->fecha_creacion,
            'fecha_modificacion' => $this->fecha_modificacion,
            'fecha_eliminacion' => $this->fecha_eliminacion,
        ]);

        $query->andFilterWhere(['like', 'numero', $this->numero])
            ->andFilterWhere(['like', 'concepto_servicio', $this->concepto_servicio])
            ->andFilterWhere(['like', 'contacto', $this->contacto])
            ->andFilterWhere(['like', 'creado_por', $this->creado_por])
            ->andFilterWhere(['like', 'modificado_por', $this->modificado_por])
            ->andFilterWhere(['like', 'eliminado_por', $this->eliminado_por]);

        return $dataProvider;
    }
}
