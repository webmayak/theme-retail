<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/8/18
 * Time: 12:02 PM
 */

use common\modules\catalog\models\CatalogCategory;
use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Url;
use yii\web\View;

/* @var $this View */
/* @var $catalogRoot CatalogCategory */
/* @var $servicesRoot CatalogCategory */
/* @var $calculatorRoot CatalogCategory */
/* @var $category CatalogCategory */
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
                    <?php if (0 && $categories = \common\modules\shop\models\ShopCategory::find()->roots()->one()->getChildren()->andWhere(['status' => 1])->all()): ?>
                    <ul class="sub-menu">
                        <?php foreach ($categories as $category): ?>
                        <li>
                            <a href="<?=$category->present()->getUrl()?>"><?= $category->name ?></a>
                        </li>
                        <?php endforeach;?>
                    </ul>
                    <?php if ($this->beginCache('megamenu-dropdown', ['duration' => 86400])): ?>
                    <?= $this->render('_dropdown', [
                        'categories' => $catalogRoot->getChildren()->isInMenu()->all(),
                    ]) ?>
                    <?php $this->endCache(); endif; ?>
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
                <li>
                    <a class="navicon" href="<?= Url::to(['/site/search']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-search"/>
                        </svg>
                        <span class="sr-only">Поиск</span>
                    </a>
                </li>
                <li>
                    <a class="navicon" href="<?= Url::to(['/site/favorite']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-heart"/>
                        </svg>
                        <span class="sr-only">Избранное</span>
                    </a>
                </li>
                <li>
                    <a class="navicon" href="<?= Url::to(['/site/compare']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-graph"/>
                        </svg>
                        <span class="sr-only">Сравнение</span>
                    </a>
                </li>
                <li class="active">
                    <a class="navicon" href="<?= Url::to(['/shop/order/cart']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-cart"/>
                        </svg>
                        <span class="sr-only">Корзина</span>
                        <span class="menu-cart-count">23</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
