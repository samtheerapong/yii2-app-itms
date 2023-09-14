<?php

use app\modules\system\models\Operators;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\system\models\OperatorsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Operators');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operators-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Operators'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'thai_name',
            'eng_name',
            'nick_name',
            'team_name',
            //'parent',
            //'department',
            //'email:email',
            //'tel1',
            //'tel2',
            //'line',
            //'avatar',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Operators $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
