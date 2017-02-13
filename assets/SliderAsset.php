<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Hendri <hendri.gnw@gmail.com>
 */
class SliderAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $depends = [
    ];
    
    public function init() 
    {
        parent::init();
        
        $theme = \Yii::$app->params['activeFrontTheme'];
        
        $this->css = [
            'themes/'.$theme.'/owl.carousel/assets/owl.carousel.min.css',
            'themes/'.$theme.'/flexSlider/flexslider.min.css',
            'themes/'.$theme.'/revolution/css/settings.min.css',
            'themes/'.$theme.'/revolution/css/layers.min.css',
            'themes/'.$theme.'/revolution/css/navigation.min.css',
        ];
        
        $this->js = [
            'themes/'.$theme.'/owl.carousel/owl.carousel.min.js',
            'themes/'.$theme.'/flexSlider/jquery.flexslider-min.js',
            'themes/'.$theme.'/revolution/js/jquery.themepunch.tools.min.js',
            'themes/'.$theme.'/revolution/js/jquery.themepunch.revolution.min.js',
            'themes/'.$theme.'/revolution/js/extensions/revolution.extension.video.min.js',
            'themes/'.$theme.'/revolution/js/extensions/revolution.extension.slideanims.min.js',
            'themes/'.$theme.'/revolution/js/extensions/revolution.extension.actions.min.js',
            'themes/'.$theme.'/revolution/js/extensions/revolution.extension.layeranimation.min.js',
            'themes/'.$theme.'/revolution/js/extensions/revolution.extension.kenburn.min.js',
            'themes/'.$theme.'/revolution/js/extensions/revolution.extension.navigation.min.js',
            'themes/'.$theme.'/revolution/js/extensions/revolution.extension.migration.min.js',
            'themes/'.$theme.'/revolution/js/extensions/revolution.extension.parallax.min.js',
        ];
    }
}
