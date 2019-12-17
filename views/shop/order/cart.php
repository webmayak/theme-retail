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

?><main class="cart">
    <h1>Корзина</h1>
    <div class="table-responsive">
        <table class="cart__table cart-table table">
            <thead>
                <tr>
                    <td colspan="2">Товар</td>
                    <td>Кол-во</td>
                    <td>Цена</td>
                    <td>Сумма</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($items as $item): ?>
                <tr data-id="<?= $item->product_id ?>">
                    <td>
                        <img class="cart-table__item-img" src="https://via.placeholder.com/120">
                    </td>
                    <td>
                        <span class="cart-table__item-name">
                            <?= $item->title ?>
                        </span>
                    </td>
                    <td>
                        <input class="cart-table__item-quantity quantity-field" type="number" value="<?= $item->count ?>" min="1">
                    </td>
                    <td>
                        <span class="cart-table__item-price">
                            <?= $item->price ?> руб.
                        </span>
                    </td>
                    <td>
                        <span class="cart-table__item-sum">
                            <?= $item->getSum() ?> руб.
                        </span>
                    </td>
                    <td>
                        <button class="cart-table__item-delete" type="button">
                            <span class="sr-only">Удалить</span>
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="10" class="text-right">
                        <span class="cart__total">
                            Итого: <span class="cart__total-sum" id="order-cart-total-value"><?= $total ?></span> руб.
                        </span>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="text-right">
        <?= Html::a('Оформить заказ', '/shop/order/checkout', ['class' => 'btn btn-secondary btn-lg']) ?>
    </div>
</main>
