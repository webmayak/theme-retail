<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/2/18
 * Time: 1:38 PM
 */

use common\modules\catalog\models\CatalogCategory;
use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
?>
<?php if ($model->media && $model->media->issetMedia()) : ?>
    <div class="category-item__image">
        <?= Html::a(Html::img($model->media->image(400, 400, false)), $model->present()->getUrl()) ?>
    </div>
<?php endif; ?>
<div class="category-item__content">
    <h2 class="category-item__title">
        <a href="<?= $model->present()->getUrl() ?>" class="category-item__title-link">
            <?= $model->name ?>
        </a>
    </h2>
    <?php if ($model->present()->getAttributesWithValue(['cena'])) : ?>
        <ul class="params category-item__params">
            <?php foreach ($model->present()->getAttributesWithValue(['cena']) as $attributeValue) : ?>
                <li class="params__item">
                    <b><?= $attributeValue->attributeModel->name ?>: </b>
                    <?= $attributeValue->value ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <div class="category-item__content-bottom">
        <?php if ($model->present()->getPrice()) : ?>
            <div class="price">
                ЦЕНА:
                <div class="price__value">
                    <?= $model->present()->getPrice() ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="category-item__actions">
            <a href="<?= $model->present()->getUrl() ?>" class="btn btn-primary btn--width-lg">
                Подробнее
            </a>
        </div>
    </div>
</div>
