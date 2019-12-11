<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/4/18
 * Time: 11:58 AM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\themes\retail\widgets\categoryList\CategoryList;
use frontend\widgets\twigRender\TwigRender;
use frontend\widgets\leads\LeadForm;
use frontend\widgets\videoList\VideoList;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

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
?><div class="product-layout row">
    <div class="<?php if (!$model->childrenActive) : ?>col-md-8<?php else: ?>col-md-12<?php endif; ?>">
        <?php if ($hasMedia) : ?>
            <div class="product-main-image">
                <img src="<?= $model->media->image(600, 400) ?>" alt="<?= Html::encode($model->name) ?>">
            </div>
        <?php endif; ?>
        <h1 class="title-home"><?= Yii::$app->seo->getH1() ?></h1>
        <?php if ($model->description) : ?>
        <div class="product-description">
        <?= TwigRender::widget([
            'text' => $model->description,
        ]) ?>
        </div>
        <?php endif; ?>
    </div>
    <?php if (!$model->childrenActive) : ?>
    <div class="col-md-4">
        <div class="product-sidebar">
            <div class="catalog-item__info">
                <div class="catalog-item__title">
                    <?= Html::encode($model->name) ?>
                </div>
                <div class="catalog-item__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <?php if ($announce = $model->present()->getAttributeValueByKey('announce')): ?>
                <div class="catalog-item__announce">
                    <?= nl2br($announce) ?>
                </div>
                <?php endif; ?>
                <div class="catalog-item__button">
                    <?= LeadForm::widget([
                        'key' => 'order',
                        'text' => 'Заказать',
                        'options' => [
                            'class' => 'btn btn-primary btn-buy btn-block btn-lg',
                            'href' => Url::to(['/leads/default/modal', 'key' => 'order', 'productId' => $model->id]),
                        ],
                    ]) ?>
                </div>
            </div>

            <?php if ($brands = $model->present()->getRelationCategoryByTypeKey('brand')) : ?>
            <div class="product-brand-info">
                <?php foreach ($brands as $brand): ?>
                    <div class="h3">О бренде <?= Html::encode($brand->name) ?></div>
                    <?php if ($brandAnnounce = $brand->present()->getAttributeValueByKey('brand-announce')): ?>
                    <div class="product-brand-info__announce"><?= $brandAnnounce ?> <a href="<?= $brand->present()->getUrl() ?>">подробнее &raquo;</a></div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            
            <?php if ($relatedProducts = $model->parent->getChildrenActive()->andWhere(['!=', 'id', $model->id])->all()): ?>
            <div class="product-related-products">
                <div class="h3">Похожие</div>
                <div class="list-group">
                <?php foreach ($relatedProducts as $relatedProduct): ?>
                    <a class="list-group-item" href="<?= $relatedProduct->present()->getUrl() ?>"><?= Html::encode($relatedProduct->name) ?></a>
                <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php if ($model->childrenActive) : ?>
    <div class="main-catalog__subset">
        <?= CategoryList::widget([
            'models' => $model->childrenActive,
            'itemView' => '@frontend/themes/retail/views/catalog/default/_view',
            'options' => [
                'class' => 'row',
            ],
            'itemOptions' => [
                'class' => 'col-md-6 col-lg-4',
            ],
        ]) ?>
    </div>
<?php endif; ?>

<?php if ($videos = $model->present()->getRelationCategoryByTypeKey('video')) : ?>
<div class="content-block content-block--products__video">
    <div class="h2">Видео</div>
    <?= VideoList::widget([
        'models' => $videos,
    ]) ?>
</div>
<?php endif; ?>
