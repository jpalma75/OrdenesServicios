<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sucursales".
 *
 * @property int $suc_num
 * @property string $nombre
 * @property string $clave
 * @property string $telefono
 * @property string $rfc
 * @property string $cp
 * @property string $direccion
 * @property string $creado_por
 * @property string $fecha_creacion
 * @property string $modificado_por
 * @property string $fecha_modificacion
 * @property string $eliminado_por
 * @property string $fecha_eliminacion
 * @property string $razon_social
 * @property string $email
 *
 * @property PreciosUnitarios[] $preciosUnitarios
 */
class Sucursales extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sucursales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'clave', 'telefono', 'rfc', 'cp', 'direccion', 'creado_por', 'fecha_creacion'], 'required'],
            [['fecha_creacion', 'fecha_modificacion', 'fecha_eliminacion'], 'safe'],
            [['nombre'], 'string', 'max' => 50],
            [['clave'], 'string', 'max' => 20],
            [['telefono', 'rfc'], 'string', 'max' => 15],
            [['cp'], 'string', 'max' => 6],
            [['direccion'], 'string', 'max' => 300],
            [['creado_por', 'modificado_por', 'eliminado_por', 'email'], 'string', 'max' => 256],
            [['razon_social'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'suc_num' => 'Suc Num',
            'nombre' => 'Nombre',
            'clave' => 'Clave',
            'telefono' => 'Telefono',
            'rfc' => 'R. F. C.',
            'cp' => 'C. P.',
            'direccion' => 'Dirección',
            'creado_por' => 'Creado Por',
            'fecha_creacion' => 'Fecha Creacion',
            'modificado_por' => 'Modificado Por',
            'fecha_modificacion' => 'Fecha Modificacion',
            'eliminado_por' => 'Eliminado Por',
            'fecha_eliminacion' => 'Fecha Eliminacion',
            'razon_social' => 'Razon Social',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreciosUnitarios()
    {
        return $this->hasMany(PreciosUnitarios::className(), ['suc_num' => 'suc_num']);
    }
}
