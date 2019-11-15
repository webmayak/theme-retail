<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/24/18
 * Time: 1:33 PM
 */

use frontend\widgets\leads\order\LeadOrder;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\MaskedInput;

/* @var $this View */
/* @var $model LeadOrder */
/* @var $key string */
$form = ActiveForm::begin([
    'id' => 'lead-payment-form',
    'action' => ['/leads/default/save', 'key' => $key],
    'options' => [
        'class' => 'lead-form lead-payment-form',
    ],
]);

echo Html::tag('div', 'Оплата по договору', [
    'class' => 'title-home title-home--sm title-home--without-line',
]);
echo Html::beginTag('div', [
    'class' => 'lead-payment-form__content',
]);
echo $form->field($model, 'name')->textInput([
    'placeholder' => $model->getAttributeLabel('name'),
])->label(false);

echo $form->field($model, 'phone')->widget(MaskedInput::class, [
    'mask' => '+7 (999) 999-99-99',
    'options' => [
        'placeholder' => $model->getAttributeLabel('phone'),
        'class' => 'form-control',
    ],
])->label(false);

echo $form->field($model, 'address')->textInput([
    'placeholder' => $model->getAttributeLabel('address'),
])->label(false);

echo $form->field($model, 'number')->textInput([
    'placeholder' => $model->getAttributeLabel('number'),
])->label(false);

echo $form->field($model, 'sum')->textInput([
    'placeholder' => $model->getAttributeLabel('sum'),
])->label(false);

$btn = Html::submitButton(Html::tag('span', 'ОПЛАТИТЬ', [
    'class' => 'ladda-label',
]), [
    'class' => 'btn btn-primary btn-lg btn-block ladda-button',
    'data' => [
        'style' => 'zoom-in'
    ],
]);
echo Html::tag('div', $btn, [
    'class' => 'form-group',
]);
echo Html::endTag('div');

ActiveForm::end();
