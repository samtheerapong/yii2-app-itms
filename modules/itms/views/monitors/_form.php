<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\itms\models\Monitors $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="monitors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'asset_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'monitor_size')->textInput() ?>

    <?= $form->field($model, 'port_connected')->textInput(['maxlength' => true]) ?>

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
