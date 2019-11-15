<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 3:45 PM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\themes\retail\widgets\mainCatalog\MainCatalog;
use frontend\themes\retail\widgets\videoList\VideoList;
use pantera\content\models\ContentPage;
use pantera\content\widgets\block\Block;
use pantera\content\widgets\slider\Slider;
use pantera\leads\widgets\form\LeadForm;
use yii\web\View;

$this->context->layout = '//front';

/* @var $this View */
/* @var $model ContentPage */
/** @noinspection PhpUndefinedFieldInspection */
?>

<?php if (0) : ?>

<div class="slider">
    <?= Slider::widget([
        'pluginOptions' => [
            'dots' => true,
            'autoplay' => true,
            'animateIn' => false,
            'animateOut' => false,
            'autoplayHoverPause' => true,
        ],
    ]) ?>
</div>

<div class="why-us light-bg">
    <div class="container">
        <h1 class="why-us__title-big">Домостроительная компания</h1>
        <h2 class="why-us__title section-title">Почему выбирают нас</h2>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="why-us-item">
                    <div class="why-us-item__circle">19</div>
                    <div class="why-us-item__descr">Лет <br>работы</div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="why-us-item">
                    <div class="why-us-item__circle">2</div>
                    <div class="why-us-item__descr">Собственных <br>производства</div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="why-us-item">
                    <div class="why-us-item__circle">550</div>
                    <div class="why-us-item__descr">Проектов <br>выполненно</div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="why-us-item">
                    <div class="why-us-item__circle">200</div>
                    <div class="why-us-item__descr">Рабочих <br>в штате</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="categories">
    <div class="container">
        <h2 class="categories__title section-title">Категории</h2>
        <ul class="categories__list ul-reset">
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-1.jpg" alt="">
                    <div class="categories__item-title">Дома из бруса</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-2.jpg" alt="">
                    <div class="categories__item-title">Каркасные</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-3.jpg" alt="">
                    <div class="categories__item-title">Бани</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-4.jpg" alt="">
                    <div class="categories__item-title">Одноэтажные</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-5.jpg" alt="">
                    <div class="categories__item-title">Беседки</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-6.jpg" alt="">
                    <div class="categories__item-title">Туалеты</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-7.jpg" alt="">
                    <div class="categories__item-title">Гаражи</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-8.jpg" alt="">
                    <div class="categories__item-title">Декор</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-1.jpg" alt="">
                    <div class="categories__item-title">Дома из бруса</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-2.jpg" alt="">
                    <div class="categories__item-title">Каркасные</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-3.jpg" alt="">
                    <div class="categories__item-title">Бани</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-4.jpg" alt="">
                    <div class="categories__item-title">Одноэтажные</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-5.jpg" alt="">
                    <div class="categories__item-title">Беседки</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-6.jpg" alt="">
                    <div class="categories__item-title">Туалеты</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-7.jpg" alt="">
                    <div class="categories__item-title">Гаражи</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-8.jpg" alt="">
                    <div class="categories__item-title">Декор</div>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="projects">
    <div class="container">
        <h2 class="projects__title section-title">Проекты</h2>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="product-card">
                    <div class="product-card__label product-card__label--discount"><div>скидка</div></div>
                    <img class="product-card__img" src="/images/product-1.jpg" alt="Дом из бруса 8x8.5 в два этажа брусом с эркером">
                    <a href="#" class="product-card__title-link">
                        <h3 class="product-card__title">Дом из бруса 8x8.5 в два этажа брусом с эркером</h3>
                    </a>
                    <ul class="product-card__params ul-reset">
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-address"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Этажность: <b>2 этажа</b></div>
                        </li>
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-bed"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Комнат: <b>5</b></div>
                        </li>
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-size"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Размер: <b>8×8.5</b></div>
                        </li>
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-calendar"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Сроки: <b>14 дней</b></div>
                        </li>
                    </ul>
                    <div class="product-card__old-price">Старая цена: <del>850 000 Руб</del></div>
                    <div class="product-card__price">Цена: <b>742 500 Руб</b></div>
                    <div class="product-card__actions">
                        <button class="product-card__to-cart btn btn-primary">
                            Заказать
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor">
                                <use xlink:href="/images/sprite.svg#icon-cart"/>
                            </svg>
                        </button>
                        <button class="product-card__to-favorites btn btn-outline-success">
                            <span class="sr-only">В избранное</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor">
                                <use xlink:href="/images/sprite.svg#icon-heart"/>
                            </svg>
                        </button>
                        <button class="product-card__to-compare btn btn-outline-success">
                            <span class="sr-only">Сравнить</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor">
                                <use xlink:href="/images/sprite.svg#icon-graph"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="product-card">
                    <div class="product-card__label product-card__label--best-price"><div>лучшая цена</div></div>
                    <img class="product-card__img" src="/images/product-1.jpg" alt="Дом из бруса 8x8.5 в два этажа брусом с эркером">
                    <a href="#" class="product-card__title-link">
                        <h3 class="product-card__title">Дом из бруса 8x8.5 в два этажа брусом с эркером</h3>
                    </a>
                    <ul class="product-card__params ul-reset">
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-address"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Этажность: <b>2 этажа</b></div>
                        </li>
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-bed"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Комнат: <b>5</b></div>
                        </li>
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-size"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Размер: <b>8×8.5</b></div>
                        </li>
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-calendar"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Сроки: <b>14 дней</b></div>
                        </li>
                    </ul>
                    <div class="product-card__old-price">Старая цена: <del>850 000 Руб</del></div>
                    <div class="product-card__price">Цена: <b>742 500 Руб</b></div>
                    <div class="product-card__actions">
                        <button class="product-card__to-cart btn btn-primary">
                            Заказать
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor">
                                <use xlink:href="/images/sprite.svg#icon-cart"/>
                            </svg>
                        </button>
                        <button class="product-card__to-favorites btn btn-outline-success">
                            <span class="sr-only">В избранное</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor">
                                <use xlink:href="/images/sprite.svg#icon-heart"/>
                            </svg>
                        </button>
                        <button class="product-card__to-compare btn btn-outline-success">
                            <span class="sr-only">Сравнить</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor">
                                <use xlink:href="/images/sprite.svg#icon-graph"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="product-card">
                    <div class="product-card__label product-card__label--present"><div>подарок</div></div>
                    <img class="product-card__img" src="/images/product-1.jpg" alt="Дом из бруса 8x8.5 в два этажа брусом с эркером">
                    <a href="#" class="product-card__title-link">
                        <h3 class="product-card__title">Дом из бруса 8x8.5 в два этажа брусом с эркером</h3>
                    </a>
                    <ul class="product-card__params ul-reset">
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-address"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Этажность: <b>2 этажа</b></div>
                        </li>
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-bed"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Комнат: <b>5</b></div>
                        </li>
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-size"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Размер: <b>8×8.5</b></div>
                        </li>
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-calendar"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Сроки: <b>14 дней</b></div>
                        </li>
                    </ul>
                    <div class="product-card__old-price">Старая цена: <del>850 000 Руб</del></div>
                    <div class="product-card__price">Цена: <b>742 500 Руб</b></div>
                    <div class="product-card__actions">
                        <button class="product-card__to-cart btn btn-primary">
                            Заказать
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor">
                                <use xlink:href="/images/sprite.svg#icon-cart"/>
                            </svg>
                        </button>
                        <button class="product-card__to-favorites btn btn-outline-success">
                            <span class="sr-only">В избранное</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor">
                                <use xlink:href="/images/sprite.svg#icon-heart"/>
                            </svg>
                        </button>
                        <button class="product-card__to-compare btn btn-outline-success">
                            <span class="sr-only">Сравнить</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor">
                                <use xlink:href="/images/sprite.svg#icon-graph"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="product-card">
                    <div class="product-card__label product-card__label--bestseller"><div>хит продаж</div></div>
                    <img class="product-card__img" src="/images/product-1.jpg" alt="Дом из бруса 8x8.5 в два этажа брусом с эркером">
                    <a href="#" class="product-card__title-link">
                        <h3 class="product-card__title">Дом из бруса 8x8.5 в два этажа брусом с эркером</h3>
                    </a>
                    <ul class="product-card__params ul-reset">
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-address"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Этажность: <b>2 этажа</b></div>
                        </li>
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-bed"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Комнат: <b>5</b></div>
                        </li>
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-size"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Размер: <b>8×8.5</b></div>
                        </li>
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-calendar"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Сроки: <b>14 дней</b></div>
                        </li>
                    </ul>
                    <div class="product-card__old-price">Старая цена: <del>850 000 Руб</del></div>
                    <div class="product-card__price">Цена: <b>742 500 Руб</b></div>
                    <div class="product-card__actions">
                        <button class="product-card__to-cart btn btn-primary">
                            Заказать
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor">
                                <use xlink:href="/images/sprite.svg#icon-cart"/>
                            </svg>
                        </button>
                        <button class="product-card__to-favorites btn btn-outline-success">
                            <span class="sr-only">В избранное</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor">
                                <use xlink:href="/images/sprite.svg#icon-heart"/>
                            </svg>
                        </button>
                        <button class="product-card__to-compare btn btn-outline-success">
                            <span class="sr-only">Сравнить</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor">
                                <use xlink:href="/images/sprite.svg#icon-graph"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="steps">
    <div class="container">
        <h2 class="steps__title section-title">Как мы работаем</h2>
        <ul class="steps-list ul-reset">
            <li class="steps-list__item step">
                <div class="step__number">01</div>
                <div class="step__title">Общение</div>
                <div class="step__descr">Общение с заказчиком, получение информации для отрисовки и просчёта проекта</div>
            </li>
            <li class="steps-list__item step">
                <div class="step__number">02</div>
                <div class="step__title">Создание</div>
                <div class="step__descr">Создание<br> проекта и технической документации</div>
            </li>
            <li class="steps-list__item step">
                <div class="step__number">03</div>
                <div class="step__title">Согласовываем</div>
                <div class="step__descr">Согласовываем<br> и подписываем документы +&nbsp;предоплата 35%</div>
            </li>
            <li class="steps-list__item step">
                <div class="step__number">04</div>
                <div class="step__title">Встреча</div>
                <div class="step__descr">Встреча заказчика<br> с прорабом на участке и обсуждение вопросов</div>
            </li>
            <li class="steps-list__item step">
                <div class="step__number">05</div>
                <div class="step__title">Вывоз</div>
                <div class="step__descr">Вывоз домокомплекта,<br> начало работ бригады +&nbsp;вторая оплата 35%</div>
            </li>
            <li class="steps-list__item step">
                <div class="step__number">06</div>
                <div class="step__title">Приемка</div>
                <div class="step__descr">Приемка проекта согласно документации, заказчиком и  прорабом +&nbsp;остаток оплаты 30%</div>
            </li>
        </ul>
    </div>
