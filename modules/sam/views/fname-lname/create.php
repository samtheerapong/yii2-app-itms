<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\sam\models\FnameLname $model */

$this->title = Yii::t('app', 'Create Fname Lname');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fname Lnames'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fname-lname-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelF' => $modelF,
        'modelL' => $modelL,
    ]) ?>

</div>