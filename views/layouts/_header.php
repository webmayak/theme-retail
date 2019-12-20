<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/16/18
 * Time: 11:33 AM
 */

use yii\helpers\Html;
use yii\web\View;
use pantera\content\widgets\block\Block;
use pantera\leads\widgets\form\LeadForm;
use pantera\geolocation\widgets\geolocation\Geolocation;

/* @var $this View */
?>
<header class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-5">
                <button type="button" class="wsnavtoggle d-lg-none" id="wsnavtoggle">
                    <div class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </div>
                </button>
                <a href="/" class="header__site-logo site-logo">
                    <img class="site-logo__img" src="/images/logo.png" alt="ENERGON">
                </a>
            </div>
            <div class="col-xl-6 col-lg-7 order-lg-0 order-3 d-none d-lg-block">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="header__contact header__contact--city">
                            <div class="header__contact-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-city"/>
                                </svg>
                            </div>
                            <div>
                                <div class="header__contact-key">Ваш город:</div>
                                <div class="header__contact-value">
                                    <div class="dropdown">
                                        <button class="header__contact-toggle dropdown-toggle" type="button" data-toggle="dropdown">г. Липецк <i class="fa fa-chevron-down"></i></button>
                                        <ul class="header__city-dropdown dropdown-menu">
                                            <li>
                                                <button class="header__city-item" type="button">г. Москва</button>
                                            </li>
                                            <li>
                                                <button class="header__city-item header__city-item--active" type="button">г.Липецк</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="header__contact header__contact--tel">
                            <div class="header__contact-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-tel"/>
                                </svg>
                            </div>
                            <div>
                                <div class="header__contact-key">Телефон:</div>
                                <div class="header__contact-value">
                                    <div class="dropdown">
                                        <button class="header__contact-toggle dropdown-toggle" type="button" data-toggle="dropdown">+7-495-444-77-66 <i class="fa fa-chevron-down"></i></button>
                                        <ul class="header__tel-dropdown dropdown-menu">
                                            <li>
                                                Отдел Продаж:
                                                <a href="tel:">+7-495-444-77-66</a>
                                            </li>
                                            <li>
                                                Горячая Линия:
                                                <a href="tel:">+7-495-444-77-66</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="header__contact header__contact--email">
                            <div class="header__contact-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-email"/>
                                </svg>
                            </div>
                            <div>
                                <div class="header__contact-key">Email:</div>
                                <div class="header__contact-value">energon@gmail.com</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="header__contact header__contact--mode">
                            <div class="header__contact-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-mode"/>
                                </svg>
                            </div>
                            <div>
                                <div class="header__contact-key">Режим работы:</div>
                                <div class="header__contact-value">Пн-Пт: 09:00-19:00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="header__contact header__contact--address">
                            <div class="header__contact-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor">
                                    <use xlink:href="/images/sprite.svg#icon-address"/>
                                </svg>
                            </div>
                            <div>
                                <div class="header__contact-key">Адрес:</div>
                                <div class="header__contact-value">г. Липецк, ул. Советская, д. 28</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-2 col-md-7 d-none d-md-block">
                <?= LeadForm::widget([
                    'key' => 'callMe',
                    'text' => 'Заказать звонок',
                    'options' => [
                        'class' => 'btn btn-lg d-block btn-primary header__btn',
                    ],
                ]) ?>
                <?= LeadForm::widget([
                    'key' => 'question',
                    'text' => 'Задать вопрос',
                    'options' => [
                        'class' => 'btn btn-lg d-block btn-secondary header__btn',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</header>
