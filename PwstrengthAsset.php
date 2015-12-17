<?php

namespace muravshchyk\Pwstrength;

use yii\web\AssetBundle;


class PwstrengthAsset extends AssetBundle
{
    public $sourcePath = '@muravshchyk/Pwstrength/assets';

    public $js      = [
        'js/pwstrength-bootstrap-1.2.9',
		
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}



vendor\bigferumdron\yii2-int-tel-input-widget\IntTelInput.php