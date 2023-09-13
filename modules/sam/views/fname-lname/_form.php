<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\sam\models\FnameLname $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="fname-lname-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($modelF, 'id')->textInput() ?>

    <?= $form->field($modelL, 'id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
