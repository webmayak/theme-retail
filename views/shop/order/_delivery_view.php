<?php
/**
 * @var $model \common\modules\shop\components\order\OrderFormInterface
 * @var $deliveryMethod \common\modules\shop\models\ShopShippingMethod
 */
?>
<label class="radio-block-label">
    <input
        <?= ($deliveryMethod->id == $model->getCurrentDeliveryMethodId() ? "checked" : "") ?>
        type="radio"
        name="<?=$model->formName()?>[deliveryMethodId]"
        value="<?= $deliveryMethod->id ?>"
        class="radio-block delivery-mode-selector"
        onchange="$('#rebuild-form-button').click()"
    >
    <?= $deliveryMethod->name ?>
    <?= $deliveryMethod->comment ?>
</label>
