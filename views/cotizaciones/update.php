<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cotizaciones */

$this->title = 'Update Cotizaciones: ' . $model->cot_num;
$this->params['breadcrumbs'][] = ['label' => 'Cotizaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cot_num, 'url' => ['view', 'id' => $model->cot_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cotizaciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
