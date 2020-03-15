<?php

use common\modules\shop\widgets\cart\changeInCart\ChangeInCartWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

$this->title = "Корзина";

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => ['/shop/catalog/index']];
$this->params['breadcrumbs'][] = $this->title;

/* @var $this View */
?><main class="cart">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(['id' => 'cart']) ?>
    <?php if ($items) : ?>
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
                    <tr class="cart-table__item" data-id="<?= $item->product_id ?>">
                        <td>
                            <img class="cart-table__item-img" style="height: auto; width: 50px" src="<?=$item->mainImage ? $item->mainImage : 'https://via.placeholder.com/50'?>" alt="<?= Html::encode($item->title) ?>">
                        </td>
                        <td>
                            <span class="cart-table__item-name">
                                <?= Html::encode($item->title) ?>
                            </span>
                        </td>
                        <td>
                            <input class="cart-table__quantity quantity-field" type="number" value="<?= $item->count ?>" min="1">
                        </td>
                        <td>
                            <span class="cart-table__item-price">
                                <?= $item->price ?>
                            </span>
                            руб.
                        </td>
                        <td>
                            <span class="cart-table__item-sum">
                                <?= $item->getSum() ?>
                            </span>
                            руб.
                        </td>
                        <td>
                            <span>
                                <?= ChangeInCartWidget::widget([
                                    'action' => 'delete',
                                    'model' => $item,
                                    'content' => '&times;',
                                    'options' => [
                                        'data-action' => 'cart-remove-product',
                                    ],
                                ]) ?>
                            </span>
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
    <?php else : ?>
        <p>Вы еще ничего не добавили в корзину, перейдите в <a href="<?= Url::to(['/shop/catalog/index']) ?>" data-pjax="0">каталог товаров</a></p>
    <?php endif; ?>
    <?php Pjax::end() ?>
</main>

