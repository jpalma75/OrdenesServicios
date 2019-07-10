<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrdenescomprasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordenescompras-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'orc_num') ?>

    <?= $form->field($model, 'numero') ?>

    <?= $form->field($model, 'concepto_servicio') ?>

    <?= $form->field($model, 'contacto') ?>

    <?= $form->field($model, 'fecha_orden_compra') ?>

    <?php // echo $form->field($model, 'cot_num') ?>

    <?php // echo $form->field($model, 'creado_por') ?>

    <?php // echo $form->field($model, 'fecha_creacion') ?>

    <?php // echo $form->field($model, 'modificado_por') ?>

    <?php // echo $form->field($model, 'fecha_modificacion') ?>

    <?php // echo $form->field($model, 'eliminado_por') ?>

    <?php // echo $form->field($model, 'fecha_eliminacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
