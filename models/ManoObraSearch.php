<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Manoobra;

/**
 * ManoobraSearch represents the model behind the search form of `app\models\Manoobra`.
 */
class ManoobraSearch extends Manoobra
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mno_num', 'unm_num'], 'integer'],
            [['clave', 'nombre', 'descripcion', 'especialidad', 'caracteristica', 'nombre_especialista', 'creado_por', 'fecha_creacion', 'modificado_por', 'fecha_modificacion', 'eliminado_por', 'fecha_eliminacion'], 'safe'],
            [['precio'], 'number'],
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
        $query = Manoobra::find();

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
            'mno_num' => $this->mno_num,
            'unm_num' => $this->unm_num,
            'fecha_creacion' => $this->fecha_creacion,
            'fecha_modificacion' => $this->fecha_modificacion,
            'fecha_eliminacion' => $this->fecha_eliminacion,
            'precio' => $this->precio,
        ]);

        $query->andFilterWhere(['like', 'clave', $this->clave])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'especialidad', $this->especialidad])
            ->andFilterWhere(['like', 'caracteristica', $this->caracteristica])
            ->andFilterWhere(['like', 'nombre_especialista', $this->nombre_especialista])
            ->andFilterWhere(['like', 'creado_por', $this->creado_por])
            ->andFilterWhere(['like', 'modificado_por', $this->modificado_por])
            ->andFilterWhere(['like', 'eliminado_por', $this->eliminado_por]);

        return $dataProvider;
    }
}
