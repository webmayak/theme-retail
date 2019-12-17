<?php

use yii\helpers\Url;

?><a class="navicon" href="<?= Url::to(['/shop/order/cart']) ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
        <use xlink:href="/images/sprite.svg#icon-cart"/>
    </svg>
    <span class="sr-only">Корзина</span>
    <span id="minicart-count-value" class="menu-cart-count"><?=Yii::$app->getModule('shop')->cart->getCount() ?></span>
</a>
