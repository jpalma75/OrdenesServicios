<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Materiales */

$this->title = $model->clave;
$this->params['breadcrumbs'][] = ['label' => 'Materiales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="materiales-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->mat_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->mat_num], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estas Seguro de querer borrar el Material?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'mat_num',
            'clave',
            'nombre',
            'marca',
            'modelo',
            'caracteristica',
            'proveedor',
            'unm_num',
            'precio',
        ],
    ]) ?>

</div>
