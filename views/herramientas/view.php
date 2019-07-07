<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Herramientas */

$this->title = $model->clave;
$this->params['breadcrumbs'][] = ['label' => 'Herramientas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="herramientas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->hrr_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->hrr_num], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estas Seguro de querer borrar el registr de la Herramienta?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'clave',
            'nombre',
            'marca',
            'modelo',
            'caracteristica',
            'unm_num',
            'precio',
        ],
    ]) ?>

</div>
