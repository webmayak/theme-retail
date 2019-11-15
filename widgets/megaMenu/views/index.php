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
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-address"/>
                        </svg>
                        Проекты
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Этажность</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Площадь</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Технология и тип</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Стиль</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Особенности</a>
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
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-wall"/>
                        </svg>
                        Строительство
                        <i class="fa fa-chevron-down"></i>
                    </a>
                </li>
                <li class="<?= preg_match('/^lechenie/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-gallery"/>
                        </svg>
                        Галерея
                    </a>
                </li>
                <li class="<?= preg_match('/^news$/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-company"/>
                        </svg>
                        О компании
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Пункт 1</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Пункт 2</a>
                        </li>
                    </ul>
                </li>
                <li class="<?= preg_match('/^reviews/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-percentage"/>
                        </svg>
                        Покупателю
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Пункт 1</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Пункт 2</a>
                        </li>
                    </ul>
                </li>
                <?php
                $faqIsActive = preg_match('/^faq/', Yii::$app->request->pathInfo);
                ?>
                <li class="<?= $faqIsActive ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-fence"/>
                        </svg>
                        Услуги
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Пункт 1</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Пункт 2</a>
                        </li>
                    </ul>
                </li>
                <li class="<?= Yii::$app->request->pathInfo === 'contacts' ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-city"/>
                        </svg>
                        Контакты
                    </a>
                </li>
                <li>
                    <a class="navicon" href="<?= Url::to(['#']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-search"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="navicon" href="<?= Url::to(['#']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-heart"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="navicon" href="<?= Url::to(['#']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-graph"/>
                        </svg>
                    </a>
                </li>
                <li class="active">
                    <a class="navicon" href="<?= Url::to(['#']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-cart"/>
                        </svg>
                        <span class="menu-cart-count">23</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
