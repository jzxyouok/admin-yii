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
        "style/css/fullcalendar.css",
        "style/css/matrix-style.css",
        "style/css/matrix-media.css",
        "style/font-awesome/css/font-awesome.css",
        "style/css/jquery.gritter.css"
    ];
    public $js = [
        "style/js/excanvas.min.js",
        "style/js/jquery.min.js",
        "style/js/jquery.ui.custom.js",
        "style/js/bootstrap.min.js",
        "style/js/jquery.flot.min.js",
        "style/js/jquery.flot.resize.min.js",
        "style/js/jquery.peity.min.js",
        "style/js/fullcalendar.min.js",
        "style/js/matrix.js",
        "style/js/matrix.dashboard.js",
        "style/js/jquery.gritter.min.js",
        "style/js/matrix.interface.js",
        "style/js/matrix.chat.js",
        "style/js/jquery.validate.js",
        "style/js/matrix.form_validation.js",
        "style/js/jquery.wizard.js",
        "style/js/jquery.uniform.js",
        "style/js/select2.min.js",
        "style/js/matrix.popover.js",
        "style/js/jquery.dataTables.min.js",
        "style/js/matrix.tables.js"
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
