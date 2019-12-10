<?php
/**
 * @var $model \common\modules\shop\components\order\OrderFormInterface
 * @var $paymentMethod \common\modules\shop\models\ShopPaymentMethod
 */
?>

<label class="radio-block-label">
    <input id="pay-<?= $paymentMethod->id ?>" <?= $paymentMethod->id == $model->getCurrentPaymentMethodId() ? 'checked' : '' ?>
           type="radio"
           name="<?=$model->formName()?>[paymentMethodId]"
           value="<?= $paymentMethod->id ?>"
           class="radio-block"
           onchange="$('#rebuild-form-button').click()"
    >
    <?= $paymentMethod->name ?>
    <?= $paymentMethod->comment ?>
</label>
