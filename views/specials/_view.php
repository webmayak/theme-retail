<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 4:27 PM
 */

use pantera\content\models\ContentPage;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model ContentPage */

?><div class="specials-item__top">
    <div class="specials-item__title">
        <a href="<?= $model->getUrl() ?>">
            <?php
            if ($model->media && $model->media->issetMedia()) {
                $img = $model->media->image(370, 280, false);
                echo Html::img($img, [
                    'class' => 'content-item__image',
                ]);
            } ?>
            <?= $model->title ?>
        </a>
    </div>
    <div class="specials-item__buttons">
        <a class="btn btn-primary" href="<?= $model->getUrl() ?>">
            Подробнее <i class="fa fa-arrow-right"></i>
        </a>
    </div>
</div>
<div class="specials-item__bottom">
    <i class="fa fa-calendar"></i> <span class="specials-item__date-label">Дата публикации<br/><?= Yii::$app->formatter->asDate($model->created_at) ?></span>
</div>
