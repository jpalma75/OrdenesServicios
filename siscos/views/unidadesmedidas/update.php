<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UnidadesMedidas */

$this->title = 'Update Unidades Medidas: ' . $model->unm_num;
$this->params['breadcrumbs'][] = ['label' => 'Unidades Medidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->unm_num, 'url' => ['view', 'id' => $model->unm_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unidades-medidas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
