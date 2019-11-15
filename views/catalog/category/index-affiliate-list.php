<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/4/18
 * Time: 11:58 AM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\themes\retail\widgets\categoryList\CategoryList;
use frontend\widgets\portfolioSlider\PortfolioSlider;
use frontend\widgets\teamList\TeamList;
use frontend\widgets\twigRender\TwigRender;
use frontend\widgets\videoList\VideoList;
use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;
use yii\web\View;

$this->context->layout = '//contacts';

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
    <div class="category__body">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <?= TwigRender::widget([
                    'text' => $model->description,
                ]) ?>
            </div>
            <?php if ($hasMedia) : ?>
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="image">
                        <img src="<?= $model->media->image() ?>" alt="<?= Html::encode($model->name) ?>" class="img-responsive">
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php if ($model->childrenActive) : ?>
    <div class="content-block content-block--affiliates">
        <h2 class="affiliates-list__title">Наши филиалы</h2>
        <?= CategoryList::widget([
            'models' => $model->childrenActive,
            'itemView' => '_affiliate_view',
            'options' => ['class'=>'affiliates-list row'],
            'itemOptions' => ['class'=>'col-md-2 col-sm-4 col-xs-6'],
        ]) ?>
    </div>
<?php endif; ?>
