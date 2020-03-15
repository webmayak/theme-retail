<?php

namespace frontend\themes\retail\widgets\shopProducts;

use yii\helpers\Html;
use Yii;

/**
 * Виджет простого списка товаров
 */
class ProductsList extends ProductsBaseList
{
    /* var array */
    public $itemOptions = ['class' => 'col-xl-4 col-lg-6 col-sm-6'];

    /* var array */
    public $pager = [
        'class' => 'yii\bootstrap4\LinkPager',
        'prevPageLabel' => '<i class="fa fa-angle-left"></i> Назад',
        'nextPageLabel' => 'Вперед <i class="fa fa-angle-right"></i>',
        'listOptions' => [
            'class' => ['pagination justify-content-center align-items-center']
        ]
    ];
}
