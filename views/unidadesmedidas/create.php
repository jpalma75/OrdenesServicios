<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UnidadesMedidas */

$this->title = 'Create Unidades Medidas';
$this->params['breadcrumbs'][] = ['label' => 'Unidades Medidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidades-medidas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
