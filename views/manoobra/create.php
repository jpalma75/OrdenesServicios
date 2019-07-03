<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ManoObra */

$this->title = 'Create Mano Obra';
$this->params['breadcrumbs'][] = ['label' => 'Mano Obras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mano-obra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
