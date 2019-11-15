<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 4:03 PM
 */

use common\modules\catalog\models\CatalogCategory;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
$attribute = $model->present()->getAttributeValueByKeyAsModel('link');
$hasVideo = (bool)$attribute;
?>
<a <?= $hasVideo ? 'href="' . $attribute->value . '" data-fancybox' : '' ?>>
    <div class="item__image-holder <?= $hasVideo ? 'item__image-holder--video' : '' ?>">
        <?php
        $img = $hasVideo ? $attribute->present()->getVideoPreview() : '/images/stub.png';
        if ($model->media && $model->media->issetMedia()) {
            $img = $model->media->image(370, 280, false);
        }
        echo Html::img($img, [
            'class' => 'content-item__image',
        ])
        ?>
    </div>
    <h4 class="content-item__title">
        <?= $model->name ?>
    </h4>
</a>
