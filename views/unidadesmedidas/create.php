<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Unidadesmedidas */

$this->title = 'Nueva Unidad de Medidas';
$this->params['breadcrumbs'][] = ['label' => 'Unidadesmedidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidadesmedidas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
