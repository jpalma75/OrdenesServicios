<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ManoObra */

$this->title = $model->clave;
$this->params['breadcrumbs'][] = ['label' => 'Mano Obras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mano-obra-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mno_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mno_num], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estas Seguro de querer borrar el registro de la Mano de Obra?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'mno_num',
            'clave',
            'nombre',
            'descripcion',
            'especialidad',
            'caracteristica',
            'nombre_especialista',
            'unm_num',
            'precio',
            //'creado_por',
            //'fecha_creacion',
            //'modificado_por',
            //'fecha_modificacion',
            //'eliminado_por',
            //'fecha_eliminacion',            
        ],
    ]) ?>

</div>
