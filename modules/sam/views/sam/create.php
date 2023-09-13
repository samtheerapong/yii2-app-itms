<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\sam\models\Sam $model */

$this->title = Yii::t('app', 'Create Sam');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sams'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
