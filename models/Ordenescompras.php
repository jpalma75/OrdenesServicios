<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ordenes_compras".
 *
 * @property int $orc_num
 * @property string $numero
 * @property string $concepto_servicio
 * @property string $contacto
 * @property string $fecha_orden_compra
 * @property int $cot_num
 * @property string $creado_por
 * @property string $fecha_creacion
 * @property string $modificado_por
 * @property string $fecha_modificacion
 * @property string $eliminado_por
 * @property string $fecha_eliminacion
 *
 * @property Cotizaciones $cotNum
 * @property OrdenesServiciosInternas[] $ordenesServiciosInternas
 */
class Ordenescompras extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ordenes_compras';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numero', 'concepto_servicio', 'contacto', 'fecha_orden_compra', 'cot_num', 'creado_por', 'fecha_creacion'], 'required'],
            [['fecha_orden_compra', 'fecha_creacion', 'fecha_modificacion', 'fecha_eliminacion'], 'safe'],
            [['cot_num'], 'integer'],
            [['numero'], 'string', 'max' => 30],
            [['concepto_servicio'], 'string', 'max' => 500],
            [['contacto'], 'string', 'max' => 100],
            [['creado_por', 'modificado_por', 'eliminado_por'], 'string', 'max' => 256],
            [['cot_num'], 'exist', 'skipOnError' => true, 'targetClass' => Cotizaciones::className(), 'targetAttribute' => ['cot_num' => 'cot_num']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'orc_num' => 'Orc Num',
            'numero' => 'Numero',
            'concepto_servicio' => 'Concepto Servicio',
            'contacto' => 'Contacto',
            'fecha_orden_compra' => 'Fecha Orden Compra',
            'cot_num' => 'Cot Num',
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
    public function getCotNum()
    {
        return $this->hasOne(Cotizaciones::className(), ['cot_num' => 'cot_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdenesServiciosInternas()
    {
        return $this->hasMany(OrdenesServiciosInternas::className(), ['orc_num' => 'orc_num']);
    }
}
