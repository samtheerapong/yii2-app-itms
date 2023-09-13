<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\itms\models\SystemUser $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="system-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user')->textInput() ?>

    <?= $form->field($model, 'default_username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'default_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department')->textInput() ?>

    <?= $form->field($model, 'position')->textInput() ?>

    <?= $form->field($model, 'role')->textInput() ?>

    <?= $form->field($model, 'location')->textInput() ?>

    <?= $form->field($model, 'company_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'private_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'line_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code_mfc')->textInput() ?>

    <?= $form->field($model, 'computer')->textInput() ?>

    <?= $form->field($model, 'monitor_main')->textInput() ?>

    <?= $form->field($model, 'monitor_secondary')->textInput() ?>

    <?= $form->field($model, 'license_windows')->textInput() ?>

    <?= $form->field($model, 'license_office')->textInput() ?>

    <?= $form->field($model, 'printer_1')->textInput() ?>

    <?= $form->field($model, 'printer_2')->textInput() ?>

    <?= $form->field($model, 'ups')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'remask')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'image')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'docs')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
