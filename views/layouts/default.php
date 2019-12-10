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
        header {
            border-bottom: 1px solid #f7f7f7;
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
        .row > .empty {
            padding: 0 15px;
        }
        .breadcrumb {
            margin-top: 20px;
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
    </style>
</head>
<body class="page-<?= $_SERVER['REQUEST_URI'] == '/' ? 'front' : str_replace('/', '-', trim($_SERVER['REQUEST_URI'], '/')) ?>">
<?php $this->beginBody() ?>
<?= $this->render('_header') ?>

<?php if (0) : ?>
<?= MegaMenu::widget() ?>
<?php endif; ?>

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
