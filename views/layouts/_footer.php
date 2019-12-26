<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/16/18
 * Time: 11:34 AM
 */

use pantera\content\widgets\block\Block;
use yii\web\View;

/* @var $this View */
?>

<footer class="footer">
    <div class="footer__middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer__social">
                        <div class="footer__title">Социальные сети</div>
                        <ul>
                            <li>
                                <a class="social-link social-link--instargam" href="<?= Yii::$app->contactsManager->get('social_instagram') ?>" target="_blank">
                                    <span class="sr-only">Instargam</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-instargam">
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="social-link social-link--vk" href="<?= Yii::$app->contactsManager->get('social_vkontakte') ?>" target="_blank">
                                    <span class="sr-only">ВКонтакте</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-vk">
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="social-link social-link--fb" href="<?= Yii::$app->contactsManager->get('social_facebook') ?>" target="_blank">
                                    <span class="sr-only">Facebook</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-fb">
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__contacts mt-4">
                        <div class="footer__title">Контакты</div>
                        <ul class="footer__contact-list ul-reset">
                            <li class="footer__contact-item">
                                <div class="footer__contact-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-tel">
                                        </use></svg>
                                </div>
                                <div class="footer__contact-item-text"><?= Yii::$app->contactsManager->get('phone_city') ?></div>
                            </li>
                            <li class="footer__contact-item">
                                <div class="footer__contact-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-email">
                                        </use></svg>
                                </div>
                                <div class="footer__contact-item-text"><?= Yii::$app->contactsManager->get('email') ?></div>
                            </li>
                            <li class="footer__contact-item">
                                <div class="footer__contact-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-city">
                                        </use></svg>
                                </div>
                                <div class="footer__contact-item-text"><?= Yii::$app->contactsManager->get('address') ?></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-4 mt-sm-0">
                    <div class="footer__menu">
                        <div class="footer__title">Информация</div>
                        <?= Block::widget([
                            'position' => 'footer1',
                        ]) ?>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0">
                    <div class="footer__menu">
                        <div class="footer__title">Навигация</div>
                        <?= Block::widget([
                            'position' => 'footer2',
                        ]) ?>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0">
                    <div class="footer__menu">
                        <div class="footer__title">Личный кабинет</div>
                        <?= Block::widget([
                            'position' => 'footer3',
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
