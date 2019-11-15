<?php

use frontend\themes\retail\widgets\leads\getRecommendations\LeadGetRecommendations;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this View */
/* @var $model LeadGetRecommendations */
/* @var $key string */
$this->title = 'Получить рекомендации по лечению гепатита С';
?>
<?php $form = ActiveForm::begin([
    'id' => 'lead-call-me-form',
    'action' => ['/leads/default/save', 'key' => $key],
    'options' => [
        'class' => 'lead-form',
    ],
]) ?>
<?= $form->field($model, 'name')->textInput([
    'placeholder' => $model->getAttributeLabel('name'),
])->label(false); ?>
<?= $form->field($model, 'phone')->widget(MaskedInput::class, [
    'mask' => '+7 (999) 999-99-99',
    'options' => [
        'placeholder' => $model->getAttributeLabel('phone'),
        'class' => 'form-control',
    ],
])->label(false); ?>
<?= $form->field($model, 'email')->textInput([
    'placeholder' => $model->getAttributeLabel('email'),
])->label(false); ?>
<?= Html::submitButton(Html::tag('span', 'Получить рекомендации', [
    'class' => 'ladda-label',
]), [
    'class' => 'btn btn-primary btn-lg ladda-button',
    'data' => [
        'style' => 'zoom-in'
    ],
]); ?>
<?php ActiveForm::end(); ?>
