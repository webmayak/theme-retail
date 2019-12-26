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
                    <?=\common\modules\shop\widgets\cart\miniCart\MiniCartWidget::widget([
                        'content' => 'Корзина',
                    ])?>
                </li>
            </ul>
        </nav>
    </div>
</div>
