<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cotizaciones */

$this->title = $model->cot_num;
$this->params['breadcrumbs'][] = ['label' => 'Cotizaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cotizaciones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cot_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cot_num], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cot_num',
            'numero',
            'concepto_servicio',
            'contacto',
            'fecha_cotizacion',
            'creado_por',
            'fecha_creacion',
            'modificado_por',
            'fecha_modificacion',
            'eliminado_por',
            'fecha_eliminacion',
            'lugar_expedicion',
            'vendedor',
            'enviar_a',
            'subtotal',
            'descuento',
            'descuento_final',
            'ieps',
            'iva',
            'total',
            'importe',
            'pu_num',
            'consecutivo',
        ],
    ]) ?>

</div>
