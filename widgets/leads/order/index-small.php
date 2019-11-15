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
$form = ActiveForm::begin([
    'id' => 'lead-call-me-form',
    'action' => ['/leads/default/save', 'key' => $key],
    'options' => [
        'class' => 'lead-form',
    ],
    'fieldConfig' => [
        'options' => [
            'class' => '',
        ],
    ],
]);
?>
<div class="title-home request-form__title-home">
    Отправить заявку для детального расчета
</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="request-form__body">
            <?= $form->field($model, 'name')->textInput([
                'placeholder' => 'Ваше имя',
            ])->label(false) ?>
            <?= $form->field($model, 'phone')->widget(MaskedInput::class, [
                'mask' => '+7 (999) 999-99-99',
                'options' => [
                    'placeholder' => '+7 (___) ___-__-__',
                    'class' => 'form-control',
                ],
            ])->label(false) ?>
            <?= Html::activeHiddenInput($model, 'detail') ?>
            <?= Html::submitButton(Html::tag('span', 'ОТПРАВИТЬ ЗАЯВКУ', [
                'class' => 'ladda-label',
            ]), [
                'class' => 'btn btn-primary btn-lg ladda-button',
                'data' => [
                    'style' => 'zoom-in'
                ],
            ]) ?>
        </div>
        <div class="text-center text-primary">
            Наш менеджер произведёт окончательнный расчёт стоимости под ключ и свяжется с Вами в ближайшее время
        </div>
    </div>
</div>
<?php ActiveForm::end() ?>

