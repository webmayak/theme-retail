<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/24/18
 * Time: 10:13 AM
 */

use frontend\widgets\leads\contact\LeadContact;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this View */
/* @var $model LeadContact */
/* @var $key string */
?>
<?php $form = ActiveForm::begin([
    'id' => 'lead-call-me-form',
    'action' => ['/leads/default/save', 'key' => $key],
    'options' => [
        'class' => 'form-contact lead-form',
    ],
]) ?>
<div class="title-forma">
    НАПИШИТЕ НАМ
</div>
<div class="form-contact__form">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <?= $form->field($model, 'firstName')->textInput([
                    'placeholder' => $model->getAttributeLabel('firstName'),
                ])->label(false); ?>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <?= $form->field($model, 'lastName')->textInput([
                    'placeholder' => $model->getAttributeLabel('lastName'),
                ])->label(false); ?>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <?= $form->field($model, 'phone')->widget(MaskedInput::class, [
                    'mask' => '+7 (999) 999-99-99',
                    'options' => [
                        'placeholder' => $model->getAttributeLabel('phone'),
                        'class' => 'form-control',
                    ],
                ])->label(false); ?>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <?= $form->field($model, 'email')->textInput([
                    'type' => 'email',
                    'placeholder' => $model->getAttributeLabel('email'),
                ])->label(false); ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'comment')->textarea([
            'rows' => 5,
            'placeholder' => 'Ваш комментарий',
        ])->label(false); ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton(Html::tag('span', 'ОТПРАВИТЬ ПИСЬМО', [
            'class' => 'ladda-label',
        ]), [
            'class' => 'btn btn-primary btn-lg ladda-button',
            'data' => [
                'style' => 'zoom-in'
            ],
        ]); ?>
    </div>
</div>
<?php ActiveForm::end(); ?>
