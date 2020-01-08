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
<div class="row">
    <div class="col-lg-9 order-lg-2">
        <?= \yii\widgets\ListView::widget([
            'dataProvider' => $dataProvider,
            'options' => [
                'class' => 'products-list',
            ],
            'itemView' => '_view',
            'itemOptions' => [
                'class' => 'col-xl-4 col-lg-6 col-sm-6',
            ],
            'layout' => '{summary}<div class="row">{items}</div>{pager}',
            'pager' => [
                'class' => 'yii\bootstrap4\LinkPager',
                'options' => [
                    'class' => 'text-center',
                ],
            ],
        ]) ?>
    </div>
    <div class="col-lg-3">
        <?php if ($categories = \common\modules\shop\models\ShopCategory::find()->roots()->one()->getChildren()->andWhere(['status' => 1])->all()): ?>
            <ul class="category-nav">
                <?php foreach ($categories as $category): ?>
                    <li>
                        <a href="<?=$category->present()->getUrl()?>"><?= $category->name ?></a>
                        <?php if ($lvl2cats = $category->getChildren()->andWhere(['status' => 1])->all()): ?>
                            <ul>
                                <?php foreach ($lvl2cats as $lvl2cat): ?>
                                    <li>
                                        <a href="<?= $lvl2cat->present()->getUrl() ?>"><?= $lvl2cat->name ?></a>
                                        <?php if ($lvl3cats = $lvl2cat->getChildren()->andWhere(['status' => 1])->all()): ?>
                                            <ul>
                                                <?php foreach ($lvl3cats as $lvl3cat): ?>
                                                    <li>
                                                        <a href="<?= $lvl3cat->present()->getUrl() ?>"><?= $lvl3cat->name ?></a>
                                                        <?php if ($lvl4cats = $lvl3cat->getChildren()->andWhere(['status' => 1])->all()): ?>
                                                            <ul>
                                                                <?php foreach ($lvl4cats as $lvl4cat): ?>
                                                                    <li>
                                                                        <a href="<?= $lvl4cat->present()->getUrl() ?>"><?= $lvl4cat->name ?></a>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach;?>
            </ul>
        <?php endif; ?>
    </div>
</div>
