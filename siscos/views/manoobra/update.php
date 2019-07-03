<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ManoObra */

$this->title = 'Update Mano Obra: ' . $model->mno_num;
$this->params['breadcrumbs'][] = ['label' => 'Mano Obras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mno_num, 'url' => ['view', 'id' => $model->mno_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mano-obra-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
