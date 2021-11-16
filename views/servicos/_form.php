<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Servicos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servicos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NOME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESCRICAO')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'FEATURED_IMG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SKILL_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
