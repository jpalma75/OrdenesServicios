<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maquinarias".
 *
 * @property int $maq_num
 * @property string $clave
 * @property string $nombre
 * @property string $marca
 * @property string $modelo
 * @property string $caracteristica
 * @property int $unm_num
 * @property string $creado_por
 * @property string $fecha_creacion
 * @property string $modificado_por
 * @property string $fecha_modificacion
 * @property string $eliminado_por
 * @property string $fecha_eliminacion
 * @property string $precio
 *
 * @property HistMaquinarias[] $histMaquinarias
 * @property UnidadesMedidas $unmNum
 * @property PuMaquinarias[] $puMaquinarias
 */
class Maquinarias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maquinarias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clave', 'unm_num', 'fecha_creacion'], 'required'],
            [['unm_num'], 'integer'],
            [['fecha_creacion', 'fecha_modificacion', 'fecha_eliminacion'], 'safe'],
            [['precio'], 'number'],
            [['clave'], 'string', 'max' => 10],
            [['nombre'], 'string', 'max' => 50],
            [['marca', 'modelo'], 'string', 'max' => 30],
            [['caracteristica'], 'string', 'max' => 100],
            [['creado_por', 'modificado_por', 'eliminado_por'], 'string', 'max' => 256],
            [['unm_num'], 'exist', 'skipOnError' => true, 'targetClass' => UnidadesMedidas::className(), 'targetAttribute' => ['unm_num' => 'unm_num']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'maq_num' => 'Maq Num',
            'clave' => 'Clave',
            'nombre' => 'Nombre',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'caracteristica' => 'Caracteristica',
            'unm_num' => 'Num Unm ',,
            'creado_por' => 'Creado Por',
            'fecha_creacion' => 'Fecha Creacion',
            'modificado_por' => 'Modificado Por',
            'fecha_modificacion' => 'Fecha Modificacion',
            'eliminado_por' => 'Eliminado Por',
            'fecha_eliminacion' => 'Fecha Eliminacion',
            'precio' => 'Precio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistMaquinarias()
    {
        return $this->hasMany(HistMaquinarias::className(), ['maq_num' => 'maq_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnmNum()
    {
        return $this->hasOne(UnidadesMedidas::className(), ['unm_num' => 'unm_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPuMaquinarias()
    {
        return $this->hasMany(PuMaquinarias::className(), ['maq_num' => 'maq_num']);
    }
}
