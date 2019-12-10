<?php
/**
 * @var \common\modules\shop\components\order\OrderFormInterface $model
 * @var \common\modules\shop\components\cart\CartObjectItem[] $items
 * @var \common\modules\shop\components\order\OrderFormConstructor $constructor
 */

use yii\helpers\Html;

$this->title = "Корзина";

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => '/shop/catalog'];
$this->params['breadcrumbs'][] = $this->title;

?><h1>Корзина</h1>

<br/>

<table class="table">
    <theader>
        <tr>
            <td></td>
            <td>Товар</td>
            <td>Кол-во</td>
            <td>Цена</td>
            <td>Сумма</td>
            <td></td>
        </tr>
    </theader>
    <tbody>
    <?php foreach ($items as $item): ?>
        <tr data-id="<?= $item->product_id ?>">
            <td>
                <img src="<?= $item->mainImage ?>">
            </td>
            <td>
                <?= $item->title ?>
            </td>
            <td>
                - <span class="order-cart-count"><?= $item->count ?></span> +
            </td>
            <td>
                <?= $item->price ?> руб.
            </td>
            <td>
                <span class="order-cart-sum">
                    <?= $item->getSum() ?> руб.
                </span>
            </td>
            <td>
                &times;
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    <tfooter>
        <tr>
            <td colspan="10" class="text-right">
                Итого: <span id="order-cart-total-value"><?= $total ?></span> руб.
            </td>
        </tr>
    </tfooter>
</table>

<div class="text-right">
    <?= Html::a('Оформить заказ', '/shop/order/checkout', ['class' => 'btn btn-primary btn-lg']) ?>
</div>