</div>

<div class="advantages">
    <div class="container">
        <h2 class="advantages__title section-title">Наши преимущества</h2>
        <ul class="advantages-list ul-reset">
            <li class="advantages-list__item advantage">
                <div class="advantage__circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="29" fill="currentColor">
                        <use xlink:href="/images/sprite.svg#icon-address">
                    </svg>
                </div>
                <div class="advantage__descr">Офисы в Москве и&nbsp;Волгограде</div>
            </li>
            <li class="advantages-list__item advantage">
                <div class="advantage__circle">
                    <img src="/images/advantage-2.png" alt="">
                </div>
                <div class="advantage__descr">Собственный склад круглого леса</div>
            </li>
            <li class="advantages-list__item advantage">
                <div class="advantage__circle">
                    <img src="/images/advantage-3.png" alt="">
                </div>
                <div class="advantage__descr">Современная пилорама</div>
            </li>
            <li class="advantages-list__item advantage">
                <div class="advantage__circle">
                    <img src="/images/advantage-4.png" alt="">
                </div>
                <div class="advantage__descr">Цеха по обработке дерева</div>
            </li>
            <li class="advantages-list__item advantage">
                <div class="advantage__circle">
                    <img src="/images/advantage-5.png" alt="">
                </div>
                <div class="advantage__descr">Склад готовой продукции</div>
            </li>
            <li class="advantages-list__item advantage">
                <div class="advantage__circle">
                    <img src="/images/advantage-6.png" alt="">
                </div>
                <div class="advantage__descr">Собственный парк автотранспорта</div>
            </li>
            <li class="advantages-list__item advantage">
                <div class="advantage__circle">
                    <img src="/images/advantage-7.png" alt="">
                </div>
                <div class="advantage__descr">Высокое качество продукции</div>
            </li>
        </ul>
    </div>
