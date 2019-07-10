<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cotizaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cotizaciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'concepto_servicio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contacto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_cotizacion')->textInput() ?>

    <?= $form->field($model, 'creado_por')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_creacion')->textInput() ?>

    <?= $form->field($model, 'modificado_por')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_modificacion')->textInput() ?>

    <?= $form->field($model, 'eliminado_por')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_eliminacion')->textInput() ?>

    <?= $form->field($model, 'lugar_expedicion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendedor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enviar_a')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtotal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descuento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descuento_final')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ieps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'importe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pu_num')->textInput() ?>

    <?= $form->field($model, 'consecutivo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
