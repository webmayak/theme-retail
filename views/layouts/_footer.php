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
                <div class="col-lg-3">
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
                </div>
                <div class="col-lg-3">
                    <div class="footer__menu">
                        <div class="footer__title">Информация</div>
                        <ul>
                            <li>
                                <a href="">Способы оплаты</a>
                            </li>
                            <li>
                                <a href="">Гарантия</a>
                            </li>
                            <li>
                                <a href="">Доставка по России</a>
                            </li>
                            <li>
                                <a href="">Наши партнеры</a>
                            </li>
                            <li>
                                <a href="">Отзывы о компании</a>
                            </li>
                            <li>
                                <a href="">Реквизиты</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer__menu">
                        <div class="footer__title">Навигация</div>
                        <ul>
                            <li>
                                <a href="">Способы оплаты</a>
                            </li>
                            <li>
                                <a href="">Гарантия</a>
                            </li>
                            <li>
                                <a href="">Доставка по России</a>
                            </li>
                            <li>
                                <a href="">Наши партнеры</a>
                            </li>
                            <li>
                                <a href="">Отзывы о компании</a>
                            </li>
                            <li>
                                <a href="">Реквизиты</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer__menu">
                        <div class="footer__title">Личный кабинет</div>
                        <ul>
                            <li>
                                <a href="">Способы оплаты</a>
                            </li>
                            <li>
                                <a href="">Гарантия</a>
                            </li>
                            <li>
                                <a href="">Доставка по России</a>
                            </li>
                            <li>
                                <a href="">Наши партнеры</a>
                            </li>
                            <li>
                                <a href="">Отзывы о компании</a>
                            </li>
                            <li>
                                <a href="">Реквизиты</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php if (0) : ?>
    <footer id="footer">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 first">
                        <div class="creative_header_address">
                            <div class="single_header_address">
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
                            <div class="single_header_address">
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
                                    <h3>Бесплатная консультация</h3>
                                    <a href="tel:<?= preg_replace('/[^0-9\+]/', '', Yii::$app->contactsManager->get('phone_mobile')) ?>"><?= Yii::$app->contactsManager->get('phone_mobile') ?></a>
                                </div>
                            </div>
                            <div class="single_header_address">
                                <a href="/contacts" class="creative_header_icon">
                                    <i class="fa fa-map-marker"></i>
                                </a>
                                <div class="creative_header_address_text">
                                    <h3>Главный офис</h3>
                                    <a href="/contacts" style="font-size: 13px;"><?= nl2br(Yii::$app->contactsManager->get('address')) ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="bottom-panel__icons hidden-sm hidden-xs">
                            <a href="<?= Yii::$app->contactsManager->get('social_facebook') ?>" target="_blank"><img src="/images/icon-fb.svg"></a>
                            <a href="<?= Yii::$app->contactsManager->get('social_whatsapp') ?>" target="_blank"><img src="/images/icon-wa.svg"></a>
                            <a href="<?= Yii::$app->contactsManager->get('social_youtube') ?>" target="_blank"><img src="/images/icon-youtube.svg"></a>
                            <a href="<?= Yii::$app->contactsManager->get('social_instagram') ?>" target="_blank"><img src="/images/icon-instagram.svg"></a>
                            <a href="<?= Yii::$app->contactsManager->get('social_vkontakte') ?>" target="_blank"><img src="/images/icon-vk.svg"></a>
                        </div>
                        <div class="creative_header_address">
                            <div class="single_header_address">
                                <a href="mailto:<?= Yii::$app->contactsManager->get('email') ?>" class="creative_header_icon">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <div class="creative_header_address_text">
                                    <h3>Электронная почта</h3>
                                    <a href="mailto:<?= Yii::$app->contactsManager->get('email') ?>" style="font-size: 13px;"><?= Yii::$app->contactsManager->get('email') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="footer-menu">
                         <?= Block::widget([
                             'position' => 'footer3',
                         ]) ?>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-3 last">
                    <?= Block::widget([
                        'position' => 'footer4',
                    ]) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?= Block::widget([
                        'position' => 'copyrightLeft',
                    ]) ?>
                </div>
                <div class="col-md-3">
                    <?= Block::widget([
                        'position' => 'copyrightCenter',
                    ]) ?>
                </div>
                <div class="col-md-3">
                    <?= Block::widget([
                        'position' => 'copyrightRight',
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php endif; ?>
