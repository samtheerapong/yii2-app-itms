<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\system\models\Operators $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="operators-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'thai_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eng_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nick_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent')->textInput() ?>

    <?= $form->field($model, 'department')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'line')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avatar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
