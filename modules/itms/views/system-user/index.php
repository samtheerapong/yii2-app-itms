<?php

use app\modules\itms\models\SystemUser;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\itms\models\SystemUserSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'System Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="system-user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create System User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user',
            'default_username',
            'default_password',
            'department',
            //'position',
            //'role',
            //'location',
            //'company_email:email',
            //'company_phone',
            //'private_phone',
            //'line_id',
            //'code_mfc',
            //'computer',
            //'monitor_main',
            //'monitor_secondary',
            //'license_windows',
            //'license_office',
            //'printer_1',
            //'printer_2',
            //'ups',
            //'status',
            //'remask:ntext',
            //'total',
            //'image:ntext',
            //'docs:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SystemUser $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
