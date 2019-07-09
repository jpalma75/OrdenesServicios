<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Herramientas */

// echo "<pre>";
// // var_dump($uno);
// var_dump($model);
// echo "</pre>";

$this->title = $model->clave;
$this->params['breadcrumbs'][] = ['label' => 'Herramientas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="herramientas-view">

    <?php //foreach ($variable as $key => $value): ?>
        <!-- <table>
            <tr>
                <td> $value->nombre </td>
            </tr>
        </table> -->
    <?php //endforeach ?>

    <h1><?= Html::encode($this->title) ?></h1>

    <h2 class="alert alert-primary">Registro: <?= $model->clave ?></h2>
    <p>        
        <?= Html::a('Actualizar', ['update', 'id' => $model->hrr_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->hrr_num], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estas Seguro de querer borrar el registr de la Herramienta?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'clave',
            'nombre',
            'marca',
            'modelo',
            'caracteristica',
            // 'unm_num',
            // 'unmNum.nombre',
            'unidadesmedidas_nombre',
            'precio',
        ],
    ]) ?>

</div>
