<?php

use common\modules\shop\widgets\cart\addToCart\AddToCartWidget;
use pantera\media\widgets\syncedOwls\SyncedOwls;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView; 
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$this->title = $model->name;

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => '/shop/catalog'];
$parents = $model->category->parents;
unset($parents[0]);
foreach ($parents as $parent) {
    $this->params['breadcrumbs'][] = ['label' => $parent->name, 'url' => $parent->present()->getUrl()];
}
$this->params['breadcrumbs'][] = ['label' => $model->category->name, 'url' => $model->category->present()->getUrl()];
//if ($model->brand) {
//    $this->params['breadcrumbs'][] = [
//        'label' => $model->brand->name,
//        'url' => $model->category->present()->getUrl() . str_replace('brands', '', $model->brand->slug)
//    ];
//}
$this->params['breadcrumbs'][] = $this->title;

/**
 * @var $model \common\modules\shop\models\ShopProduct
 */
?>
<div class="product">
    <div class="row">
        <div class="col-lg-6 product__gallery">
            <div class="product__gallery-carousel">
                <?php
                $attachments = $model->media
                    ? ArrayHelper::merge([$model->media], $model->attachments)
                    : $model->attachments;
                ?>
                <?php if ($attachments): ?>
                <?= SyncedOwls::widget([
                    'models' => $attachments,
                    'containerOptions' => [
                        'data' => [
                            'fancyboxoptions' => [
                                'thumbs' => [
                                    'axis' => 'y'
                                ],
                            ],
                            'thumbscarouseloptions' => [
                                'items' => '5',
                            ],
                            'maincarouseloptions' => [
                                'dots' => false,
                                'dotsContainer' => '.product__gallery-carouselDots'
                            ],
                        ]
                    ]
                ]); ?>
                <div class="product__gallery-carouselDots owl-dots"></div>
                <?php else: ?>
                    <img src="https://via.placeholder.com/700x400" alt="<?= Html::encode($model->name) ?>" class="img-fluid">
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-6 product__overall">
            <h1 class="mb-4"><?= $model->name ?></h1>
            <div class="panel panel-default product__panel mb-4">
                <div class="panel-body">
                    <div class="product-price detail-price" data-id="43009">
                        <?php if ($oldPrioce = $model->present()->getOlPriceFormat()) : ?>
                            <div class="product-price__old">
                                <span class="product-price__oldCount"><?= $oldPrioce ?></span> руб. за 1 шт.
                            </div>
                        <?php endif;?>
                        <?php if ($discount = $model->present()->getDiscountFormat()) : ?>
                            <div class="product-price__economy">
                                <span>Экономия: <?= $discount ?></span>
                            </div>
                        <?php endif; ?>
                        <?php if ($price = $model->price) : ?>
                            <div class="stacked-block">
                                <div class="product-price__actual">
                                    <span class="product-price__actualCount"><?= (integer) $price ?></span> руб. за 1 шт.
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="product-status mb-4">
                <div class="product-sku mb-4">
                    <?php if($model->sku):?>
                        Артикул: <?= $model->sku ?>
                    <?php endif;?>
                </div>
                <?= $model->present()->getFormattedStatus() ?>
            </div>

            <div class="product-actions">
                <?= AddToCartWidget::widget([
                    'htmlOptions' => ['class' => 'product-actions__to-cart btn btn-lg btn-block btn-primary'],
                    'content' => 'В корзину
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-cart"></use>
                        </svg>',
                    'model' => $model
                ]) ?>
                <?php if (0) : ?>
                <button class="product-card__to-favorites btn btn-lg btn-outline-secondary">
                    <span class="sr-only">В избранное</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor">
                        <use xlink:href="/images/sprite.svg#icon-heart"></use>
                    </svg>
                </button>
                <button class="product-card__to-compare btn btn-lg btn-outline-secondary">
                    <span class="sr-only">Сравнить</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor">
                        <use xlink:href="/images/sprite.svg#icon-graph"></use>
                    </svg>
                </button>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="block product__info">
        <div class="row">
            <div class="col-xxl-9 col-xl-8 col-lg-7">
                <?php if($model->present()->getAttributesList() || $model->sku):?>
                    <div class="product__info-section mb-4">
                        <div class="h2">
                            Основные характеристики
                        </div>
                        <div class="product-title">
                            <?= Yii::$app->seo->getH1() ?>
                        </div>
                        <div class="striped-rows striped-rows_product">
                            <?php if($model->sku):?>
                                <div class="striped-rows__row striped-rows__row_opposite mb-3">
                                    <div class="text-gray">
                                        Артикул
                                    </div>
                                    <?= $model->sku ?>
                                </div>
                            <?php endif;?>
                            <?php foreach ($model->present()->getAttributesList() as $name => $value) : ?>
                                <?php if ($value) : ?>
                                    <div class="striped-rows__row striped-rows__row_opposite">
                                        <div class="text-gray">
                                            <?= $name ?>
                                        </div>
                                        <?= $value ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif;?>
                <?php if ($model->full_description) : ?>
                    <div class="product__info-section mb-4">
                        <div class="h2">
                            Описание
                        </div>
                        <div>
                            <?= $model->full_description ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-5">
                <ul class="product-aside ul-reset">
                    <li class="product-aside__item">
                        <div class="product-aside__item-icon">
                            <img src="/images/payment-icon.png" alt="">
                        </div>
                        <div>
                            <div class="product-aside__item-title">Оплата онлайн</div>
                            <div class="product-aside__item-descr">Теперь вы можете оплатить свой заказ картой</div>
                        </div>
                    </li>
                    <li class="product-aside__item">
                        <div class="product-aside__item-icon">
                            <img src="/images/delivery-icon.png" alt="">
                        </div>
                        <div>
                            <div class="product-aside__item-title">Доставка по городу</div>
                            <div class="product-aside__item-descr">Мы с легкостью доставим вам товар в пределах города</div>
                        </div>
                    </li>
                    <li class="product-aside__item product-aside__item--accent">
                        <div class="product-aside__item-icon">
                            <img src="/images/call-icon.png" alt="">
                        </div>
                        <div>
                            <div class="product-aside__item-title">Заказать по телефону</div>
                            <div class="product-aside__tel text-white">+7 (4742) 517 920</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php if ($model->smilar_products) : ?>
        <div class="block">
            <h2 class="block__header">
                Похожие товары
            </h2>
            <div>
                <?= ListView::widget([
                    'dataProvider' => new ActiveDataProvider([
                        'query' => $model->getSmilarProductsQuery(),
                    ]),
                    'layout' => '{items}',
                    'summary' => true,
                    'options' => [
                        'class' => 'card-grid row row-6',
                    ],
                    'itemOptions' => [
                        'class' => $this->context->module->viewCardsFormat->getCurrentView('cssClass'),
                    ],
                    'itemView' => $this->context->module->viewCardsFormat->getCurrentView('view'),
                ]) ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($model->will_need_products) : ?>
        <div class="block">
            <h2 class="block__header">
                Это вам пригодится
            </h2>
            <div>
                <?= ListView::widget([
                    'dataProvider' => new ActiveDataProvider([
                        'query' => $model->getWillNeedProductsQuery(),
                    ]),
                    'layout' => '{items}',
                    'summary' => true,
                    'options' => [
                        'class' => 'card-grid row row-6',
                    ],
                    'itemOptions' => [
                        'class' => $this->context->module->viewCardsFormat->getCurrentView('cssClass'),
                    ],
                    'itemView' => $this->context->module->viewCardsFormat->getCurrentView('view'),
                ]) ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="custom-content">
        <?= $model->bottom_content ?>
    </div>
</div>
