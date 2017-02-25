<?php

namespace integready\pwstrength;

use yii\web\AssetBundle;

/**
 * Class PwstrengthAsset
 * @package integready\Pwstrength
 */
class PwstrengthAsset extends AssetBundle
{
    public $sourcePath = '@integready/pwstrength/assets';

    public $js = [
        'js/pwstrength-bootstrap-1.2.9.js',

    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
