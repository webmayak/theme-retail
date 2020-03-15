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

    /**
     * {@inheritdoc}
     */
    public function init() : void
    {
        $this->layout = strtr(
            '{sort}<div class="row">{items}</div>{pager}', [
            '{sort}' => $this->sortLinksWidget(),
        ]);
        parent::init();
    }

    private function sortLinksWidget() : string
    {
        $pathInfo = Yii::$app->request->pathInfo;
        $currentSort = Yii::$app->request->get('sort');
        $iconSortAsc = Html::tag('i', '', ['class' => 'fa fa-sort-amount-asc']);
        $iconSortDesc = Html::tag('i', '', ['class' => 'fa fa-sort-amount-desc']);
        return Html::tag('div',
            'Сортировка по цене: '
            . Html::a(
                "дешевые {$iconSortAsc}",
                ["/{$pathInfo}", 'sort' => 'price'],
                ['class' => 'btn btn-xs ' . ($currentSort == 'price' ? 'btn-primary' : 'btn-link')]
            )
            . Html::a(
                "дорогие {$iconSortDesc}",
                ["/{$pathInfo}", 'sort' => '-price'],
                ['class' => 'btn btn-xs ' . ($currentSort == '-price' ? 'btn-primary' : 'btn-link')]
            )
            . ($currentSort ? Html::a(
                Html::tag('i', '', ['class' => 'fa fa-close']),
                ["/{$pathInfo}"],
                ['class' => 'btn btn-xs btn-link']
            ) : ''),
            ['class' => 'products-list-sort text-right']
        );
    }
}
