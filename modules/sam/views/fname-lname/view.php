<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\sam\models\FnameLname $model */

$this->title = $model->fname_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fname Lnames'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fname-lname-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'fname_id' => $model->fname_id, 'lname_id' => $model->lname_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'fname_id' => $model->fname_id, 'lname_id' => $model->lname_id], [
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
            'fname_id',
            'lname_id',
        ],
    ]) ?>

</div>
