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
            <div class="col-md-3">
                <a href="/" class="site-logo">
                    <img class="site-logo__img" src="/images/logo.png" alt="" style="max-width: 100%">
                </a>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
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
                    <div class="col-md-4">
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
                    <div class="col-md-4">
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
                    <div class="col-md-4">
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
            <div class="col-md-3">
                <?= LeadForm::widget([
                    'key' => 'callMe',
                    'text' => 'Заказать звонок',
                    'options' => [
                        'class' => 'btn btn-primary header__btn btn--call',
                    ],
                ]) ?>
                <?= LeadForm::widget([
                    'key' => 'question',
                    'text' => 'Задать вопрос',
                    'options' => [
                        'class' => 'btn btn-success header__btn btn--question',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</header>

<?php if (0) : ?>
    <div class="top-controls">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-5">
                    <div class="top-controls__left">
                        <?= Geolocation::widget([
                            'labelYourLocation' => 'Ваш город:',
                            'labelLocationNotDetected' => 'не указан',
                            'labelChangeLocation' => 'Выбрать город',
                        ]) ?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-7">
                    <div class="top-controls__right">
                        <?= LeadForm::widget([
                            'key' => 'iDoctor',
                            'text' => 'Я врач<span class="hidden-sm hidden-xs"> - желаю сотрудничать</span>',
                            'options' => [
                                'class' => '',
                            ],
                        ]) ?>
                        <?= LeadForm::widget([
                            'key' => 'getRecommendations',
                            'text' => 'Получить рекомендации по лечению гепатита С',
                            'options' => [
                                'class' => '',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="top-panel">
                <?php if (0): ?>
                    <span class="top-panel__low-vision" title="Версия сайта для слабовидящих">
                        <a rel="nofollow" class="top-panel__low-vision-toggle">Версия сайта для слабовидящих</a>
                        <a rel="nofollow" class="top-panel__low-vision-toggle top-panel__low-vision-toggle_back">Обычная версия сайта</a>
                    </span>
                <?php endif; ?>
                <div class="row">
                    <div class="col-md-2 col-lg-3 top-panel__col-logo">
                        <a href="/">
                            <img src="/images/logo.svg" alt="Индиавир" id="logo" />
                        </a>
                        <small class="top-panel__logo-text">Препараты от Гепатита и ВИЧ из Индии</small>
                    </div>
                    <div class="col-md-8 col-lg-6 top-panel__col-contacts">
                        <div class="creative_header_address">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="single_header_address first">
                                    <div class="creative_header_icon">
                                        <?= LeadForm::widget([
                                            'key' => 'callMe',
                                            'text' => '<i class="fa fa-phone"></i>',
                                            'options' => [
                                                'class' => '',
                                            ],
                                        ]) ?>
                                    </div>
                                    <div class="creative_header_address_text">
                                        <h3>Телефон</h3>
                                        <a href="tel:<?= preg_replace('/[^0-9\+]/', '', Yii::$app->contactsManager->get('phone_city')) ?>"><?= Yii::$app->contactsManager->get('phone_city') ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4  col-md-4 col-sm-4 col-xs-12">
                                <div class="single_header_address" style="position: relative; left: -30px;">
                                    <div class="creative_header_icon">
                                        <?= LeadForm::widget([
                                            'key' => 'callMe',
                                            'text' => '<i class="fa fa-phone"></i>',
                                            'options' => [
                                                'class' => '',
                                            ],
                                        ]) ?>
                                    </div>
                                    <div class="creative_header_address_text">
                                        <h3 style="margin-right: -30px;">Бесплатная&nbsp;консультация</h3>
                                        <a href="tel:<?= preg_replace('/[^0-9\+]/', '', Yii::$app->contactsManager->get('phone_mobile')) ?>"><?= Yii::$app->contactsManager->get('phone_mobile') ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4  col-md-4 col-sm-4 col-xs-12">
                                <div class="single_header_address ctrp" style="position: relative; left: -20px; margin-right: -35px;">
                                    <a href="/contacts" class="creative_header_icon">
                                        <i class="fa fa-map-marker"></i>
                                    </a>
                                    <div class="creative_header_address_text">
                                        <h3>Главный офис</h3>
                                        <a href="/contacts" style="font-size: 13px; line-height: 1.6em; display: inline-block;"><?= nl2br(Yii::$app->contactsManager->get('address')) ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-3 top-panel__col-buttons text-right">
                        <div class="top-panel__icons">
                            <a href="<?= Yii::$app->contactsManager->get('social_facebook') ?>" target="_blank"><img src="/images/icon-fb.svg"></a>
                            <a href="<?= Yii::$app->contactsManager->get('social_whatsapp') ?>" target="_blank"><img src="/images/icon-wa.svg"></a>
                            <a href="<?= Yii::$app->contactsManager->get('social_youtube') ?>" target="_blank"><img src="/images/icon-youtube.svg"></a>
                            <a href="<?= Yii::$app->contactsManager->get('social_instagram') ?>" target="_blank"><img src="/images/icon-instagram.svg"></a>
                            <a href="<?= Yii::$app->contactsManager->get('social_vkontakte') ?>" target="_blank"><img src="/images/icon-vk.svg"></a>
                        </div>
                        <div class="top-panel__email">
                            <i class="fa fa-envelope"></i> <a href="mailto:<?= Yii::$app->contactsManager->get('email') ?>" style="font-size: 13px;"><?= Yii::$app->contactsManager->get('email') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="wsmobileheader clearfix">
        <div class="container">
            <div class="wsmobileheader__holder">
                <a id="wsnavtoggle">
                    <div class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </div>
                </a>
                <div class="logo">
                    <a href="/">
                        <img src="/images/logo.svg" height="30" style="margin-top: 8px; margin-left: -40px;" alt=""/>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