</div>

<div class="content-block">
    <div class="container">
        <div class="content-block__body">
            <?= Block::widget([
                'position' => 'text_about',
            ]) ?>
        </div>
    </div>
</div>

<?= $this->render('@theme/views/_features') ?>

<div class="content-block content-block--main-catalog">
    <div class="container">
        <h3 class="main-catalog__subtitle"><a href="/catalog/preparaty-dlya-lechenia-gepatita-c">Препараты для лечения гепатита C</a></h3>
        <div class="main-catalog__subset">
            <?= MainCatalog::widget([
                'root' => CatalogCategory::findOne(386),
                'limit' => 3,
            ]) ?>
        </div>

        <h3 class="main-catalog__subtitle"><a href="/catalog/preparaty-dlya-lechenia-gepatita-b">Препараты для лечения гепатита В</a></h3>
        <div class="main-catalog__subset">
            <?= MainCatalog::widget([
                'root' => CatalogCategory::findOne(393),
                'limit' => 3,
            ]) ?>
        </div>

        <h3 class="main-catalog__subtitle"><a href="/catalog/preparaty-dlya-lechenia-vich">Препараты для лечения ВИЧ</a></h3>
        <div class="main-catalog__subset">
            <?= MainCatalog::widget([
                'root' => CatalogCategory::findOne(387),
                'limit' => 3,
            ]) ?>
        </div>

        <?= $this->render('@theme/views/_fast-consult') ?>
    </div>
