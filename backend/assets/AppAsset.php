<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "style/css/bootstrap.min.css",
        "style/css/bootstrap-responsive.min.css",
        'style/css/matrix-style.css',
        'style/css/matrix-media.css'
    ];
    public $js = [
        "style/js/jquery.min.js",
        "style/js/jquery.ui.custom.js",
        "style/js/bootstrap.min.js",
        "style/js/matrix.js",
        'style/js/jquery.validate.js',
        'style/js/jquery.wizard.js',
        'style/js/matrix.wizard.js'
       
    ];
    public $depends = [
    ];
}
