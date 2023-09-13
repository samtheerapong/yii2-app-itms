<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\itms\models\SystemUserSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="system-user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user') ?>

    <?= $form->field($model, 'default_username') ?>

    <?= $form->field($model, 'default_password') ?>

    <?= $form->field($model, 'department') ?>

    <?php // echo $form->field($model, 'position') ?>

    <?php // echo $form->field($model, 'role') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'company_email') ?>

    <?php // echo $form->field($model, 'company_phone') ?>

    <?php // echo $form->field($model, 'private_phone') ?>

    <?php // echo $form->field($model, 'line_id') ?>

    <?php // echo $form->field($model, 'code_mfc') ?>

    <?php // echo $form->field($model, 'computer') ?>

    <?php // echo $form->field($model, 'monitor_main') ?>

    <?php // echo $form->field($model, 'monitor_secondary') ?>

    <?php // echo $form->field($model, 'license_windows') ?>

    <?php // echo $form->field($model, 'license_office') ?>

    <?php // echo $form->field($model, 'printer_1') ?>

    <?php // echo $form->field($model, 'printer_2') ?>

    <?php // echo $form->field($model, 'ups') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'remask') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'docs') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
