<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 1:43 PM
 */

use frontend\themes\retail\widgets\leads\review\LeadReview;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model LeadReview */
/* @var $key string */
?>
<?php $form = ActiveForm::begin([
    'id' => 'lead-review-form',
    'action' => ['/leads/default/save', 'key' => $key],
    'options' => [
        'class' => 'lead-form',
    ],
]) ?>
<div class="question">
    <div class="row">
        <div class="col-md-5">
            <div class="question__title hidden-sm hidden-xs">
                На Ваш вопрос ответит квалифицированный специалист с большим опытом работы.
            </div>
        </div>
        <div class="col-md-5 col-md-offset-2">
            <div class="question__form">
                <form>
                    <div class="form-group">
                        <?= $form->field($model, 'name')->textInput([
                            'placeholder' => 'Ваше Имя',
                        ])->label(false) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'location')->textInput([
                            'placeholder' => 'Ваша страна, город',
                        ])->label(false); ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'scheme')->textInput([
                            'placeholder' => 'Ваша схема лечения',
                        ])->label(false) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'comment')->textarea([
                            'rows' => 3,
                            'placeholder' => 'Ваш комментарий',
                        ])->label(false) ?>
                    </div>
                    <div class="form-group text-right">
                        <?= Html::submitButton(Html::tag('span', 'Оставить отзыв', [
                            'class' => 'ladda-label',
                        ]), [
                            'class' => 'btn btn-primary ladda-button',
                            'data' => [
                                'style' => 'zoom-in'
                            ],
                        ]) ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
