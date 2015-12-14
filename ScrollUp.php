<?php

namespace ibrarturi\scrollup;

use yii;
use yii\web\View;

/**
 * An widget to wrap jQuery plugin scrollup for Yii Framework 2
 * by Ibrar Turi
 *
 * @see https://github.com/ibrarturi/yii2-scrollup
 * @author Ibrar Turi <ibrarturi@gmail.com>
 * @since 1.0
 */
class ScrollUp extends \yii\base\Widget
{
	/**
     * 
     * @var string name of the theme to use 
     */
    public $theme = null;//'tab';

    /**
     *
     * @var array options array to pass jquery plugin 
     */
    public $options = [];

    public function init()
    {
        parent::init();
        
        $this->registerAssets();
    }

    public function run()
    {
    	$view = $this->getView();

    	$options = (isset($this->options)) ? json_encode($this->options) : json_encode( [] );

    	$js = <<<SCRIPT

    		$.scrollUp( $options );

SCRIPT;

        $view->registerJs($js);

    }

    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
        $view = $this->getView();

		ScrollUpAsset::register($view);
	
		$baseUrl = Yii::$app->assetManager->bundles['ibrarturi\scrollup\ScrollUpAsset']->baseUrl;

        switch ($this->theme) {
            case 'tab':
                $view->registerCssFile($baseUrl . '/css/themes/tab.css', ['position' => View::POS_HEAD]);
                break;
            case 'link':
                $view->registerCssFile($baseUrl . '/css/themes/link.css', ['position' => View::POS_HEAD]);
                break;
            case 'image':
                $view->registerCssFile($baseUrl . '/css/themes/image.css', ['position' => View::POS_HEAD]);

                $this->options['scrollImg'] = true;
                /*= [
                	'scrollImg' =>  true
                ];*/
                break;
            case 'pill':
                $view->registerCssFile($baseUrl . '/css/themes/pill.css', ['position' => View::POS_HEAD]);
                break;
            default :
                $view->registerCssFile($baseUrl . '/css/themes/tab.css', ['position' => View::POS_HEAD]);
                break;
        }
    }
}
