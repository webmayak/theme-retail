<?php

use frontend\widgets\leads\question\LeadQuestion;
use yii\bootstrap\ActiveForm;
use yii\web\View;
use yii\widgets\MaskedInput;

/* @var $this View */
/* @var $key string */
/* @var $model LeadQuestion */
?>
<?php $form = ActiveForm::begin([
    'id' => 'lead-question-form',
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
                            'placeholder' => 'Ваше имя',
                        ])->label(false) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'phone')->widget(MaskedInput::class, [
                            'mask' => '+7 (999) 999-99-99',
                            'options' => [
                                'placeholder' => 'Ваш телефон',
                                'class' => 'form-control',
                            ],
                        ])->label(false); ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'email')->textInput([
                            'placeholder' => 'Ваш E-mail',
                        ])->label(false) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'question')->textarea([
                            'rows' => 3,
                            'placeholder' => 'Напишите здесь название и фирму производителя интересующих вас препаратов',
                        ])->label(false) ?>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" class="btn btn-primary" value="Отправить"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end() ?>
