Yii2 Language Manager
=================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist krok/yii2-language "*"
```

or add

```
"krok/yii2-language": "*"
```

to the require section of your `composer.json` file.

Configure
-----------------

Add to config file (config/web.php or common\config\main.php)

```
'bootstrap' => [
    'language',
],
```

```
'modules' => [
        'language' => [
            'class' => 'krok\language\Language',
        ],
],
```

register modules

```
'modules' => [
        'cp' => [
            'class' => 'krok\cp\Cp',
            'modules' => [
                'language' => [
                    'class' => 'krok\language\Manage',
                ],
            ],
        ],
],
```

```
'components' => [
    'request' => [
        'class' => 'krok\language\components\LangRequest',
    ],
    'urlManager' => [
        'class' => 'krok\language\components\LangUrlManager',
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'suffix' => '.html',
        'enableStrictParsing' => false,
        'rules' => [
            '<language:\w+\-\w+>' => '/',
            '<language:\w+\-\w+>/<controller:\w+>' => '<controller>',
            '<language:\w+\-\w+>/<controller:\w+>/<action:\w+>' => '<controller>/<action>',
        ],
    ],
]
```

Usage
-----

```
<?=
    LanguageWidget::widget(
        [
            'options' => ['class' => 'navbar-nav navbar-left'],
        ]
    );
?>
```
