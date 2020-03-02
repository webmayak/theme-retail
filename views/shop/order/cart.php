<?php

use common\modules\shop\widgets\cart\changeInCart\ChangeInCartWidget;
use yii\helpers\Html;
use yii\widgets\Pjax;

$this->title = "Корзина";

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => '/shop/catalog'];
$this->params['breadcrumbs'][] = $this->title;

/**
 * @var \common\modules\shop\components\order\OrderFormInterface $model
 * @var \common\modules\shop\components\cart\CartObjectItem[] $items
 * @var \common\modules\shop\components\order\OrderFormConstructor $constructor
 */
?>

<?php Pjax::begin(['id' => 'cart']) ?>
<main class="cart">
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
                <tr class="cart-table__item" data-id="<?= $item->product_id ?>">
                    <td>
                        <img class="cart-table__item-img" style="height: auto; width: 50px" src="<?=$item->mainImage ? $item->mainImage : 'https://via.placeholder.com/50'?>" alt="<?= Html::encode($item->title) ?>">
                    </td>
                    <td>
                        <span class="cart-table__item-name">
                            <?= $item->title ?>
                        </span>
                    </td>
                    <td style="display: flex; padding-top: 30px;">
                    <?= ChangeInCartWidget::widget([
                        'htmlOptions' => ['class' => 'cart-table__item-quantity quantity-field button-minus'],
                        'model' => $item,
                        'content' => '-',
                        'action' => 'count-minus'
                    ]) ?>
                    <span class="cart-table__item-count" style="padding: 3px 15px 0;">
                        <?= $item->count ?>
                    </span>
                    <?=\common\modules\shop\widgets\cart\changeInCart\ChangeInCartWidget::widget([
                        'htmlOptions' => ['class' => 'cart-table__item-quantity quantity-field button-plus'],
                        'model' => $item,
                        'content' => '+',
                        'action' => 'count-plus'
                    ]) ?>
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
                            <?=\common\modules\shop\widgets\cart\changeInCart\ChangeInCartWidget::widget([
                                'htmlOptions' => ['class' => 'cart-table__item-quantity quantity-field button-delete'],
                                'model' => $item,
                                'content' => '',
                                'action' => 'delete',
                                'htmlOptions' => ['class' => 'cart-table__item-delete']
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
</main>
<?php Pjax::end() ?>

