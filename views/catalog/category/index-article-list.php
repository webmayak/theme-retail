<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/4/18
 * Time: 11:58 AM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\widgets\twigRender\TwigRender;
use frontend\themes\retail\widgets\categoryList\CategoryList;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $hasMedia bool */
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
?>
<div class="content-block">
    <h1 class="title-home"><?= Yii::$app->seo->getH1() ?></h1>
    <?php if ($model->description) : ?>
    <div class="category__body">
        <?php if ($hasMedia) : ?>
            <div class="image">
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

<?php if ($model->childrenActive) : ?>
    <div class="content-block content-block--children-items">
        <div class="articles">
            <?= CategoryList::widget([
                'models' => $model->childrenActive,
                'itemView' => '_article_view',
                'options' => [
                    'class' => 'row',
                ],
                'itemOptions' => function($model, $key, $index, $widget) {
                    switch ($key % 3) {
                        case 1:
                            $colClass = 'col-md-6';
                            break;
                        case 2:
                            $colClass = 'col-md-12';
                            break;
                        default:
                            $colClass = 'col-md-6';
                            break;
                    }
                    return ['class' => $colClass];
                },
            ]) ?>
        </div>
    </div>
<?php endif; ?>

<?= $this->render('@theme/views/_fast-consult') ?>
