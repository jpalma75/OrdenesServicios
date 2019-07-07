<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clientes */

$this->title = $model->razon_social;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="clientes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->cln_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->cln_num], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estas seguro de borrar el registro del Cliente?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
            'rfc',
        ],
    ]) ?>

</div>
