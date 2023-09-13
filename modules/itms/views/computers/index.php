<?php

use app\modules\system\models\ComputerStatus;
use app\modules\system\models\ComputerType;
use kartik\export\ExportMenu;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\modules\itms\models\ComputersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Computers');
$this->params['breadcrumbs'][] = $this->title;
?>
<meta http-equiv="refresh" content="360">

<div class="computers-index">
<div style="display: flex; justify-content: space-between;">
        <div class="mb-3"> <?= Html::a('<i class="fa fa-plus"></i> ' . Yii::t('app', 'Create New'), ['create'], ['class' => 'btn btn-danger']) ?></div>
        <div class="mb-3" style="text-align: right;">

            <?php
            echo ExportMenu::widget([
                'exportConfig' => [
                    ExportMenu::FORMAT_TEXT => false,
                    ExportMenu::FORMAT_PDF => false,
                    ExportMenu::FORMAT_HTML => false,
                    ExportMenu::FORMAT_EXCEL => false,
                    ExportMenu::FORMAT_EXCEL_X => false,
                ],
                'dataProvider' => $dataProvider,
                'columns' => [],
                ]); 
                ?>
        </div>
    </div>

    <div class="card border-secondary">
        <div class="card-header text-white bg-secondary">
            <?= Html::encode($this->title) ?>
        </div>
        <div class="card-body">

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'id',
                    // 'computer_type',
                    [
                        'attribute' => 'computer_type',
                        'format' => 'html',
                        'contentOptions' => ['class' => 'text-center'],
                        // 'options' => ['style' => 'width:130px;'],
                        'value' => function ($model) {
                            return '<span class="button" style="color:' . $model->computerType->color . ';"><b>' . $model->computerType->name . '</b></span>';
                        },
                        'filter' => Select2::widget([
                            'model' => $searchModel,
                            'attribute' => 'computer_type',
                            'data' => ArrayHelper::map(ComputerType::find()->all(), 'id', 'name'),
                            'options' => ['placeholder' => Yii::t('app', 'Select...')],
                            'language' => 'th',
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ])
                    ],
                    'asset_number',
                    'hostname',
                    // 'model',
                    // 'serial',
                    //'cpu',
                    //'ram',
                    //'hdd1',
                    //'hdd2',
                    //'ssd1',
                    //'ssd2',
                    //'vga',
                    'lan_ip_address',
                    'lan_mac_address',
                    [
                        'attribute' => 'computer_status',
                        'format' => 'html',
                        'contentOptions' => ['class' => 'text-center'],
                        // 'options' => ['style' => 'width:130px;'],
                        'value' => function ($model) {
                            return '<span class="button" style="color:' . $model->computerStatus->color . ';"><b>' . $model->computerStatus->name . '</b></span>';
                        },
                        'filter' => Select2::widget([
                            'model' => $searchModel,
                            'attribute' => 'computer_status',
                            'data' => ArrayHelper::map(ComputerStatus::find()->all(), 'id', 'name'),
                            'options' => ['placeholder' => Yii::t('app', 'Select...')],
                            'language' => 'th',
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ])
                    ],
                    //'wifi_ip_address',
                    //'wifi_mac_address',
                    // 'install_date',
                    //'docs:ntext',
                    //'vendor:ntext',
                    //'cost',
                    //'remask:ntext',
                    [
                        'class' => 'kartik\grid\ActionColumn',
                        // 'headerOptions' => ['style' => 'width: 140px;'],
                        'contentOptions' => ['class' => 'text-center'],
                        // 'buttonOptions' => ['class' => 'btn btn-sm btn-outline-primary btn-group'],
                        'buttonOptions' => ['class' => 'btn btn-outline-dark btn-sm'],
                        'template' => '<div class="btn-group btn-group-xs" role="group"> {view} {update} {delete}</div>',
                        'urlCreator' => function ($action, $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?>


            <!-- </div> -->
        </div>
    </div>
</div>