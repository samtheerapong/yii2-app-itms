<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\itms\models\ComputersSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="computers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'computer_type') ?>

    <?= $form->field($model, 'asset_number') ?>

    <?= $form->field($model, 'hostname') ?>

    <?= $form->field($model, 'model') ?>

    <?php // echo $form->field($model, 'serial') ?>

    <?php // echo $form->field($model, 'cpu') ?>

    <?php // echo $form->field($model, 'ram') ?>

    <?php // echo $form->field($model, 'hdd1') ?>

    <?php // echo $form->field($model, 'hdd2') ?>

    <?php // echo $form->field($model, 'ssd1') ?>

    <?php // echo $form->field($model, 'ssd2') ?>

    <?php // echo $form->field($model, 'vga') ?>

    <?php // echo $form->field($model, 'lan_ip_address') ?>

    <?php // echo $form->field($model, 'lan_mac_address') ?>

    <?php // echo $form->field($model, 'wifi_ip_address') ?>

    <?php // echo $form->field($model, 'wifi_mac_address') ?>

    <?php // echo $form->field($model, 'install_date') ?>

    <?php // echo $form->field($model, 'docs') ?>

    <?php // echo $form->field($model, 'vendor') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'remask') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
