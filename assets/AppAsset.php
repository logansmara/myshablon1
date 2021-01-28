<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/owl.carousel.min.css',
        'css/owl.theme.default.css',
        'css/sliders.css',
        'css/site.css',
        'css/style.css',
    ];
    public $js = [
        'js/owl.carousel.min.js',
        'js/scripts.js',
    ];
    public $depends = [
        'app\assets\FontAwesomeAsset',
        'yii\web\YiiAsset',
        // подключаем jQuery UI
        'yii\jui\JuiAsset',
        //'yii\bootstrap\BootstrapAsset',
        //еще дополнительно подключаем bootstrap.js
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
