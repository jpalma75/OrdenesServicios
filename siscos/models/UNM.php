<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidades_medidas".
 *
 * @property int $unm_num
 * @property string $clave
 * @property string $nombre
 * @property string $creado_por
 * @property string $fecha_creacion
 * @property string $modificado_por
 * @property string $fecha_modificacion
 * @property string $eliminado_por
 * @property string $fecha_eliminacion
 *
 * @property Herramientas[] $herramientas
 * @property ManoObra[] $manoObras
 * @property Maquinarias[] $maquinarias
 * @property Materiales[] $materiales
 * @property PreciosUnitarios[] $preciosUnitarios
 */
class UNM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unidades_medidas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clave', 'nombre', 'creado_por', 'fecha_creacion'], 'required'],
            [['fecha_creacion', 'fecha_modificacion', 'fecha_eliminacion'], 'safe'],
            [['clave'], 'string', 'max' => 10],
            [['nombre'], 'string', 'max' => 50],
            [['creado_por', 'modificado_por', 'eliminado_por'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'unm_num' => 'Unm Num',
            'clave' => 'Clave',
            'nombre' => 'Nombre',
            'creado_por' => 'Creado Por',
            'fecha_creacion' => 'Fecha Creacion',
            'modificado_por' => 'Modificado Por',
            'fecha_modificacion' => 'Fecha Modificacion',
            'eliminado_por' => 'Eliminado Por',
            'fecha_eliminacion' => 'Fecha Eliminacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHerramientas()
    {
        return $this->hasMany(Herramientas::className(), ['unm_num' => 'unm_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManoObras()
    {
        return $this->hasMany(ManoObra::className(), ['unm_num' => 'unm_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaquinarias()
    {
        return $this->hasMany(Maquinarias::className(), ['unm_num' => 'unm_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMateriales()
    {
        return $this->hasMany(Materiales::className(), ['unm_num' => 'unm_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreciosUnitarios()
    {
        return $this->hasMany(PreciosUnitarios::className(), ['unm_num' => 'unm_num']);
    }
}
