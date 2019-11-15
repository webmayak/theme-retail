<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/24/18
 * Time: 1:33 PM
 */

use frontend\widgets\leads\question\LeadQuestion;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\MaskedInput;

/* @var $this View */
/* @var $key string */
/* @var $model LeadQuestion */
$this->title = 'ЗАПИСАТЬСЯ ONLINE';

$form = ActiveForm::begin([
    'id' => 'lead-question-form',
    'action' => ['/leads/default/save', 'key' => $key],
    'options' => [
        'class' => 'lead-form',
    ],
]);

echo $form->field($model, 'name')->textInput([
    'placeholder' => 'Ваше имя',
])->label(false);

echo $form->field($model, 'phone')->widget(MaskedInput::class, [
    'mask' => '+7 (999) 999-99-99',
    'options' => [
        'placeholder' => 'Ваш номер телефона',
        'class' => 'form-control',
    ],
])->label(false);

echo $form->field($model, 'email')->textInput([
    'placeholder' => 'Ваш E-mail',
])->label(false);

echo $form->field($model, 'question')->textarea([
    'rows' => 5,
    'placeholder' => 'Ваш комментарий',
])->label(false);

echo Html::submitButton(Html::tag('span', 'Отправить', [
    'class' => 'ladda-label',
]), [
    'class' => 'btn btn-primary ladda-button',
    'data' => [
        'style' => 'zoom-in'
    ],
]);

ActiveForm::end();
