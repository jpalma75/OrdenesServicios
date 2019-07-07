<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mano_obra".
 *
 * @property int $mno_num
 * @property string $clave
 * @property string $nombre
 * @property string $descripcion
 * @property string $especialidad
 * @property string $caracteristica
 * @property string $nombre_especialista
 * @property int $unm_num
 * @property string $creado_por
 * @property string $fecha_creacion
 * @property string $modificado_por
 * @property string $fecha_modificacion
 * @property string $eliminado_por
 * @property string $fecha_eliminacion
 * @property string $precio
 *
 * @property HistManoObra[] $histManoObras
 * @property UnidadesMedidas $unmNum
 * @property PuManoObra[] $puManoObras
 */
class ManoObra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mano_obra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clave', 'unm_num', 'creado_por', 'fecha_creacion'], 'required'],
            [['unm_num'], 'integer'],
            [['fecha_creacion', 'fecha_modificacion', 'fecha_eliminacion'], 'safe'],
            [['precio'], 'number'],
            [['clave'], 'string', 'max' => 10],
            [['nombre', 'descripcion', 'especialidad', 'caracteristica'], 'string', 'max' => 50],
            [['nombre_especialista'], 'string', 'max' => 100],
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
            'mno_num' => 'Mno Num',
            'clave' => 'Clave',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'especialidad' => 'Especialidad',
            'caracteristica' => 'Caracteristica',
            'nombre_especialista' => 'Nombre Especialista',
            'unm_num' => 'Num Unm ',
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
    public function getHistManoObras()
    {
        return $this->hasMany(HistManoObra::className(), ['mno_num' => 'mno_num']);
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
    public function getPuManoObras()
    {
        return $this->hasMany(PuManoObra::className(), ['mno_num' => 'mno_num']);
    }
}
