<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjetosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projetos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projetos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Projetos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'NOME',
            'DESCRICAO',
            'ANO',
            'FEATURED_IMG',
            'SERVICO_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>