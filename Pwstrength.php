<?php
namespace muravshchyk\Pwstrength;

use Yii;
use yii\helpers\Html;
use yii\widgets\InputWidget;


class Pwstrength extends InputWidget
{
    /**
     * @var Integer  Sets the minimum required of characters for a password to not be considered too weak.)
     * Default: 6
     *
     */
    public $minChar;
    /**
     * @var String  The username field to match a password to, to ensure the user does not use the same value for their password.)
     * Default: "#username"
     *
     */
    public $usernameField;

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
        $pwstrengthParams = "minChar: {$this->minChar}, ";
        $pwstrengthParams .= "usernameField: '{$this->usernameField}'";

        PwstrengthAsset::register($this->view);
        Yii::$app->view->registerJs("jQuery('#" . $this->options['id'] . "'). pwstrength({ {$pwstrengthParams}});");
    }

}