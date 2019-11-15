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

$body = trim(strip_tags($model->body));
$body = trim(str_replace('&nbsp;', '', $body));

/* @var $this View */
/* @var $model ContentPage */
?><div class="media">
  <div class="media-left">
    <a href="<?= $model->getUrl() ?>">
      <?php
        if ($model->media && $model->media->issetMedia()) {
            $img = $model->media->image(150, 150, false);
            echo Html::img($img, [
                'class' => 'media-object img-thumbnail',
            ]);
        } ?>
    </a>
  </div>
  <div class="media-body">
    <h4 class="news-list__item-title media-heading"><a href="<?= $model->getUrl() ?>"><?= Html::encode($model->title) ?></a></h4>
    <div class="news-list__item-date small"><?= Yii::$app->formatter->asDate($model->created_at) ?></div>
    <div class="news-list__item-body"><?= mb_substr($body, 0, 300, 'utf-8') . (mb_strlen($body, 'utf-8') > 300 ? '...' : '') ?> <a href="<?= $model->getUrl() ?>">подробнее »</a></div>
    <div class="news-list__item-tags"><a href="/news/<?= str_replace('news-', '', $model->type->key) ?>"><i class="fa fa-tag"></i><?= $model->type->name ?></a></div>
  </div>
</div>
