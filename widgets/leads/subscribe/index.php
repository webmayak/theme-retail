<?php

use frontend\themes\retail\widgets\leads\subscribe\LeadSubscribe;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model LeadSubscribe */
/* @var $key string */
?>
<?php $form = ActiveForm::begin([
    'id' => 'lead-subscribe-form',
    'action' => ['/leads/default/save', 'key' => $key],
    'options' => [
        'class' => 'lead-form',
    ],
]) ?>
<div class="row">
    <div class="col-xs-8">
        <?= $form->field($model, 'email')->textInput([
            'placeholder' => 'Ваше E-mail',
        ])->label(false) ?>
    </div>
    <div class="col-xs-4">
        <?= Html::submitButton(Html::tag('span', 'Подписаться', [
            'class' => 'ladda-label',
        ]), [
            'class' => 'btn btn-primary btn-block ladda-button',
            'data' => [
                'style' => 'zoom-in'
            ],
        ]) ?>
    </div>
</div>
<?php ActiveForm::end(); ?>
