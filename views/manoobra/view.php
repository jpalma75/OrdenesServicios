<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Manoobra */

$this->title = $model->clave;
$this->params['breadcrumbs'][] = ['label' => 'Mano de Obras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="manoobra-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->mno_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->mno_num], [
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
            //'creado_por',
            //'fecha_creacion',
            //'modificado_por',
            //'fecha_modificacion',
            //'eliminado_por',
            //'fecha_eliminacion',
            //'precio',
        ],
    ]) ?>

</div>
