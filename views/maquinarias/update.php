<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Maquinarias */

$this->title = 'Edición de Maquinarias: ' . $model->clave;
$this->params['breadcrumbs'][] = ['label' => 'Maquinarias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->maq_num, 'url' => ['view', 'id' => $model->maq_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maquinarias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
