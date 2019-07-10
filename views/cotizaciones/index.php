<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CotizacionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cotizaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cotizaciones-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cotizaciones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cot_num',
            'numero',
            'concepto_servicio',
            'contacto',
            'fecha_cotizacion',
            //'creado_por',
            //'fecha_creacion',
            //'modificado_por',
            //'fecha_modificacion',
            //'eliminado_por',
            //'fecha_eliminacion',
            //'lugar_expedicion',
            //'vendedor',
            //'enviar_a',
            //'subtotal',
            //'descuento',
            //'descuento_final',
            //'ieps',
            //'iva',
            //'total',
            //'importe',
            //'pu_num',
            //'consecutivo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
