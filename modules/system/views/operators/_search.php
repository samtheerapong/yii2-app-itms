<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\system\models\OperatorsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="operators-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'thai_name') ?>

    <?= $form->field($model, 'eng_name') ?>

    <?= $form->field($model, 'nick_name') ?>

    <?= $form->field($model, 'team_name') ?>

    <?php // echo $form->field($model, 'parent') ?>

    <?php // echo $form->field($model, 'department') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'tel1') ?>

    <?php // echo $form->field($model, 'tel2') ?>

    <?php // echo $form->field($model, 'line') ?>

    <?php // echo $form->field($model, 'avatar') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
