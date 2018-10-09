<?php
/**
 * @copyright Copyright (c) PutYourLightsOn
 */

namespace putyourlightson\snaptcha\assets;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

class SnaptchaAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = '@putyourlightson/snaptcha/resources';

        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page when this asset bundle is registered
        $this->css = [
            'css/cp.css',
        ];

        parent::init();
    }
}
