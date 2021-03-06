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
        'css/main.css',
    ];
    public $js = [
    	'//www.parsecdn.com/js/parse-1.3.1.min.js',
    	'js/libs/require/require.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = [
    	'position' => \yii\web\View::POS_HEAD,
    	'data-main' => 'js/main',
    ];
}
