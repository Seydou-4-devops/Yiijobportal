<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'vendor/animate.css/animate.min.css',
        'vendor/bootstrap/css/bootstrap.min.css',
        'vendor/bootstrap-icons/bootstrap-icons.css',
        'vendor/boxicons/css/boxicons.min.css',
        'vendor/glightbox/css/glightbox.min.css',
        'vendor/swiper/swiper-bundle.min.css',
        'css/style.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i',
    ];
    public $js = [
        'vendor/purecounter/purecounter.js',
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/glightbox/js/glightbox.min.js',
        'vendor/isotope-layout/isotope.pkgd.min.js',
        'vendor/swiper/swiper-bundle.min.js',
        'vendor/waypoints/noframework.waypoints.js',
        'vendor/php-email-form/validate.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
