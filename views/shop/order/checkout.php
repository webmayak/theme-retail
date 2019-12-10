<?php
/**
 * @var \common\modules\shop\components\order\OrderFormInterface $model
 * @var \common\modules\shop\components\cart\CartObjectItem[] $items
 * @var \common\modules\shop\components\order\OrderFormConstructor $constructor
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

$this->title = "Оформление заказа";

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => '/shop/catalog'];
$this->params['breadcrumbs'][] = ['label' => 'Корзина', 'url' => '/shop/order/cart'];
$this->params['breadcrumbs'][] = $this->title;

?><style>
    .radio-block-label {
        display: block;
    }
</style>

<h1><?= Html::encode($this->title) ?></h1>

<?php Pjax::begin() ?>
    <?php $form = ActiveForm::begin([
        'options' => [
            'data' => [
                'pjax' => 1
            ]
        ]
    ]); ?>
    <hr/>
    <h2>Способ доставки</h2>
    <?php foreach ($constructor->getDeliveryMethods() as $deliveryMethod):?>
        <?=$this->render('_delivery_view', [
            'model' => $model,
            'deliveryMethod' => $deliveryMethod
        ]) ?>
    <?php endforeach;?>

    <hr/>

    <h2>Способ оплаты</h2>
    <?php foreach ($constructor->getPaymentMethods() as $paymentMethod): ?>
        <?=$this->render('_payment_view', [
            'model' => $model,
            'paymentMethod' => $paymentMethod
        ]) ?>
    <?php endforeach;?>

    <hr/>
    <h2>Информация о покупателе</h2>
    <div>
        <?php foreach ($constructor->getTextFields() as $textField):?>
            <?= $form->field($model, $textField->name) ?>
        <?php endforeach;?>
    </div>
    <?= Html::submitButton('Собрать', [
        'name' => 'action',
        'value' => 'change',
        'id' => 'rebuild-form-button',
        'style' => 'display:none'
    ]) ?>

    <?= Html::submitButton('Сохранить', [
        'name' => 'action',
        'value' => 'save',
        'data' => [
            'pjax' => 0
        ]
    ]) ?>
    <?php ActiveForm::end() ?>
<?php Pjax::end() ?>
