<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use basic\ordenesservicio\models\UNM

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
    <?=form->field)$model, 'unm_num')-> dropDownList(
                    Arra::map(UNM::find()->all(),'unm_num','nombre'),
                    [
                        'prompt'=>'Selecciona el UNM',
                        'onchanghe'=>'
                            $.post( "index.php?r=branches/lists&id='.'"+$(thsi).val(), function( dat $( "select#models-UNM" ).html( data )
                        ));'
                    ]); ?>
    

   	// <?= $form->field($model, 'creado_por')->textInput(['maxlength' => true]) ?>

	// <?= $form->field($model, 'fecha_creacion')->textInput() ?>

    // <?= $form->field($model, 'modificado_por')->textInput(['maxlength' => true]) ?>

    // <?= $form->field($model, 'fecha_modificacion')->textInput() ?>

    // <?= $form->field($model, 'eliminado_por')->textInput(['maxlength' => true]) ?>

    // <?= $form->field($model, 'fecha_eliminacion')->textInput() ?>

    <?= $form->field($model, 'precio')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
