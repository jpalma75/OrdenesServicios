<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Herramientas */

$this->title = 'Update Herramientas: ' . $model->hrr_num;
$this->params['breadcrumbs'][] = ['label' => 'Herramientas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hrr_num, 'url' => ['view', 'id' => $model->hrr_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="herramientas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
