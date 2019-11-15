<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 11:00 AM
 */

use pantera\content\models\ContentPage;
use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model ContentPage */
$this->params['breadcrumbs'][] = $model->title;
?>
<h1 class="title-home">
    <?= Yii::$app->seo->getH1() ?>
</h1>
<?php if ($model->media && $model->media->issetMedia()) : ?>
    <?= Html::img($model->media->image()) ?>
<?php endif; ?>
<div class="editor-content editor-content__page">
	<?= $this->render('@theme/views/_price') ?>
	<?= $this->render('@theme/views/_notice') ?>
	<?= $this->render('@theme/views/_price') ?>
	<?= $this->render('@theme/views/_fast-consult') ?>
	<?= $model->body ?>
</div>
