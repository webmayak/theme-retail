<?php

use frontend\themes\retail\AppAsset;
use frontend\widgets\megaMenu\MegaMenu;
use frontend\widgets\twigRender\TwigRender;
use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;
use yii\helpers\Url;

if ((Yii::$app->controller->id === 'site' && Yii::$app->controller->action->id === 'error') === false) {
    $this->registerLinkTag([
        'rel' => 'canonical',
        'href' => Url::canonical(),
    ]);
}
$this->registerLinkTag([
    'rel' => 'icon',
    'type' => 'icon',
    'href' => '/favicon.png',
]);

AppAsset::register($this);
$this->beginPage();

/* @var $this \yii\web\View */
/* @var $content string */
?><!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#2bcd93">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        <?= Yii::$app->settings->get('css', 'default') ?>
        .megamenu {
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        ul {
            list-style-position: inside;
            list-style-type: disc;
            padding-left: 0;
        }
        ul li {
            margin-top: 3px;
        }
        ul ul {
            padding-left: 20px;
            margin: 6px 0;
        }
        .products-list > .empty {
            margin-top: 20px;
        }
        .breadcrumb {
            margin-top: 20px;
            padding: 0;
            background: transparent;
        }
        footer {
            margin-top: 30px;
        }
        .footer__middle {
            padding: 40px 0;
        }
        .footer__bottom {
            padding: 20px 0 5px 0;
        }
        .footer__menu li:not(:last-child) {
            margin-bottom: 8px;
        }
        .footer__contact-item {
            margin-bottom: 12px;
        }
        ul.pagination {
            align-items: center;
            justify-content: center;
            margin-top: 40px;
        }
        .product-card {
            margin-top: 30px;
        }
        .product-card__title-link {
            min-height: 100px;
            margin-top: 10px;
        }
        .add-to-cart-form {
            margin-right: 8px;
        }
        ul.all-categories {
            margin-top: 20px;
            columns: 3;
            -webkit-columns: 3;
            -moz-columns: 3;
        }
        h1, h2 {
            font-size: 32px;
            text-align: left;
            font-weight: 400;
            margin: 0;
        }
        h1:after, h2:after {
            display: none;
        }
        .content-slider__item-content .product-card__actions a, .product-card__actions .btn, .product-card__actions .content-slider__item-content a {
            padding: 8px;
        }
        .btn.product-card__to-cart {
            padding-left: 12px;
            padding-right: 12px;
        }
        .products-list .summary {
            margin-top: 20px;
        }
        .wsmenu>.wsmenu-list>li>.navtext {
            justify-content: center;
        }
        .error-page {
            margin: 60px 0;
        }
        .error-page h1 {
            text-align: center;
        }
        .editor-content__page {
            margin-top: 20px;
        }
    </style>
</head>
<body class="page-<?= $_SERVER['REQUEST_URI'] == '/' ? 'front' : str_replace('/', '-', trim($_SERVER['REQUEST_URI'], '/')) ?>">
<?php $this->beginBody() ?>
<?= $this->render('_header') ?>

<?= MegaMenu::widget() ?>

<div class="wrap">
    <?= TwigRender::widget([
        'text' => $content,
    ]) ?>
</div>

<?php if (0) : ?>
<div class="section-subcribe">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-subcribe__title">Подпишитесь на наши новости</div>
                <div class="section-subcribe__hint">Рекомендации по лечению, новые препараты, истории успешного лечения и другое!</div>
            </div>
            <div class="col-md-6">
                <?= LeadForm::widget([
                    'key' => 'subscribe',
                    'mode' => LeadForm::MODE_INLINE,
                ]) ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?= $this->render('_footer') ?>
<?php $this->endBody() ?>
<?= Yii::$app->settings->get('script', 'default') ?>
</body>
</html>
<?php $this->endPage() ?>
