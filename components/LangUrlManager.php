<?php

namespace krok\language\components;

use yii;
use yii\web\UrlManager;
use yii\helpers\ArrayHelper;
use krok\language\models\Language;

class LangUrlManager extends UrlManager
{
    /**
     * @param array|string $params
     * @return string
     */
    public function createUrl($params)
    {
        $language = isset($params['language']) ? $params['language'] : Language::getCurrent();

        if (!Language::isLanguage($language)) {
            $language = Language::getCurrent();
        }

        return parent::createUrl(ArrayHelper::merge(['language' => $language], $params));
    }
}
