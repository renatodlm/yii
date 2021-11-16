<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProjetosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projetos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'NOME') ?>

    <?= $form->field($model, 'DESCRICAO') ?>

    <?= $form->field($model, 'ANO') ?>

    <?= $form->field($model, 'FEATURED_IMG') ?>

    <?php // echo $form->field($model, 'SERVICO_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
