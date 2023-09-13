<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\jobs\models\Operations $model */

$this->title = Yii::t('app', 'Create Operations');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Operations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operations-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