</div>

<div class="content-block">
	<div class="content-block__title text-center">Сертификаты, результаты химических исследований</div>
	<div class="certificates">
		<a href="/uploads/elfinder/certificates/sofo-natko.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sofo-natko.jpg" alt="" /></a>
		<a href="/uploads/elfinder/certificates/sofovir.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sofovir.jpg" alt="" /></a>
		<a href="/uploads/elfinder/certificates/sovihep.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sovihep.jpg" alt="" /></a>
		<a href="/uploads/elfinder/certificates/sofo-natko.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sofo-natko.jpg" alt="" /></a>
		<a href="/uploads/elfinder/certificates/sofovir.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sofovir.jpg" alt="" /></a>
	</div>
    <div class="certificates-block__button"><a href="/documenty-certificaty-rezultaty-himicheskih-issledovanii" class="btn btn-lg btn-primary">Все документы и сертификаты</a></div>
</div>

<div class="content-block">
	<div class="container">
		<div class="content-block__title text-center">Задать вопрос врачу</div>
        <?= LeadForm::widget([
            'key' => 'question-row',
            'mode' => LeadForm::MODE_INLINE,
        ]) ?>
        <?= $this->render('@theme/views/_faq-block') ?>
    </div>
</div>

<div class="content-block content-block--fillwidth-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<a href="/uploads/elfinder/lechenie-1.jpg" data-fancybox="lechenie"><img src="/uploads/elfinder/lechenie-1.jpg" alt="" class="img-responsive" /></a>
			</div>
			<div class="col-md-6">
				<a href="/uploads/elfinder/lechenie-2.jpg" data-fancybox="lechenie"><img src="/uploads/elfinder/lechenie-2.jpg" alt="" class="img-responsive" /></a>
			</div>
		</div>
	</div>
