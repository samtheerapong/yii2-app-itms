<?php
namespace app\widgets;

use yii\web\AssetBundle;

class SweetAlertAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'node_modules/sweetalert2/dist/sweetalert2.all.js', // Use the correct path here
    ];
    public $css = [
        'node_modules/sweetalert2/dist/sweetalert2.min.css', // Use the correct path here
    ];
}