<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cotizaciones".
 *
 * @property int $cot_num
 * @property string $numero
 * @property string $concepto_servicio
 * @property string $contacto
 * @property string $fecha_cotizacion
 * @property string $creado_por
 * @property string $fecha_creacion
 * @property string $modificado_por
 * @property string $fecha_modificacion
 * @property string $eliminado_por
 * @property string $fecha_eliminacion
 * @property string $lugar_expedicion
 * @property string $vendedor
 * @property string $enviar_a
 * @property string $subtotal
 * @property string $descuento
 * @property string $descuento_final
 * @property string $ieps
 * @property string $iva
 * @property string $total
 * @property string $importe
 * @property int $pu_num
 * @property int $consecutivo
 *
 * @property PreciosUnitarios $puNum
 * @property OrdenesCompras[] $ordenesCompras
 */
class Cotizaciones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cotizaciones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numero', 'concepto_servicio', 'contacto', 'fecha_cotizacion', 'creado_por', 'fecha_creacion'], 'required'],
            [['fecha_cotizacion', 'fecha_creacion', 'fecha_modificacion', 'fecha_eliminacion'], 'safe'],
            [['subtotal', 'descuento', 'descuento_final', 'ieps', 'iva', 'total', 'importe'], 'number'],
            [['pu_num', 'consecutivo'], 'integer'],
            [['numero'], 'string', 'max' => 20],
            [['concepto_servicio'], 'string', 'max' => 500],
            [['contacto', 'lugar_expedicion'], 'string', 'max' => 200],
            [['creado_por', 'modificado_por', 'eliminado_por', 'vendedor'], 'string', 'max' => 256],
            [['enviar_a'], 'string', 'max' => 100],
            [['pu_num'], 'exist', 'skipOnError' => true, 'targetClass' => PreciosUnitarios::className(), 'targetAttribute' => ['pu_num' => 'pu_num']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cot_num' => 'Cot Num',
            'numero' => 'Numero',
            'concepto_servicio' => 'Concepto Servicio',
            'contacto' => 'Contacto',
            'fecha_cotizacion' => 'Fecha Cotizacion',
            'creado_por' => 'Creado Por',
            'fecha_creacion' => 'Fecha Creacion',
            'modificado_por' => 'Modificado Por',
            'fecha_modificacion' => 'Fecha Modificacion',
            'eliminado_por' => 'Eliminado Por',
            'fecha_eliminacion' => 'Fecha Eliminacion',
            'lugar_expedicion' => 'Lugar Expedicion',
            'vendedor' => 'Vendedor',
            'enviar_a' => 'Enviar A',
            'subtotal' => 'Subtotal',
            'descuento' => 'Descuento',
            'descuento_final' => 'Descuento Final',
            'ieps' => 'Ieps',
            'iva' => 'Iva',
            'total' => 'Total',
            'importe' => 'Importe',
            'pu_num' => 'Pu Num',
            'consecutivo' => 'Consecutivo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPuNum()
    {
        return $this->hasOne(PreciosUnitarios::className(), ['pu_num' => 'pu_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdenesCompras()
    {
        return $this->hasMany(OrdenesCompras::className(), ['cot_num' => 'cot_num']);
    }
}
