<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UNM */

$this->title = 'Create Unm';
$this->params['breadcrumbs'][] = ['label' => 'Unms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
