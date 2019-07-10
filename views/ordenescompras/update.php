<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ordenescompras */

$this->title = 'Update Ordenescompras: ' . $model->orc_num;
$this->params['breadcrumbs'][] = ['label' => 'Ordenescompras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->orc_num, 'url' => ['view', 'id' => $model->orc_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ordenescompras-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
