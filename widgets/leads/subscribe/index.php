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
<div class="row no-gutters">
    <div class="col-xl-8 col-lg-7 col-sm-8">
        <?= $form->field($model, 'email')->textInput([
            'placeholder' => 'Введите ваш E-mail',
        ])->label(false) ?>
    </div>
    <div class="col-xl-4 col-lg-5 col-sm-4">
        <?= Html::submitButton(Html::tag('span', '<i class="fa fa-envelope-o mr-2"></i> Подписаться', [
            'class' => 'ladda-label',
        ]), [
            'class' => 'btn btn-lg btn-primary btn-block ladda-button',
            'data' => [
                'style' => 'zoom-in'
            ],
        ]) ?>
    </div>
</div>
<?php ActiveForm::end(); ?>
