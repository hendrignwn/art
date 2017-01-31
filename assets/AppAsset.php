<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'themes/v1/magnific-popup/magnific-popup.css',
        'themes/v1/flexSlider/flexslider.css',
        'themes/v1/materialize/css/materialize.min.css',
        'themes/v1/bootstrap/css/bootstrap.min.css',
        'themes/v1/css/shortcodes/shortcodesae52.css?v=5',
        'themes/v1/css/skins/creative.css',
        'themes/v1/styleae52.css?v=5',
    ];
    public $js = [
        'themes/v1/bootstrap/js/bootstrap.min.js',
        'themes/v1/materialize/js/materialize.min.js',
        'themes/v1/js/menuzord.js',
        'themes/v1/js/bootstrap-tabcollapse.min.js',
        'themes/v1/js/jquery.easing.min.js',
        'themes/v1/js/jquery.sticky.min.js',
        'themes/v1/js/smoothscroll.min.js',
        'themes/v1/js/imagesloaded.js',
        'themes/v1/js/jquery.stellar.min.js',
        'themes/v1/js/jquery.inview.min.js',
        'themes/v1/js/jquery.shuffle.min.js',
        'themes/v1/owl.carousel/owl.carousel.min.js',
        'themes/v1/flexSlider/jquery.flexslider-min.js',
        'themes/v1/magnific-popup/jquery.magnific-popup.min.js',
        'themes/v1/js/twitterFetcher.min.js',
        'themes/v1/js/scriptsae52.js?v=5',
        'https://maps.googleapis.com/maps/api/js',
        'themes/v1/js/google.maps.config.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'app\assets\FontAsset',
        'app\assets\FontAwesomeAsset',
    ];
}
