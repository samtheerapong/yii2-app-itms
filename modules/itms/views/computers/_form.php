<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\itms\models\Computers $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="computers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'computer_type')->textInput() ?>

    <?= $form->field($model, 'asset_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hostname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hdd1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hdd2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ssd1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ssd2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lan_ip_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lan_mac_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wifi_ip_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wifi_mac_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'install_date')->textInput() ?>

    <?= $form->field($model, 'docs')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'vendor')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'remask')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
