<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Hendri Gunawan <hendri.gnw@gmail.com>
 */
class LandingAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'themes/v1/css/slick/slick.css',
        'themes/v1/css/slick/slick-theme.css',
        'themes/v1/css/fonticons.css',
        'themes/v1/css/magnific-popup.css',
        'themes/v1/css/bootsnav.css',
        'themes/v1/css/animate.min.css',
        'themes/v1/css/bootstrap.min.css',
        'themes/v1/css/xsslider.css',
        'themes/v1/css/plugins.css',
        'themes/v1/css/style.css',
        'themes/v1/css/responsive.css',
        'themes/v1/css/colors/blue.css',
    ];
    public $js = [
        'themes/v1/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js',
        'themes/v1/js/vendor/jquery-1.11.2.min.js',
        'themes/v1/js/vendor/bootstrap.min.js',
        'themes/v1/js/jquery.magnific-popup.js',
        'themes/v1/js/jquery.mixitup.min.js',
        'themes/v1/js/jquery.easing.1.3.js',
        'themes/v1/css/slick/slick.js',
        'themes/v1/css/slick/slick.min.js',
        'themes/v1/js/jquery.masonry.min.js',
        'themes/v1/js/jquery.collapse.js',
        'themes/v1/js/bootsnav.js',
        'themes/v1/js/jquery.touchSwipe.min.js',
        'themes/v1/js/xsslider.js',
        'themes/v1/js/plugins.js',
        'themes/v1/js/landing.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'app\assets\FontAwesomeAsset',
    ];
}
