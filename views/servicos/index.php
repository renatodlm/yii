<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ServicosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Servicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Servicos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'NOME',
            'DESCRICAO',
            'FEATURED_IMG',
            'SKILL_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
