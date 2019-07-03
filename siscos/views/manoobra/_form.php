<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ManoObra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mano-obra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'clave')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'especialidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'caracteristica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_especialista')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unm_num')->textInput() ?>

    <?= $form->field($model, 'creado_por')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_creacion')->textInput() ?>

    <?= $form->field($model, 'modificado_por')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_modificacion')->textInput() ?>

    <?= $form->field($model, 'eliminado_por')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_eliminacion')->textInput() ?>

    <?= $form->field($model, 'precio')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
