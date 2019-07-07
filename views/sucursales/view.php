<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sucursales */

$this->title = $model->clave;
$this->params['breadcrumbs'][] = ['label' => 'Sucursales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sucursales-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->suc_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->suc_num], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Estas seguro de borrar el registro de Sucursal?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'suc_num',
            'clave',
            'nombre',
            'razon_social',            
            'telefono',
            'rfc',
            'cp',
            'direccion',            
            'email:email',
        ],
    ]) ?>

</div>
