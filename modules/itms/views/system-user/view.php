<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\itms\models\SystemUser $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'System Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="system-user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user',
            'default_username',
            'default_password',
            'department',
            'position',
            'role',
            'location',
            'company_email:email',
            'company_phone',
            'private_phone',
            'line_id',
            'code_mfc',
            'computer',
            'monitor_main',
            'monitor_secondary',
            'license_windows',
            'license_office',
            'printer_1',
            'printer_2',
            'ups',
            'status',
            'remask:ntext',
            'total',
            'image:ntext',
            'docs:ntext',
        ],
    ]) ?>

</div>
