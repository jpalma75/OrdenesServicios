<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CotizacionesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cotizaciones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'cot_num') ?>

    <?= $form->field($model, 'numero') ?>

    <?= $form->field($model, 'concepto_servicio') ?>

    <?= $form->field($model, 'contacto') ?>

    <?= $form->field($model, 'fecha_cotizacion') ?>

    <?php // echo $form->field($model, 'creado_por') ?>

    <?php // echo $form->field($model, 'fecha_creacion') ?>

    <?php // echo $form->field($model, 'modificado_por') ?>

    <?php // echo $form->field($model, 'fecha_modificacion') ?>

    <?php // echo $form->field($model, 'eliminado_por') ?>

    <?php // echo $form->field($model, 'fecha_eliminacion') ?>

    <?php // echo $form->field($model, 'lugar_expedicion') ?>

    <?php // echo $form->field($model, 'vendedor') ?>

    <?php // echo $form->field($model, 'enviar_a') ?>

    <?php // echo $form->field($model, 'subtotal') ?>

    <?php // echo $form->field($model, 'descuento') ?>

    <?php // echo $form->field($model, 'descuento_final') ?>

    <?php // echo $form->field($model, 'ieps') ?>

    <?php // echo $form->field($model, 'iva') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'importe') ?>

    <?php // echo $form->field($model, 'pu_num') ?>

    <?php // echo $form->field($model, 'consecutivo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
