<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/4/18
 * Time: 11:58 AM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\widgets\categoryList\CategoryList;
use frontend\widgets\twigRender\TwigRender;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

$description = trim(html_entity_decode($model->description));
$description = trim(strip_tags($model->description));
$description = trim(str_replace('&nbsp;', '', $description));
$description = preg_replace('/\n+/', ' ', $description);
$description = preg_replace('/\s+/', ' ', $description);
$description = mb_substr($description, 0, 300, 'utf-8') . (mb_strlen($description, 'utf-8') > 300 ? '...' : '');

$title = "{$model->name} - ИНДИАВИР";

Yii::$app->opengraph->set([
    'title' => $title,
    'description' => $description,
    'image' => Url::base(true) . $model->media->image(500, 400, false),
]);

Yii::$app->seo->setTitle($title);
Yii::$app->seo->setDescription($description);

$this->params['breadcrumbs'] = [];
foreach ($model->parents as $parent) {
    if ($parent->depth > 0) {
        $this->params['breadcrumbs'][] = [
            'label' => $parent->name,
            'url' => $parent->present()->getUrl()
        ];
    }
}
$this->params['breadcrumbs'][] = $model->name;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $hasMedia bool */
?>
<div class="content-block">
    <h1 class="title-home"><?= Yii::$app->seo->getH1() ?></h1>
    <?php if ($model->description) : ?>
    <div class="category__body">
        <?php if ($hasMedia) : ?>
            <div class="image pull-right">
                <img src="<?= $model->media->image(375, 300, false) ?>" alt="<?= Html::encode($model->name) ?>">
            </div>
        <?php endif; ?>
        <?= TwigRender::widget([
            'text' => $model->description,
        ]) ?>
        <div class="clearfix"></div>
    </div>
    <?php endif; ?>
</div>

<?= $this->render('@theme/views/_fast-consult') ?>
