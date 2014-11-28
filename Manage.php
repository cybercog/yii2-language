<?php

namespace krok\language;

use krok\cp\components\Module;

class Manage extends Module
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
