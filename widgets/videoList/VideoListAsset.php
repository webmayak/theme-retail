<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 11/7/18
 * Time: 12:12 PM
 */

namespace frontend\themes\retail\widgets\videoList;

use pantera\media\widgets\syncedOwls\FancyboxAsset;
use yii\web\AssetBundle;

class VideoListAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $js = [
        'js/script.js',
    ];

    public $depends = [
        FancyboxAsset::class,
    ];
}
