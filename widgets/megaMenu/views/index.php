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
                $catalogIsActive = preg_match('/^(catalog|brands|documenty-certificaty-rezultaty-himicheskih-issledovanii)/', Yii::$app->request->pathInfo);
                $brandsIsActive = preg_match('/^brands/', Yii::$app->request->pathInfo);
                ?>
                <li class="<?= $catalogIsActive ? 'active' : '' ?>active" id="main-menu-catalog">
                    <a href="<?= Url::to(['#']) ?>" class="navtext vsmenu-cat-toggle">
                        Каталог
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Автомобильные товары</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Батарейки, Аккумуляторы</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Зарядные устройства и блоки питания</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Инструменты и оборудование</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Кабельная продукция</a>
                        </li>
                    </ul>
                    <?php if (0 && $this->beginCache('megamenu-dropdown', ['duration' => 86400])): ?>
                    <?= $this->render('_dropdown', [
                        'categories' => $catalogRoot->getChildren()->isInMenu()->all(),
                    ]) ?>
                    <?php $this->endCache(); endif; ?>
                </li>
                <li class="<?= preg_match('/^article$/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        О компании
                    </a>
                </li>
                <li class="<?= preg_match('/^news$/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        Техническая информация
                    </a>
                </li>
                <li class="<?= preg_match('/^reviews/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        Партнерам
                    </a>
                </li>
                <li class="<?= preg_match('/^reviews/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        Покупателям
                    </a>
                </li>
                <li class="<?= preg_match('/^lechenie/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
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
                    <a class="navicon" href="<?= Url::to(['#']) ?>">
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
