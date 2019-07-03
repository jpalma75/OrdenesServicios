<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sucursales */

$this->title = 'Update Sucursales: ' . $model->suc_num;
$this->params['breadcrumbs'][] = ['label' => 'Sucursales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->suc_num, 'url' => ['view', 'id' => $model->suc_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sucursales-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
