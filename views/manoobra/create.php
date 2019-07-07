<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Manoobra */

$this->title = 'Agregar Mano de Obra';
$this->params['breadcrumbs'][] = ['label' => 'Mano de Obras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manoobra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
