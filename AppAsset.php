<?php

namespace frontend\themes\retail;

use pantera\content\OwlCarouserAsset;
use pantera\media\widgets\syncedOwls\SyncedOwlsAsset;
use yii\bootstrap\BootstrapPluginAsset;
use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = __DIR__.'/assets';
    public $baseUrl = '@web';
    public $css = [
        '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'js/webslidemenu/webslidemenu.css',
        'js/webslidemenu/dropdown-effects/fade-up.css',
        // 'css/medical-theme-default.css',
        // 'css/kingcomposer.min.css',
        // 'css/medical-style.css',
        'css/main.min.css',
        // 'css/responsive.css',
        //'css/colors.less',
    ];
    public $js = [
        'js/bootstrap.bundle.min.js',
        'js/svg4everybody.min.js',
        'js/typeahead.jquery.min.js',
        'js/jquery.formstyler.min.js',
        'js/webslidemenu/webslidemenu.js',
        'js/jquery.goup.min.js',
        'js/js.cookie.js',
        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        OwlCarouserAsset::class,
        SyncedOwlsAsset::class,
    ];
    public function init()
    {
        if (!empty($_COOKIE['low-vision-mode'])) {
            $this->css[] = 'css/low-vision.css';
        }
        return parent::init();
    }
}
