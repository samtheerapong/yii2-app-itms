<?php

use app\modules\jobs\models\Jobs;
use app\modules\jobs\models\JobStatus;
use app\modules\jobs\models\Operations;
use app\modules\system\models\User;
use kartik\export\ExportMenu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\bootstrap4\LinkPager;
use kartik\grid\GridView;
use kartik\widgets\DatePicker;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\modules\jobs\models\OperationsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Operations');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operations-index">
    <div style="display: flex; justify-content: space-between;">
        <div class="mb-3"> <?= Html::a('<i class="fa fa-refash"></i> ' . Yii::t('app', 'Refash'), ['index'], ['class' => 'btn btn-info']) ?></div>
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
            ]) ?>
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
                'pager' => [
                    'class' => LinkPager::class,
                    'options' => ['class' => 'pagination justify-content-center m-1'],
                    'linkContainerOptions' => ['class' => 'page-item'],
                    'linkOptions' => ['class' => 'page-link'],
                ],
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'id',
                    [
                        'attribute' => 'job_status',
                        'label' => Yii::t('app', 'Job Status'),
                        'format' => 'html',
                        'headerOptions' => ['style' => 'width: 120px;'],
                        'contentOptions' => ['class' => 'text-center'],
                        'value' => function ($model) {
                            return  Html::a(
                                '<span class="text-justify" style="color:' . $model->job->jobStatus->color . ';"><b>' . $model->job->jobStatus->name . '</b></span>',
                                ['view', 'id' => $model->id]
                            );
                        },
                        'filter' => Select2::widget([
                            'model' => $searchModel,
                            'attribute' => 'job_status',
                            'data' => ArrayHelper::map(JobStatus::find()->all(), 'id', 'name'),
                            'options' => ['placeholder' => Yii::t('app', 'Select...')],
                            'language' => 'th',
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ])
                    ],
                  
                    [
                        'attribute' => 'job_id',
                        'format' => 'html',
                        'headerOptions' => ['style' => 'width: 150px;'],
                        'contentOptions' => ['class' => 'text-center'],
                        'value' => function ($model) {
                            return  Html::a(
                                $model->job->number, // Access the Jobs model associated with Operations
                                ['view', 'id' => $model->id]
                            );
                        },
                        'filter' => Select2::widget([
                            'model' => $searchModel,
                            'attribute' => 'job_id',
                            'data' => ArrayHelper::map(Jobs::find()->all(), 'id', 'number'),
                            'options' => ['placeholder' => Yii::t('app', 'Select...')],
                            'language' => 'th',
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ])
                    ],
                    // 'job_id',
                    // 'operator_by',
                    [
                        'attribute' => 'operator_by',
                        'format' => 'html',
                        // 'options' => ['style' => 'width:200px'],
                        'value' => 'operatorBy.thai_name',
                        'filter' => Select2::widget([
                            'model' => $searchModel,
                            'attribute' => 'operator_by',
                            'data' => ArrayHelper::map(User::find()->all(), 'id', 'thai_name'),
                            'options' => ['placeholder' => Yii::t('app', 'Select...')],
                            'language' => 'th',
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ])
                    ],
                    // 'details:ntext',
                    // 'sparepart_list:ntext',
                    // 'start_date',
                    [
                        'attribute' => 'start_date',
                        'options' => ['style' => 'width:250px'],
                        'format' => 'html',
                        'value' => function ($model) {
                            return $model->formatDateTime(strtotime($model->start_date));
                        },
                    ],
                    [
                        'attribute' => 'end_date',
                        'format' => 'html',
                        'options' => ['style' => 'width:250px'],
                        'value' => function ($model) {
                            return $model->formatDateTime(strtotime($model->end_date));
                        },
                    ],
                    // 'cost',
                    [
                        'attribute' => 'cost',
                        'format' => 'html',
                        'options' => ['style' => 'width:150px'],
                        'value' => function ($model) {
                            return $model->cost;
                        },
                    ],
                    //'remask:ntext',
                    //'docs:ntext',
                    [
                        'class' => 'kartik\grid\ActionColumn',
                        'options' => ['style' => 'width:150px'],
                        'buttonOptions' => ['class' => 'btn btn-outline-dark btn-sm'],
                        'template' => '<div class="btn-group btn-group-xs" role="group"> {operate} {view} {update} {delete}</div>',
                        'urlCreator' => function ($action, $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        },


                    ],

                ],
            ]); ?>
        </div>
    </div>
</div>