<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SucursalesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sucursales-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'suc_num') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'clave') ?>

    <?= $form->field($model, 'telefono') ?>

    <?= $form->field($model, 'rfc') ?>

    <?php // echo $form->field($model, 'cp') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'creado_por') ?>

    <?php // echo $form->field($model, 'fecha_creacion') ?>

    <?php // echo $form->field($model, 'modificado_por') ?>

    <?php // echo $form->field($model, 'fecha_modificacion') ?>

    <?php // echo $form->field($model, 'eliminado_por') ?>

    <?php // echo $form->field($model, 'fecha_eliminacion') ?>

    <?php // echo $form->field($model, 'razon_social') ?>

    <?php // echo $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reiniciar', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
