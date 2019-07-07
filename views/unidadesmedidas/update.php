<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Unidadesmedidas */

$this->title = 'Edición de Unidad de Medidas: ' . $model->clave;
$this->params['breadcrumbs'][] = ['label' => 'Unidadesmedidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->clave, 'url' => ['view', 'id' => $model->clave]];
$this->params['breadcrumbs'][] = 'Edicion';
?>
<div class="unidadesmedidas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
