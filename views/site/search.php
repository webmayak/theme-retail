<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/31/18
 * Time: 4:40 PM
 */

use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $links array */
$this->title = 'Поиск по сайту';
$this->params['breadcrumbs'][] = $this->title;
?><main class="page-search__content">
    <h1><?= $this->title ?></h1>
    <div class="input-group input-group-lg">
        <input class="page-search__search-field search-field form-control" type="text" placeholder="Что ищем?">
        <div class="input-group-append">
            <button type="submit" class="page-search__search-btn btn btn-primary"><span class="sr-only">Поиск</span></button>
        </div>
    </div>
</main>
