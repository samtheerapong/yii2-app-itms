<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\itms\models\Printers $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="printers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'asset_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'printer_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'install_date')->textInput() ?>

    <?= $form->field($model, 'docs')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'vendor')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'port_connected')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ip_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mac_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remask')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
