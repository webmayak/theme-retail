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
?><a href="<?= $model->present()->getUrl() ?>" class="article-item"<?php if ($model->media && $model->media->issetMedia()) : ?> style="background: url(<?= $model->media->image() ?>)"<?php endif; ?>>   
    <div class="article-item__content">
        <h2 class="article-item__title">
            <?= $model->name ?>
        </h2>
        <ul class="article-item__params">
            <?php foreach ($model->present()->getAttributesWithValue(['cena']) as $attributeValue) : ?>
                <li class="params__item">
                    <?= mb_substr($attributeValue->value, 0, 280, 'utf-8') . (mb_strlen($attributeValue->value, 'utf-8') > 280 ? '...' : '') ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="article-item__buttons">
            <span class="btn btn-primary">
                Подробнее <i class="fa fa-arrow-right"></i>
            </span>
        </div>
    </div>
</a>
