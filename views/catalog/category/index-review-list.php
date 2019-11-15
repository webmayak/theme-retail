<?php

use kop\y2sp\ScrollPager;
use pantera\leads\widgets\form\LeadForm;
use yii\data\ArrayDataProvider;
use yii\web\View;
use yii\widgets\ListView;
use yii\web\JsExpression;

/* @var $this View */
/* @var $dataProvider ActiveDataProvider */
$this->title = 'Отзывы наших клиентов';
$this->params['breadcrumbs'][] = $this->title;

?><h1 class="title-home"><?= Yii::$app->seo->getH1() ?></h1>

<?= ListView::widget([
    'dataProvider' =>  new ArrayDataProvider([
        'allModels' => $model->childrenActive,
    ]),
    'summary' => false,
    'itemView' => '_review_view',
    'options' => [
        'class' => 'reviews',
    ],
    'itemOptions' => [
        'class' => 'review-item',
    ],
    // 'pager' => [
    //     'class' => ScrollPager::class,
    //     'item' => '.reviews',
    //     'triggerText' => 'ПОКАЗАТЬ ЕЩЕ',
    //     'noneLeftText' => '',
    //     'enabledExtensions' => [
    //         ScrollPager::EXTENSION_TRIGGER,
    //         ScrollPager::EXTENSION_SPINNER,
    //         ScrollPager::EXTENSION_NONE_LEFT,
    //         ScrollPager::EXTENSION_PAGING,
    //     ],
    //     'triggerTemplate' => '<div class="ias-trigger" style="text-align: center; cursor: pointer;">
    //                             <a class="btn btn-primary btn-lg">{text}</a>
    //                         </div>',
    //     'eventOnRendered' => new JsExpression('function(){initReviewReadMore();}'),
    // ]
]) ?>
<section class="review-form-wrapper">
<?= LeadForm::widget([
    'mode' => LeadForm::MODE_INLINE,
    'key' => 'review',
]) ?>
</section>
