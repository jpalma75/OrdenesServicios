<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Maquinarias */

$this->title = $model->maq_num;
$this->params['breadcrumbs'][] = ['label' => 'Maquinarias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="maquinarias-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->maq_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->maq_num], [
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
            'maq_num',
            'clave',
            'nombre',
            'marca',
            'modelo',
            'caracteristica',
            'unm_num',
            'creado_por',
            'fecha_creacion',
            'modificado_por',
            'fecha_modificacion',
            'eliminado_por',
            'fecha_eliminacion',
            'precio',
        ],
    ]) ?>

</div>
