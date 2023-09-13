<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\itms\models\Windows $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="windows-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'asset_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'install_date')->textInput() ?>

    <?= $form->field($model, 'email_actived')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendor')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'docs')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'remask')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
