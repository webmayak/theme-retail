<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use pantera\content\widgets\block\Block;
use pantera\leads\widgets\form\LeadForm;

/* @var $this View */
?>
<div class="pre-header">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-auto mr-auto mb-3 mb-lg-0">
                <div class="pre-header__menu">
                    <?= Block::widget([
                        'position' => 'preheader',
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-auto ml-xl-5 mb-3 mb-sm-0">
                <div class="pre-header__city">
                    Город: <a href="/contacts">Липецк</a>
                </div>
            </div>
            <div class="col-sm-auto ml-xl-5 mb-3 mb-sm-0">
                <div class="pre-header__contact-item">
                    <div class="pre-header__contact-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-tel"/>
                        </svg>
                    </div>
                    <a class="pre-header__contact-item-text" href="tel:<?= Yii::$app->contactsManager->get('phone_city') ?>">
                        <?= Yii::$app->contactsManager->get('phone_city') ?>
                    </a>
                </div>
            </div>
            <div class="col-sm-auto ml-xl-5">
                <div class="pre-header__user d-flex align-items-center">
                    <div class="pre-header__user-avatar">
                        <img src="/images/login-icon.png" alt="">
                    </div>
                    <div class="pre-header__links">
                        <a href="">Вход</a><br>
                        <a href="">Регистрация</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-5 d-flex align-items-center">
                <a class="mburger mburger--squeeze" href="#mmenu-nav">
                    <b></b>
                    <b></b>
                    <b></b>
                </a>
                <a href="/" class="header__site-logo site-logo">
                    <img class="site-logo__img" src="/images/logo.png" alt="ENERGON">
                </a>
            </div>
            <div class="col-lg-6 order-lg-0 order-3 mt-4 mt-lg-0">
                <form class="search-form" action="<?= Url::to(['/shop/search']) ?>">
                    <div class="input-group input-group-lg">
                        <?= \common\modules\shop\widgets\search\Search::widget(); ?>
                        <div class="input-group-append">
                            <button type="submit" class="search-form__submit btn btn-primary"><span class="sr-only">Поиск</span></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-md-7 d-none d-md-block text-right">
                <?= LeadForm::widget([
                    'key' => 'callMe',
                    'text' => 'Заказать звонок',
                    'options' => [
                        'class' => 'btn btn-lg btn-primary header__btn',
                    ],
                ]) ?>
                <?= LeadForm::widget([
                    'key' => 'question',
                    'text' => 'Задать вопрос',
                    'options' => [
                        'class' => 'btn btn-lg btn-secondary header__btn',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</header>
