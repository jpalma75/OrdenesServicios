<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Herramientas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="herramientas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'clave')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'caracteristica')->textInput(['maxlength' => true]) ?>

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
