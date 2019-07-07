<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $cln_num
 * @property string $razon_social
 * @property string $nombre_corto
 * @property string $contacto
 * @property string $email
 * @property string $calle
 * @property string $numero
 * @property string $colonia
 * @property string $municipio
 * @property string $estado
 * @property string $cp
 * @property string $creado_por
 * @property string $fecha_creacion
 * @property string $modificado_por
 * @property string $fecha_modificacion
 * @property string $eliminado_por
 * @property string $fecha_eliminacion
 * @property string $rfc
 * @property int $consecutivo
 *
 * @property PreciosUnitarios[] $preciosUnitarios
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['razon_social', 'nombre_corto', 'contacto', 'calle', 'numero', 'colonia', 'municipio', 'estado', 'cp', 'creado_por', 'fecha_creacion'], 'required'],
            [['fecha_creacion', 'fecha_modificacion', 'fecha_eliminacion'], 'safe'],
            [['consecutivo'], 'integer'],
            [['razon_social'], 'string', 'max' => 200],
            [['nombre_corto', 'numero'], 'string', 'max' => 30],
            [['contacto'], 'string', 'max' => 100],
            [['email', 'creado_por', 'modificado_por', 'eliminado_por'], 'string', 'max' => 256],
            [['calle', 'colonia', 'municipio', 'estado'], 'string', 'max' => 50],
            [['cp'], 'string', 'max' => 6],
            [['rfc'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cln_num' => 'Cln Num',
            'razon_social' => 'Razon Social',
            'nombre_corto' => 'Nombre Corto',
            'contacto' => 'Contacto',
            'email' => 'Email',
            'calle' => 'Calle',
            'numero' => 'Numero',
            'colonia' => 'Colonia',
            'municipio' => 'Municipio',
            'estado' => 'Estado',
            'cp' => 'C.P.',
            'creado_por' => 'Creado Por',
            'fecha_creacion' => 'Fecha Creacion',
            'modificado_por' => 'Modificado Por',
            'fecha_modificacion' => 'Fecha Modificacion',
            'eliminado_por' => 'Eliminado Por',
            'fecha_eliminacion' => 'Fecha Eliminacion',
            'rfc' => 'R. F. C.',
            'consecutivo' => 'Consecutivo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreciosUnitarios()
    {
        return $this->hasMany(PreciosUnitarios::className(), ['cln_num' => 'cln_num']);
    }
}
