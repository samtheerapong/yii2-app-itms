<?php

use app\models\UploadedFile;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\UploadedFileSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Uploaded Files');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uploaded-file-index">

    <?= \yii2mod\alert\Alert::widget() ?>

    <div style="display: flex; justify-content: space-between;">
        <p>
            <?= Html::a('<i class="fas fa-home"></i> ' . Yii::t('app', 'Jobs'), ['index'], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('<i class="fa fa-plus"></i> ' . Yii::t('app', 'Create New'), ['create'], ['class' => 'btn btn-danger']) ?>
        </p>
        <p style="text-align: right;">
        <p>
            <?= Html::a('<i class="fas fa-cog"></i> ' . Yii::t('app', 'Configuration'), ['configs'], ['class' => 'btn btn-success']) ?>
        </p>
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
                    [
                        'attribute' => 'name',
                        'format' => 'html',
                        'value' => function ($model) {
                            return  Html::a(
                                $model->name,
                                ['view', 'id' => $model->id]
                            );
                        },
                        'filter' => Select2::widget([
                            'model' => $searchModel,
                            // 'theme' => Select2::THEME_KRAJEE_BS4,
                            'theme' => Select2::THEME_KRAJEE_BS4,
                            'attribute' => 'name',
                            'data' => ArrayHelper::map(UploadedFile::find()->all(), 'name', 'name'),
                            'options' => ['placeholder' => Yii::t('app', 'Select...')],
                            'language' => 'th',
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ])
                    ],
                    [
                        'attribute' => 'filename',
                        'format' => 'html',
                        'value' => function ($model) {
                            return  Html::a(
                                $model->filename,
                                ['view', 'id' => $model->id]
                            );
                        },
                        'filter' => Select2::widget([
                            'model' => $searchModel,
                            // 'theme' => Select2::THEME_KRAJEE_BS4,
                            'theme' => Select2::THEME_KRAJEE_BS4,
                            'attribute' => 'filename',
                            'data' => ArrayHelper::map(UploadedFile::find()->all(), 'filename', 'filename'),
                            'options' => ['placeholder' => Yii::t('app', 'Select...')],
                            'language' => 'th',
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ])
                    ],
                    'size',
                    'type',
                    [
                        // 'class' => ActionColumn::class,
                        'class' => 'kartik\grid\ActionColumn',
                        'header' => 'จัดการ',
                        'contentOptions' => ['class' => 'text-center'], // จัดตรงกลาง
                        'buttonOptions' => ['class' => 'btn btn-outline-secondary btn-sm'],
                        'template' => '<div class="btn-group btn-group-xs" role="group"> {view} {update} {delete}</div>',
                        'urlCreator' => function ($action,  $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?>


        </div>
    </div>
</div>