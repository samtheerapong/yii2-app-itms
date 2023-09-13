<?php

use app\modules\sam\models\FnameLname;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\sam\models\FnameLnameSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Fname Lnames');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fname-lname-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Fname Lname'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fname_id',
            'lname_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, FnameLname $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'fname_id' => $model->fname_id, 'lname_id' => $model->lname_id]);
                 }
            ],
        ],
    ]); ?>


</div>
