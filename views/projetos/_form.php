<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Projetos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projetos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NOME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESCRICAO')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'ANO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FEATURED_IMG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SERVICO_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
