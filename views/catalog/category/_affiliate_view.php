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
?><div class="affiliate-item">
    <?php if ($model->media && $model->media->issetMedia()) : ?>
        <div class="affiliate-item__image">
            <?= Html::a(Html::img($model->media->image(400, 550, false), ['class' => 'img-responsive']), $model->present()->getUrl()) ?>
        </div>
    <?php endif; ?>
    <h3 class="affiliate-item__title">
        <a href="<?= $model->present()->getUrl() ?>">
            <?= $model->name ?>
        </a>
    </h3>
</div>
<?php if ($key == ($widget->dataProvider->totalCount-1)): ?>
    </div>
<div class="col-md-2 col-sm-4 col-xs-6">
    <div class="affiliate-item">
        <div class="affiliate-item__image">
            <a target="_blank" href="mailto:indiavirexpress@gmail.com?subject=Открыть филиал ИНДИАВИР"><img src="/images/open-affiliate.png" alt="Открыть филиал в вашем городе" class="img-responsive"/></a>
        </div>
    </div>
    <!-- не закрываем тег-->
<?php endif; ?>
