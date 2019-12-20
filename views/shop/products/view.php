<?php
/**
 * @var $model \common\modules\shop\models\ShopProduct
 */

use pantera\reviews\widgets\form\ReviewForm;
use pantera\reviews\widgets\LatestReviews;
use pantera\reviews\widgets\ReviewsList;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

?>

<?php

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

$this->title = $model->name;
$this->params['breadcrumbs'][] = $this->title;
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
                <?= \pantera\media\widgets\syncedOwls\SyncedOwls::widget([
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
                    <img src="https://via.placeholder.com/700x400" alt="<?= Html::encode($model->name) ?>">
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-6 product__overall">
            <h1 class="mb-4"><?= $model->name ?></h1>

            <?php if(0):?>
            <div class="product__ratings">
                <div class="product-rating-form rating-inline">
                    <?php if($myRate = Yii::$app->getModule('shop')->rating->getMyRate($model)):?>
                        <div class="product-interactive rating-inline">
                            <div class="rating-inline__label">
                                Оценено:
                            </div>
                            <div class="product-rating product-rating-<? $myRate?> d-flex">
                                <div class="product-rating__holder">
                                    <div class="product-rating__total"></div>
                                </div>
                            </div>
                        </div>
                    <?php else:?>
                        <div class="rating-inline__label">
                            Оценить
                        </div>
                        <form action="/shop/products/rate?product_id=<?=$model->id?>" class="product-rating-form__form">
                            <input type="radio" value="5" id="r-5" name="product-rating">
                            <label for="r-5" class="product-rating-form__value"></label>
                            <input type="radio" value="4" id="r-4" name="product-rating">
                            <label for="r-4" class="product-rating-form__value"></label>
                            <input type="radio" value="3" id="r-3" name="product-rating">
                            <label for="r-3" class="product-rating-form__value"></label>
                            <input type="radio" value="2" id="r-2" name="product-rating">
                            <label for="r-2" class="product-rating-form__value"></label>
                            <input type="radio" value="1" id="r-1" name="product-rating">
                            <label for="r-1" class="product-rating-form__value"></label>
                        </form>
                    <?php endif;?>
                </div>
                <div class="product-interactive rating-inline">
                    <div class="rating-inline__label">
                        Голосов:
                    </div>
                    <div class="product-rating product-rating-<?=Yii::$app->rating->getRateValue($model) ?> d-flex">
                        <div class="product-rating__holder">
                            <div class="product-rating__total"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif;?>

            <div class="panel panel-default product__panel mb-4">
                <div class="panel-body">
                    <div class="card-header__labels">
                        <?php if($model->present()->isInSegment('novinki')):?>
                            <div class="label-flag label-green">
                                NEW
                            </div>
                        <?php endif;?>
                        <?php if($model->present()->isInSegment('hity-prodazh')):?>
                            <div class="label-flag label-blue">
                                ХИТ
                            </div>
                        <?php endif;?>
                        <?php if($model->present()->isInSegment('skidki')):?>
                            <div class="label-flag label-purple">
                                -<?=$model->discount ?: 35?>
                            </div>
                        <?php endif;?>
                        <?php if($model->present()->isInSegment('tovary-s-podarkom')):?>
                            <div class="label-flag label-red">
                                <img src="/resources/images/icons/gift.png" alt="">
                            </div>
                        <?php endif;?>
                    </div>
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
                    <?php if (0) { ?>
                        <?= \common\modules\shop\widgets\productSelect\ProductSelect::widget([
                           'model' => $model,
                        ]); ?>
                        <?=\common\modules\shop\widgets\cart\miniCart\MiniCartWidget::widget([
                            'content' => 'Корзина',
                        ])?>
                    <?php } ?>

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
                <?=\common\modules\shop\widgets\cart\addToCart\AddToCartWidget::widget([
                    'htmlOptions' => ['class' => 'product-actions__to-cart btn btn-lg btn-block btn-primary'],
                    'content' => 'В корзину
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-cart"></use>
                        </svg>',
                    'model' => $model
                ]) ?>
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

        <?php if(0):?>
            <?= ReviewForm::widget([
                'model' => $model,
            ]) ?>
            <?= LatestReviews::widget([
                'model' => $model,
            ]) ?>
            <?= ReviewsList::widget([
                'model' => $model,
            ]) ?>
        <?php endif;?>

    </div>

    <?php if($model->smilar_products):?>
        <div class="block">
            <h2 class="block__header">
                Похожие товары
            </h2>
            <div>
                <?= \yii\widgets\ListView::widget([
                    'dataProvider' => new \yii\data\ActiveDataProvider([
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
    <?php endif;?>

    <?php if($model->will_need_products):?>
        <div class="block">
            <h2 class="block__header">
                Это вам пригодится
            </h2>
            <div>
                <?= \yii\widgets\ListView::widget([
                    'dataProvider' => new \yii\data\ActiveDataProvider([
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
    <?php endif;?>

    <div class="custom-content">
        <?=$model->bottom_content?>
    </div>

    <?php if(0):?>
        <div class="block">
            <div class="block__header">
                Документы
            </div>
            <div class="product__documents">
                <div class="documents-list">
                    <div class="documents-list__item">
                        <div class="document">
                            <div class="document__image">
                                <img src="/resources/images/icons/pdf.png" alt="">
                            </div>
                            <div class="document__body">
                                <div class="document__title">
                                    <a href="javascript:void(0)" class="text-darkline">Инструкция в ЕС+</a>
                                </div>
                                <div class="document__size">
                            <span class="text-gray">
                                Размер: 2 Мб
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="documents-list__item">
                        <div class="document">
                            <div class="document__image">
                                <img src="/resources/images/icons/pdf.png" alt="">
                            </div>
                            <div class="document__body">
                                <div class="document__title">
                                    <a href="javascript:void(0)" class="text-darkline">Технические характеристики</a>
                                </div>
                                <div class="document__size">
                            <span class="text-gray">
                                Размер: 2 Мб
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="documents-list__item">
                        <div class="document">
                            <div class="document__image">
                                <img src="/resources/images/icons/pdf.png" alt="">
                            </div>
                            <div class="document__body">
                                <div class="document__title">
                                    <a class="document__link text-darkline" href="javascript:void(0)">Инструкция в ЕС+</a>
                                </div>
                                <div class="document__size">
                            <span class="text-gray">
                                Размер: 2 Мб
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;?>

    <?php if (0) { ?>
    <div class="block">
        <?=\pantera\leads\widgets\form\LeadForm::widget([
            'key' => 'request',
            'mode' => \pantera\leads\widgets\form\LeadForm::MODE_INLINE
        ]) ?>
    </div>
    <?php } ?>