</div>

<?= $this->render('@theme/views/_quality-protection') ?>

<div class="content-block content-block--video">
    <div class="h2 content-block__title text-center" style="margin-bottom: 0px;">Видео о нас</div>
    <div class="container">
        <div class="front-page-video-holder">
            <?= VideoList::widget([
                'models' => CatalogCategory::findOne(110)->getChildrenActive()->limit(6)->all(),
            ]) ?>
        </div>
    </div>
</div>

<?php if ($model->body || $model->seo->h1): ?>
    <div class="content-block content-block--frontpage-content">
        <div class="container">
            <?php if ($model->seo->h1) : ?>
                <h1 class="title-home">
                    <?= $model->seo->h1 ?>
                </h1>
            <?php endif; ?>
            <?php if ($model->body) : ?>
                <div class="editor-content">
                    <?= $model->body ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<div class="cities-block light-bg">
    <div class="container">
        <h2 class="cities-block__title section-title">Города</h2>
        <div class="cities-block__list">
            <ul>
                <li>
                    <a href="">Москва</a>
                </li>
                <li>
                    <a href="">Санкт-Петербург</a>
                </li>
                <li>
                    <a href="">Новосибирск</a>
                </li>
                <li>
                    <a href="">Екатеринбург</a>
                </li>
                <li>
                    <a href="">Нижний Новгород</a>
                </li>
                <li>
                    <a href="">Самара</a>
                </li>
                <li>
                    <a href="">Омск</a>
                </li>
                <li>
                    <a href="">Казань</a>
                </li>
                <li>
                    <a href="">Астрахань</a>
                </li>
                <li>
                    <a href="">Пермь</a>
                </li>
                <li>
                    <a href="">Красноярск</a>
                </li>
                <li>
                    <a href="">Челябинск</a>
                </li>
                <li>
                    <a href="">Ростов-на-Дону</a>
                </li>
                <li>
                    <a href="">Уфа</a>
                </li>
                <li>
                    <a href="">Волгоград</a>
                </li>
                <li>
                    <a href="">Пенза</a>
                </li>
                <li>
                    <a href="">Ижевск</a>
                </li>
                <li>
                    <a href="">Ульяновск</a>
                </li>
                <li>
                    <a href="">Воронеж</a>
                </li>
                <li>
                    <a href="">Саратов</a>
                </li>
                <li>
                    <a href="">Краснодар</a>
                </li>
                <li>
                    <a href="">Тольятти</a>
                </li>
                <li>
                    <a href="">Набережные Челны</a>
                </li>
                <li>
                    <a href="">Тюмень</a>
                </li>
                <li>
                    <a href="">Махачкала</a>
                </li>
                <li>
                    <a href="">Барнаул</a>
                </li>
                <li>
                    <a href="">Владивосток</a>
                </li>
                <li>
                    <a href="">Ярославль</a>
                </li>
                <li>
                    <a href="">Иркутск</a>
                </li>
                <li>
                    <a href="">Рязань</a>
                </li>
                <li>
                    <a href="">Томск</a>
                </li>
                <li>
                    <a href="">Хабаровск</a>
                </li>
                <li>
                    <a href="">Новокузнецк</a>
                </li>
                <li>
                    <a href="">Оренбург</a>
                </li>
                <li>
                    <a href="">Кемерово</a>
                </li>
                <li>
                    <a href="">И другие города России</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="works">
    <div class="container">
        <h2 class="works__title section-title">Наши выполненные работы</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="works__item">
                    <img src="/images/work-1.jpg" alt="">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="works__item">
                    <img src="/images/work-2.jpg" alt="">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="works__item">
                    <img src="/images/work-3.jpg" alt="">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="works__item">
                    <img src="/images/work-4.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-form-block">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8">
                <?= LeadForm::widget([
                    'key' => 'request',
                    'mode' => LeadForm::MODE_INLINE,
                ]) ?>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>
