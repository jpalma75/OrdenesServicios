<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cotizaciones;

/**
 * CotizacionesSearch represents the model behind the search form of `app\models\Cotizaciones`.
 */
class CotizacionesSearch extends Cotizaciones
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cot_num', 'pu_num', 'consecutivo'], 'integer'],
            [['numero', 'concepto_servicio', 'contacto', 'fecha_cotizacion', 'creado_por', 'fecha_creacion', 'modificado_por', 'fecha_modificacion', 'eliminado_por', 'fecha_eliminacion', 'lugar_expedicion', 'vendedor', 'enviar_a'], 'safe'],
            [['subtotal', 'descuento', 'descuento_final', 'ieps', 'iva', 'total', 'importe'], 'number'],
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
        $query = Cotizaciones::find();

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
            'cot_num' => $this->cot_num,
            'fecha_cotizacion' => $this->fecha_cotizacion,
            'fecha_creacion' => $this->fecha_creacion,
            'fecha_modificacion' => $this->fecha_modificacion,
            'fecha_eliminacion' => $this->fecha_eliminacion,
            'subtotal' => $this->subtotal,
            'descuento' => $this->descuento,
            'descuento_final' => $this->descuento_final,
            'ieps' => $this->ieps,
            'iva' => $this->iva,
            'total' => $this->total,
            'importe' => $this->importe,
            'pu_num' => $this->pu_num,
            'consecutivo' => $this->consecutivo,
        ]);

        $query->andFilterWhere(['like', 'numero', $this->numero])
            ->andFilterWhere(['like', 'concepto_servicio', $this->concepto_servicio])
            ->andFilterWhere(['like', 'contacto', $this->contacto])
            ->andFilterWhere(['like', 'creado_por', $this->creado_por])
            ->andFilterWhere(['like', 'modificado_por', $this->modificado_por])
            ->andFilterWhere(['like', 'eliminado_por', $this->eliminado_por])
            ->andFilterWhere(['like', 'lugar_expedicion', $this->lugar_expedicion])
            ->andFilterWhere(['like', 'vendedor', $this->vendedor])
            ->andFilterWhere(['like', 'enviar_a', $this->enviar_a]);

        return $dataProvider;
    }
}
