<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Manoobra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manoobra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'clave')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'especialidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'caracteristica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_especialista')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unm_num')->textInput() ?>

    <?= $form->field($model, 'precio')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
