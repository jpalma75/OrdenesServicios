<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\models\Unidadesmedidas;
// $unidadesmedidas = ArrayHelper::map(Unidadesmedidas::find()->all(), 'unm_num', 'nombre');
$unidadesmedidas = ArrayHelper::map(Unidadesmedidas::find()->where(['unm_num' => 2])->all(), 'unm_num', function ($model) {
    return $model->clave . ' - ' . $model->nombre;
});


$uno = Unidadesmedidas::find()->one();
$dos = Unidadesmedidas::find()->where(['unm_num' => 2])->all();


echo "<pre>";
// var_dump($uno);
var_dump($uno->nombre);
echo "</pre>";


echo "<pre>";
// var_dump($dos);
var_dump($dos[0]->nombre);
var_dump($dos[0]["nombre"]);
echo "</pre>";

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

    <?php //echo $form->field($model, 'unm_num')->textInput() ?>

    <?php //echo $form->field($model, 'unm_num')->dropDownList(         ArrayHelper::map(Unidadesmedidas::find()->asArray()->all(), 'unm_num', 'clave'&'nombre') ) ?> 
    <?php //echo $form->field($model, 'unm_num')->dropDownList($unidadesmedidas,['prompt'=>'Seleccione...']) ?> 
    <?php echo $form->field($model, 'unm_num')->widget(Select2::classname(), [
            'data' => $unidadesmedidas,
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?> 

    
    <?= $form->field($model, 'precio')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>






