<?php

use common\modules\shop\widgets\cart\addToCart\AddToCartWidget;
use common\modules\shop\models\ShopProduct;
use yii\helpers\Html;

/**
 * @var ShopProduct $model
 */
?><div class="product-card">
    <a href="<?= $model->present()->getUrl() ?>">
        <img class="product-card__img" src="<?= $model->media ? $model->media->image() : 'https://via.placeholder.com/350' ?>" alt="<?= Html::encode($model->name) ?>">
    </a>
    <a href="<?= $model->present()->getUrl() ?>" class="product-card__title-link">
        <h3 class="product-card__title"><?= Html::encode($model->name) ?></h3>
    </a>
    <ul class="product-card__params ul-reset">
        <div class="product-card__param-text">
            <?= $model->description ?>
        </div>
    </ul>
    <?php if ($model->default_price > 0) : ?>
        <div class="product-card__old-price">Старая цена:
            <del><?= Yii::$app->formatter->asCurrency($model->default_price) ?></del>
        </div>
    <?php endif; ?>
    <div class="product-card__price">
        Цена:
        <?php if ($model->price && $model->price != '0.00') : ?>
            <b><?= Yii::$app->formatter->asCurrency($model->price) ?></b>
        <?php else : ?>
            <b>Под заказ</b>
        <?php endif; ?>
    </div>
    <div class="product-card__actions">
        <?= AddToCartWidget::widget([
                'htmlOptions' => ['class' => 'product-card__to-cart btn btn-lg btn-block btn-primary'],
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
