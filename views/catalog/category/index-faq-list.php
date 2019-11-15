<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/4/18
 * Time: 11:58 AM
 */

use common\modules\catalog\models\CatalogCategory;
use pantera\leads\widgets\form\LeadForm;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $hasMedia bool */
?>
<h1 class="title-home">
    <?= Yii::$app->seo->getH1() ?>
</h1>
<div class="content-block content-block--without-padding-top content-block--gray">
    <div class="faq-page">
        <div class="panel-group" id="faq_category" role="tablist" aria-multiselectable="true">
            <?php if ($model->childrenActive) : ?>
            <?php foreach ($model->childrenActive as $category) : ?>
                <div class="faq-item">
                    <div class="faq-item__question">
                        <div class="faq-item__question-info">
                            <div class="faq-item__question-title">
                                Вопрос:
                            </div>
                            <div class="faq-item__question-text">
                                <?= $category->name ?>
                            </div>
                        </div>
                        <div class="faq-item__question-date">
                            Дата публикации<br/>вопроса:<br/>
                            <?= Yii::$app->formatter->asDate($category->created_at) ?>
                        </div>
                    </div>
                    <div class="faq-item__answer">
                        <div class="faq-item__answer-info">
                            <div class="faq-item__answer-title">
                                Ответ врача:
                            </div>
                            <div class="faq-item__answer-text">
                                <?= $category->description ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php else: ?>
                <div class="row">
                    <div class="empty">
                        Ничего не найдено.
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->render('@theme/views/_fast-consult') ?>
<br/>

<?= LeadForm::widget([
    'key' => 'question-row',
    'mode' => LeadForm::MODE_INLINE,
]) ?>
