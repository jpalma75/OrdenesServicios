<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clientes */

$this->title = $model->cln_num;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="clientes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cln_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cln_num], [
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
            'cln_num',
            'razon_social',
            'nombre_corto',
            'contacto',
            'email:email',
            'calle',
            'numero',
            'colonia',
            'municipio',
            'estado',
            'cp',
            'creado_por',
            'fecha_creacion',
            'modificado_por',
            'fecha_modificacion',
            'eliminado_por',
            'fecha_eliminacion',
            'rfc',
            'consecutivo',
        ],
    ]) ?>

</div>
