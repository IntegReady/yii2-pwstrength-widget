<?php
namespace muravshchyk\Pwstrength;

use Yii;
use yii\helpers\Html;
use yii\widgets\InputWidget;


class Pwstrength extends InputWidget
{
    public function init()
    {
        parent::init();
        $this->registerAssets();
    }

    /**
     * @return string
     */
    public function run()
    {
            Html::addCssClass($this->options, 'form-control');
            return Html::activeTextInput($this->model, $this->attribute, $this->options);
    }

    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {

        PwstrengthAsset::register($this->view);
        Yii::$app->view->registerJs("jQuery('#" . $this->options['id'] . "').pwstrength({common: {minChar: 8, usernameField: '#signupform-nickname'}});");
    }

}