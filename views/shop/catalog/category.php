<?php

use common\modules\shop\widgets\productFilter\ProductFilter;
use common\modules\shop\widgets\productFilter\ProductFilterWidgetConfiguration;
use common\modules\shop\widgets\productsListWidget\ProductsListWidget;
use common\modules\shop\widgets\productsListWidget\ProductsListWidgetConfiguration;

$this->title = $model->name;

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => '/shop/catalog'];
$this->params['breadcrumbs'][] = $this->title;

/**
 * @var $dataProvider \yii\data\ActiveDataProvider
 */
?><h1><?=$this->title?></h1>

<?= ProductFilter::widget([
    'configuration' => new ProductFilterWidgetConfiguration([
        'searchModel' => $searchModel,
        'contextQuery' => $dataProvider->query,
        'currentBrand' => null,
    ])
])?>

<?= ProductsListWidget::widget([
    'configuration' => new ProductsListWidgetConfiguration([
        'listViewConfiguration' => [
            'summary' => false,
            'options' => [
                'class' => 'projects row',
            ],
            'itemOptions' => [
                'class' => 'col-md-3',
                'style' => 'margin-bottom: 10px;'
            ],
        ],
        'dataProvider' => $dataProvider
    ])
]) ?>
