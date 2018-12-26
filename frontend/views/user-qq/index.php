<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UserQqSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Qqs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-qq-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Qq', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'openid',
            'nickname',
            'sex',
            'figureurl',
            //'figureurl_qq_1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
