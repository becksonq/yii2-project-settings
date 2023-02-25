<?php

namespace becksonq\settings;

use yii\base\Application;

/**
 * Class Bootstrap
 * @package app\becksonq\settings
 */
class Bootstrap implements \yii\base\BootstrapInterface
{

    /**
     * @inheritDoc
     */
    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules([
            'settings' => 'becksonq/settings/index',
        ], false);

        $app->setModule('settings', ['becksonq\settings\Module']);
    }
}