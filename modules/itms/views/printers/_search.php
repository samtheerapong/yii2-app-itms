<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\itms\models\PrintersSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="printers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'asset_number') ?>

    <?= $form->field($model, 'model') ?>

    <?= $form->field($model, 'serial') ?>

    <?= $form->field($model, 'printer_type') ?>

    <?php // echo $form->field($model, 'details') ?>

    <?php // echo $form->field($model, 'install_date') ?>

    <?php // echo $form->field($model, 'docs') ?>

    <?php // echo $form->field($model, 'vendor') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'port_connected') ?>

    <?php // echo $form->field($model, 'ip_address') ?>

    <?php // echo $form->field($model, 'mac_address') ?>

    <?php // echo $form->field($model, 'remask') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
