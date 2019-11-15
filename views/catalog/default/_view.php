<?php

use common\modules\catalog\models\CatalogCategory;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $index integer */

$hasImage = $model->media && $model->media->issetMedia();
?>
<div class="catalog-item<?= $hasImage ? ' with-image' : ' no-image' ?>">
    <?php if ($hasImage) : ?>
    <div class="catalog-item__image">
        <a href="<?= $model->present()->getUrl() ?>"><?= Html::img($model->media->image(340, 276), ['alt'=>$model->name]); ?></a>
    </div>
    <?php endif; ?>
    <?= Yii::$app->controller->renderPartial('@frontend/themes/retail/views/catalog/default/_view_inner', ['model' => $model]) ?>
</div>
