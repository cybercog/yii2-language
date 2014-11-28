<?php

namespace krok\language;

use Yii;

class Language extends \yii\base\Module implements \yii\base\BootstrapInterface
{
    /**
     * @var string
     */
    public $controllerNamespace = 'krok\language\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
        $this->registerTranslations();
    }

    /**
     * @param \yii\base\Application $app
     */
    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules(
            [
                '<language:\w+\-\w+>/cp/' . $this->id => 'cp/' . $this->id,
                '<language:\w+\-\w+>/cp/' . $this->id . '/<controller:\w+>' => 'cp/' . $this->id . '/<controller>',
                '<language:\w+\-\w+>/cp/' . $this->id . '/<controller:\w+>/<action:\w+>' => 'cp/' . $this->id . '/<controller>/<action>',
            ],
            false
        );
        $app->getUrlManager()->addRules(
            [
                '<language:\w+\-\w+>/debug' => 'debug',
                '<language:\w+\-\w+>/debug/<controller:\w+>/<action:\w+>' => 'debug/<controller>/<action>',
            ],
            false
        );
        $app->getUrlManager()->addRules(
            [
                '<language:\w+\-\w+>/gii' => 'gii/default/index',
                '<language:\w+\-\w+>/gii/<id:\w+>' => 'gii/default/view',
                '<language:\w+\-\w+>/gii/<controller:\w+>/<action:\w+>' => 'gii/<controller>/<action>',
            ],
            false
        );
    }

    public function registerTranslations()
    {
        Yii::$app->i18n->translations[$this->id] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@krok/language/messages',
        ];
    }
}
