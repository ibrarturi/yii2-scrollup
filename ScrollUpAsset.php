<?php

namespace ibrarturi\scrollup;

use yii\web\AssetBundle;


/**
 * ScrollUp asset bundle
 *
 * @author Ibrar Turi <ibrarturi@gmail.com>
 * @since 1.0
 */
class ScrollUpAsset extends AssetBundle
{
    public $sourcePath = null;  //'@vendor/ibrarturi/yii2-scrollup/assets';

    public $css = [
    ];

    public $js = [
    	'js/jquery.scrollUp.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
    ];

    
    public function init()
    {
        parent::init();

        $this->setSourcePath(__DIR__ . '/assets');
        
    }

    /*
     * Sets the source path if empty
     * @param string $path the path to be set
     */
    protected function setSourcePath($path)
    {
        if (empty($this->sourcePath)) {
            $this->sourcePath = $path;
        }
    }
}
