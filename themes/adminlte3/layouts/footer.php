<?php

use yii\bootstrap4\Html;
use yii\helpers\Url;

?>
<footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://portfoliotheerapong.web.app/">Theerapong Khanta</a>.</strong>
    <span>
                <?= Html::a(Html::img('https://cdn.pixabay.com/photo/2013/07/12/17/58/thailand-152711_1280.png', ['width' => '20px']), Url::current(['language' => 'th-TH']), ['class' => (Yii::$app->request->cookies['language'] == 'th-TH' ? 'active' : '')]); ?>
                <?= Html::a(Html::img('https://cdn.pixabay.com/photo/2015/11/06/13/29/union-jack-1027898_1280.jpg', ['width' => '20px']), Url::current(['language' => 'en-US']), ['class' => (Yii::$app->request->cookies['language'] == 'en-US' ? 'active' : '')]); ?>
            </span>
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>