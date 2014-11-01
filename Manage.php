<?php

namespace krok\language;

class Manage extends \yii\base\Module
{
    /**
     * @var string
     */
    public $defaultRoute = 'manage';

    /**
     * @var string
     */
    public $controllerNamespace = 'krok\language\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
