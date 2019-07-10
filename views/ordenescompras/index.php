<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdenescomprasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ordenescompras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordenescompras-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ordenescompras', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'orc_num',
            'numero',
            'concepto_servicio',
            'contacto',
            'fecha_orden_compra',
            //'cot_num',
            //'creado_por',
            //'fecha_creacion',
            //'modificado_por',
            //'fecha_modificacion',
            //'eliminado_por',
            //'fecha_eliminacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
