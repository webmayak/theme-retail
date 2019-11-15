<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 3:45 PM
 */

use pantera\content\models\ContentPage;
use yii\web\View;
use pantera\leads\widgets\form\LeadForm;

/* @var $this View */
/* @var $model ContentPage */
$this->params['breadcrumbs'][] = ['label' => 'Акции', 'url' => ['/specials/index']];
$this->params['breadcrumbs'][] = $model->title;
?>
<h1 class="title-home"><?= Yii::$app->seo->getH1() ?></h1>
<div class="content-block">
    <?php if ($model->media && $model->media->issetMedia()) : ?>
        <div class="image image--stock">
            <img src="<?= $model->media->image(400, 400, false) ?>">
        </div>
    <?php endif; ?>
    <?php if ($model->body) : ?>
    <div class="stock__description editor-content">
        <?= $model->body ?>
    </div>
    <?php endif; ?>
    <div class="clearfix"></div>
</div>
<br/>
<?= LeadForm::widget([
    'key' => 'question-row',
    'mode' => LeadForm::MODE_INLINE,
]) ?>
<?= $this->render('@theme/views/_fast-consult') ?>
