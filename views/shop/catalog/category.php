<?php

use common\modules\shop\widgets\productFilter\ProductFilter;
use common\modules\shop\widgets\productFilter\ProductFilterWidgetConfiguration;
use common\modules\shop\widgets\productsListWidget\ProductsListWidget;
use common\modules\shop\widgets\productsListWidget\ProductsListWidgetConfiguration;

$this->title = $model->name;

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => '/shop/catalog'];
$parents = $model->parents;
unset($parents[0]);
foreach ($parents as $parent) {
    $this->params['breadcrumbs'][] = ['label' => $parent->name, 'url' => $parent->present()->getUrl()];
}
$this->params['breadcrumbs'][] = $this->title;

$dataProvider->pagination = ['defaultPageSize' => 12];

/**
 * @var $dataProvider \yii\data\ActiveDataProvider
 */
?><h1><?=$this->title?></h1>

<?= \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'options' => [
        'class' => 'products-list',
    ],
    'itemView' => '_view',
    'itemOptions' => [
        'class' => 'col-xl-3 col-lg-4 col-sm-6',
    ],
    'layout' => '{summary}<div class="row">{items}</div>{pager}',
    'pager' => [
        'class' => 'yii\bootstrap4\LinkPager',
        'options' => [
            'class' => 'text-center',
        ],
    ],
]) ?>
