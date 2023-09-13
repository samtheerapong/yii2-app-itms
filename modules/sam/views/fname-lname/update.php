<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\sam\models\FnameLname $model */

$this->title = Yii::t('app', 'Update Fname Lname: {name}', [
    'name' => $model->fname_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fname Lnames'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fname_id, 'url' => ['view', 'fname_id' => $model->fname_id, 'lname_id' => $model->lname_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="fname-lname-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
