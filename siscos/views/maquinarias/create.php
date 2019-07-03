<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Maquinarias */

$this->title = 'Create Maquinarias';
$this->params['breadcrumbs'][] = ['label' => 'Maquinarias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maquinarias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
