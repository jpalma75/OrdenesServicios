<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ordenescompras */

$this->title = 'Create Ordenescompras';
$this->params['breadcrumbs'][] = ['label' => 'Ordenescompras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordenescompras-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
