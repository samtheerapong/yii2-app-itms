<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\itms\models\Windows $model */

$this->title = Yii::t('app', 'Create Windows');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Windows'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="windows-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
