<?php
namespace muravshchyk\Pwstrength;

use yii\web\AssetBundle;


class PwstrengthAsset extends AssetBundle
{
    public $sourcePath = '@muravshchyk/Pwstrength/assets';
    public $css        = [
        'css/intlTelInput.css',
    ];

    public $js      = [
        'js/intlTelInput.js',
    ];
    public $cssOptions = [
        'type' => 'text/css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}