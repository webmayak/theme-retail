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
        'href' => Url::to([preg_replace('/\?.*$/', '', Yii::$app->request->url)], true),
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
        .products-list > .empty {
            margin-top: 20px;
        }
        .breadcrumb {
            margin-top: 20px;
            padding: 0;
            background: transparent;
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
        ul.all-categories {
            columns: 3;
            -webkit-columns: 3;
            -moz-columns: 3;
            list-style-position: inside;
            padding-left: 0;
        }
        ul.all-categories li {
            margin-top: 3px;
        }
        ul.all-categories ul {
            padding-left: 20px;
            margin: 6px 0;
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

<div class="section-subcribe">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="row align-items-center">
                    <div class="col-sm-6 text-center d-none d-sm-block">
                        <img src="/images/emblem.png" alt="">
                    </div>
                    <div class="col-sm-6">
                        <div class="section-subcribe__title">Подпишись на рассылку</div>
                        <div class="section-subcribe__hint">Будь в курсе всех наших новостей!</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?= LeadForm::widget([
                    'key' => 'subscribe',
                    'mode' => LeadForm::MODE_INLINE,
                ]) ?>
            </div>
        </div>
    </div>
</div>

<?= $this->render('_footer') ?>

<nav id="mmenu-nav">
    <ul>
        <?php
        $catalogIsActive = preg_match('/catalog/', Yii::$app->request->pathInfo);
        $brandsIsActive = preg_match('/^brands/', Yii::$app->request->pathInfo);
        ?>
        <li class="<?= $catalogIsActive ? 'active' : '' ?>">
            <a href="<?= Url::to(['/shop/catalog']) ?>">
                Все категории
            </a>
            <?php if (($catalogRoot = \common\modules\shop\models\ShopCategory::findOne(1)) && ($categories = $catalogRoot->getChildren()->andWhere(['status' => 1])->all())): ?>
                <ul>
                    <?php foreach ($categories as $category): ?>
                        <li>
                            <a href="<?=$category->present()->getUrl()?>"><?= $category->name ?></a>
                            <?php if ($lvl2cats = $category->getChildren()->andWhere(['status' => 1])->all()): ?>
                                <ul>
                                    <?php foreach ($lvl2cats as $lvl2cat): ?>
                                        <li>
                                            <a href="<?= $lvl2cat->present()->getUrl() ?>"><?= $lvl2cat->name ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach;?>
                </ul>
            <?php endif; ?>
        </li>
        <li class="<?= preg_match('/^payment-delivery$/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
            <a href="<?= Url::to(['/payment-delivery']) ?>">
                Оплата и доставка
            </a>
        </li>
        <li class="<?= preg_match('/^partnership/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
            <a href="<?= Url::to(['/partnership']) ?>">
                Партнерам
            </a>
        </li>
        <li class="<?= preg_match('/^for-customers/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
            <a href="<?= Url::to(['/for-customers']) ?>">
                Покупателям
            </a>
        </li>
        <li class="<?= preg_match('/^about$/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
            <a href="<?= Url::to(['/about']) ?>">
                О магазине
            </a>
        </li>
        <li class="<?= preg_match('/^contacts/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
            <a href="<?= Url::to(['/contacts']) ?>">
                Контакты
            </a>
        </li>
    </ul>
</nav>

<?php $this->endBody() ?>
<?= Yii::$app->settings->get('script', 'default') ?>
</body>
</html>
<?php $this->endPage() ?>
