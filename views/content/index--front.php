<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 3:45 PM
 */

use common\modules\catalog\models\CatalogCategory;
use pantera\content\models\ContentPage;
use pantera\content\widgets\block\Block;
use pantera\content\widgets\slider\Slider;
use frontend\themes\retail\widgets\mainCatalog\MainCatalog;
use pantera\leads\widgets\form\LeadForm;
use yii\helpers\ArrayHelper;
use yii\web\View;

$this->context->layout = '//front';

/* @var $this View */
/* @var $model ContentPage */

?>
<div class="container">
    <div class="row">
        <div class="col-auto d-none d-lg-block">
            <?= $this->render('@theme/views/_catalog-menu') ?>
        </div>
        <div class="col-auto">
            <div class="content">
                <div class="slider">
                    <?= Slider::widget([
                        'pluginOptions' => [
                            'dots' => false,
                            'autoplay' => true,
                            'animateIn' => false,
                            'animateOut' => false,
                            'autoplayHoverPause' => true,
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popular-products mt-5">
    <div class="container">
        <h2>Популярные товары</h2>
        <div class="popular-products__carousel owl-carousel">
            <div class="popular-products__item popular-product">
                <a href="#" class="popular-product__img-wrap">
                    <img src="/images/popular-product-1.png" alt="">
                </a>
                <div class="popular-product__bottom">
                    <a class="popular-product__title" href="#">Диод 1N4007 DO-201D</a>
                    <button type="submit" class="popular-product__to-cart btn btn-lg btn-primary">В корзину</button>
                </div>
                <button class="popular-product__to-fav" type="button">
                    <i class="fa fa-heart-o"></i>
                </button>
            </div>
            <div class="popular-products__item popular-product">
                <a href="#" class="popular-product__img-wrap">
                    <img src="/images/popular-product-1.png" alt="">
                </a>
                <div class="popular-product__bottom">
                    <a class="popular-product__title" href="#">Диод 1N4007 DO-201D</a>
                    <button type="submit" class="popular-product__to-cart btn btn-lg btn-primary">В корзину</button>
                </div>
                <button class="popular-product__to-fav" type="button">
                    <i class="fa fa-heart-o"></i>
                </button>
            </div>
            <div class="popular-products__item popular-product">
                <a href="#" class="popular-product__img-wrap">
                    <img src="/images/popular-product-1.png" alt="">
                </a>
                <div class="popular-product__bottom">
                    <a class="popular-product__title" href="#">Диод 1N4007 DO-201D</a>
                    <button type="submit" class="popular-product__to-cart btn btn-lg btn-primary">В корзину</button>
                </div>
                <button class="popular-product__to-fav" type="button">
                    <i class="fa fa-heart-o"></i>
                </button>
            </div>
            <div class="popular-products__item popular-product">
                <a href="#" class="popular-product__img-wrap">
                    <img src="/images/popular-product-1.png" alt="">
                </a>
                <div class="popular-product__bottom">
                    <a class="popular-product__title" href="#">Диод 1N4007 DO-201D</a>
                    <button type="submit" class="popular-product__to-cart btn btn-lg btn-primary">В корзину</button>
                </div>
                <button class="popular-product__to-fav" type="button">
                    <i class="fa fa-heart-o"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<?php if ($model->body || $model->seo->h1): ?>
    <div class="content-block content-block--frontpage-content">
        <div class="container">
            <?php if ($model->seo->h1) : ?>
                <h1 class="title-home">
                    <?= $model->seo->h1 ?>
                </h1>
            <?php endif; ?>
            <?php if ($model->body) : ?>
                <div class="editor-content">
                    <?= $model->body ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
