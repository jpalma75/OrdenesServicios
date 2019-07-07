<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MaterialesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materiales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materiales-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Agregar Material', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'mat_num',
            'clave',
            'nombre',
            'marca',
            'modelo',
            'unm_num',
            //'precio',
            //'caracteristica',
            //'proveedor',            
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
