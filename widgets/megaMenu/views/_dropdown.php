<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/19/18
 * Time: 4:36 PM
 */

use common\modules\catalog\models\CatalogCategory;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $categories CatalogCategory[] */
?>
<div class="wsshoptabing wtsdepartmentmenu clearfix">
    <div class="wsshopwp clearfix">
        <ul class="wstabitem clearfix">
            <?php foreach ($categories as $rootCategory): ?>
            <?php $rootCategoryChildrens = $rootCategory->getChildren()->isInMenu()->isActive()->all(); ?>
                <li class="wsshoplink-active">
                    <a href="<?= $rootCategory->present()->getUrl() ?>">
                        <?= $rootCategory->name ?>
                        <?php if ($rootCategoryChildrens): ?>
                            <div class="icon"></div>
                        <?php endif; ?>
                    </a>
                    <div class="wstitemright clearfix wstitemrightactive">
                        <div class="container-fluid">
                            <div class="row">
                                <?php foreach ($rootCategoryChildrens as $childCategory): ?>
                                    <div class="col-md-4">
                                        <div class="wsmenu-category">
                                            <div class="wsmenu-category-title">
                                                <?= Html::a($childCategory->name, $childCategory->present()->getUrl()) ?>
                                            </div>
                                            <div class="wsmenu-category__list">
                                                <ul>
                                                    <?php foreach ($childCategory->getChildren()->isInMenu()->isActive()->all() as $category): ?>
                                                        <li>
                                                            <?= Html::a($category->name, $category->present()->getUrl()) ?>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
