<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SubBagianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Bagians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-bagian-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sub Bagian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'idbagian',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
