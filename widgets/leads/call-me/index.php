<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/24/18
 * Time: 1:33 PM
 */

use pantera\leads\models\CallMe;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\MaskedInput;

/* @var $this View */
/* @var $model CallMe */
/* @var $key string */
$this->title = 'Заказать обратный звонок';

$form = ActiveForm::begin([
    'id' => 'lead-call-me-form',
    'action' => ['/leads/default/save', 'key' => $key],
    'options' => [
        'class' => 'lead-form',
    ],
]);

echo $form->field($model, 'name')->textInput([
    'placeholder' => 'Ваше имя',
]);

echo $form->field($model, 'phone')->widget(MaskedInput::class, [
    'mask' => '+7 (999) 999-99-99',
    'options' => [
        'placeholder' => '+7 (___) ___-__-__',
        'class' => 'form-control',
    ],
]);

echo Html::submitButton(Html::tag('span', 'Отправить', [
    'class' => 'ladda-label',
]), [
    'class' => 'btn btn-primary ladda-button',
    'data' => [
        'style' => 'zoom-in'
    ],
]);

ActiveForm::end();
