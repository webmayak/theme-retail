<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/23/18
 * Time: 11:45 AM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\widgets\catalogCategoryTabList\CatalogCategoryTabList;
use frontend\widgets\similarPages\SimilarPages;
use frontend\widgets\twigRender\TwigRender;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
?>

<h1 class="title-home">
    <?= Yii::$app->seo->getH1() ?>
</h1>
<?= CatalogCategoryTabList::widget([
    'category' => $model,
]) ?>
<div class="editor-content editor-content__price">
    <?= TwigRender::widget([
        'text' => $model->description,
    ]) ?>
</div>
