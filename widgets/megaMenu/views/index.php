<?php

use common\modules\shop\widgets\cart\miniCart\MiniCartWidget;
use yii\helpers\Url;
use yii\web\View;

/* @var $this View */
?>
<div class="megamenu clearfix">
    <div class="container">
        <nav class="wsmenu">
            <ul class="wsmenu-list">
                <?php
                $catalogIsActive = preg_match('/^shop/', Yii::$app->request->pathInfo);
                ?>
                <li class="all-categories-btn <?= $catalogIsActive ? 'active' : '' ?>" id="main-menu-catalog">
                    <a href="<?= Url::to(['/shop/catalog']) ?>" class="navtext vsmenu-cat-toggle">
                        Все категории
                    </a>
                    <?php if ( Url::toRoute( Yii::$app->controller->getRoute() ) != '/content/content/view/index' ) : ?>
                        <div class="all-categories-btn__dropdown">
                            <?= $this->render('@theme/views/_catalog-menu') ?>
                        </div>
                    <?php endif; ?>
                </li>
                <li class="<?= preg_match('/^payment-delivery$/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/payment-delivery']) ?>">
                        Оплата и доставка
                    </a>
                </li>
                <li class="<?= preg_match('/^partnership/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/partnership']) ?>">
                        Партнерам
                    </a>
                </li>
                <li class="<?= preg_match('/^for-customers/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/for-customers']) ?>">
                        Покупателям
                    </a>
                </li>
                <li class="<?= preg_match('/^about$/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/about']) ?>">
                        О магазине
                    </a>
                </li>
                <li class="<?= preg_match('/^contacts/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/contacts']) ?>">
                        Контакты
                    </a>
                </li>
                <?php if (0) : ?>
                <li>
                    <a class="navicon" href="<?= Url::to(['/favorite']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-heart"/>
                        </svg>
                        <span class="sr-only">Избранное</span>
                    </a>
                </li>
                <li>
                    <a class="navicon" href="<?= Url::to(['/compare']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-graph"/>
                        </svg>
                        <span class="sr-only">Сравнение</span>
                    </a>
                </li>
                <?php endif; ?>
                <li class="active">
                    <?= MiniCartWidget::widget([
                        'content' => 'Корзина',
                    ]) ?>
                </li>
            </ul>
        </nav>
    </div>
</div>
