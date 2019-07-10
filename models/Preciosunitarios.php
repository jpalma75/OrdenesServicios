<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "precios_unitarios".
 *
 * @property int $pu_num
 * @property string $folio
 * @property string $fecha_elaboracion
 * @property string $componente
 * @property string $aplicacion
 * @property string $cantidad
 * @property int $consecutivo
 * @property string $concepto_servicio
 * @property string $importe_material
 * @property string $importe_mano_obra
 * @property string $importe_herramienta
 * @property string $importe_maquinaria
 * @property int $tiempo_ejecucion
 * @property string $costo_directo
 * @property string $porcentaje_sobrecosto
 * @property string $precio_unitario
 * @property int $cln_num
 * @property int $unm_num
 * @property int $suc_num
 * @property string $creado_por
 * @property string $fecha_creacion
 * @property string $modificado_por
 * @property string $fecha_modificacion
 * @property string $eliminado_por
 * @property string $fecha_eliminacion
 *
 * @property AutorizacionPu[] $autorizacionPus
 * @property Cotizaciones[] $cotizaciones
 * @property Clientes $clnNum
 * @property Sucursales $sucNum
 * @property UnidadesMedidas $unmNum
 * @property PuHerramientas[] $puHerramientas
 * @property PuManoObra[] $puManoObras
 * @property PuMaquinarias[] $puMaquinarias
 * @property PuMateriales[] $puMateriales
 */
class Preciosunitarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'precios_unitarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio', 'fecha_elaboracion', 'cantidad', 'consecutivo', 'importe_material', 'importe_mano_obra', 'importe_herramienta', 'importe_maquinaria', 'tiempo_ejecucion', 'costo_directo', 'porcentaje_sobrecosto', 'precio_unitario', 'cln_num', 'unm_num', 'suc_num', 'creado_por', 'fecha_creacion'], 'required'],
            [['fecha_elaboracion', 'fecha_creacion', 'fecha_modificacion', 'fecha_eliminacion'], 'safe'],
            [['cantidad', 'importe_material', 'importe_mano_obra', 'importe_herramienta', 'importe_maquinaria', 'costo_directo', 'porcentaje_sobrecosto', 'precio_unitario'], 'number'],
            [['consecutivo', 'tiempo_ejecucion', 'cln_num', 'unm_num', 'suc_num'], 'integer'],
            [['folio'], 'string', 'max' => 30],
            [['componente', 'aplicacion'], 'string', 'max' => 50],
            [['concepto_servicio'], 'string', 'max' => 500],
            [['creado_por', 'modificado_por', 'eliminado_por'], 'string', 'max' => 256],
            [['cln_num'], 'exist', 'skipOnError' => true, 'targetClass' => Clientes::className(), 'targetAttribute' => ['cln_num' => 'cln_num']],
            [['suc_num'], 'exist', 'skipOnError' => true, 'targetClass' => Sucursales::className(), 'targetAttribute' => ['suc_num' => 'suc_num']],
            [['unm_num'], 'exist', 'skipOnError' => true, 'targetClass' => UnidadesMedidas::className(), 'targetAttribute' => ['unm_num' => 'unm_num']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pu_num' => 'Pu Num',
            'folio' => 'Folio',
            'fecha_elaboracion' => 'Fecha Elaboracion',
            'componente' => 'Componente',
            'aplicacion' => 'Aplicacion',
            'cantidad' => 'Cantidad',
            'consecutivo' => 'Consecutivo',
            'concepto_servicio' => 'Concepto Servicio',
            'importe_material' => 'Importe Material',
            'importe_mano_obra' => 'Importe Mano Obra',
            'importe_herramienta' => 'Importe Herramienta',
            'importe_maquinaria' => 'Importe Maquinaria',
            'tiempo_ejecucion' => 'Tiempo Ejecucion',
            'costo_directo' => 'Costo Directo',
            'porcentaje_sobrecosto' => 'Porcentaje Sobrecosto',
            'precio_unitario' => 'Precio Unitario',
            'cln_num' => 'Cln Num',
            'unm_num' => 'Unm Num',
            'suc_num' => 'Suc Num',
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
    public function getAutorizacionPus()
    {
        return $this->hasMany(AutorizacionPu::className(), ['pu_num' => 'pu_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCotizaciones()
    {
        return $this->hasMany(Cotizaciones::className(), ['pu_num' => 'pu_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClnNum()
    {
        return $this->hasOne(Clientes::className(), ['cln_num' => 'cln_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSucNum()
    {
        return $this->hasOne(Sucursales::className(), ['suc_num' => 'suc_num']);
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
    public function getPuHerramientas()
    {
        return $this->hasMany(PuHerramientas::className(), ['pu_num' => 'pu_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPuManoObras()
    {
        return $this->hasMany(PuManoObra::className(), ['pu_num' => 'pu_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPuMaquinarias()
    {
        return $this->hasMany(PuMaquinarias::className(), ['pu_num' => 'pu_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPuMateriales()
    {
        return $this->hasMany(PuMateriales::className(), ['pu_num' => 'pu_num']);
    }
}
