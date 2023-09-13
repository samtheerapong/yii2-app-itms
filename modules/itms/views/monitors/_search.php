<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\itms\models\MonitorsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="monitors-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'asset_number') ?>

    <?= $form->field($model, 'model') ?>

    <?= $form->field($model, 'serial') ?>

    <?= $form->field($model, 'monitor_size') ?>

    <?php // echo $form->field($model, 'port_connected') ?>

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
