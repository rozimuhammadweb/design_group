<?php

namespace frontend\assets;

use yii\web\AssetBundle;


class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "css/sign/bootstrap.min.css",
        "css/sign/swiper-bundle.min.css",
        "css/sign/jquery.fancybox.min.css",
        "css/main.css",
    ];
    public $js = [
        "js/jquery.min.js",
        "js/bootstrap.bundle.min.js",
        "js/swiper-bundle.min.js",
        "js/scrollreveal.js",
        "js/index.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
