<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Manoobra */

$this->title = 'Modificación de Mano de Obra: ' . $model->clave;
$this->params['breadcrumbs'][] = ['label' => 'Mano de Obras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->clave, 'url' => ['view', 'id' => $model->clave]];
$this->params['breadcrumbs'][] = 'Modificación';
?>
<div class="manoobra-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
