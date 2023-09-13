<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\itms\models\Ups $model */

$this->title = Yii::t('app', 'Create Ups');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ups-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
