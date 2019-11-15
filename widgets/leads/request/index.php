<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 1:43 PM
 */

use frontend\widgets\leads\request\LeadRequest;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this View */
/* @var $model LeadRequest */
/* @var $key string */
?>
<div class="contact-form">
    <?php $form = ActiveForm::begin([
        'id' => 'lead-request-form',
        'action' => ['/leads/default/save', 'key' => $key],
        'options' => [
            'class' => 'form-home lead-form',
        ],
    ]) ?>
    <div class="title-forma">Заполните короткую форму</div>
    <div class="form-home__announce">Менеджер свяжется с Вами в ближайшее время</div>
    <div class="form-home__form">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'name')->textInput([
                        'placeholder' => 'Имя',
                        'class' => 'form-control',
                    ])->label('Ваше имя') ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'phone')->widget(MaskedInput::class, [
                        'mask' => '+7 (999) 999-99-99',
                        'options' => [
                            'placeholder' => 'Ваш номер телефона',
                            'class' => 'form-control',
                        ],
                    ])->label('Ваш телефон') ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <?= Html::submitButton(Html::tag('span', 'Оставить заявку →', [
                'class' => 'ladda-label',
            ]), [
                'class' => 'btn btn-success ladda-button',
                'data' => [
                    'style' => 'zoom-in'
                ],
            ]) ?>
        </div>
        <div class="form-check">
          <input type="checkbox" class="sr-only" id="acception" checked>
          <label class="form-check-label" for="acception">Даю свое согласие на обработку персональных данных</label>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
