<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/4/18
 * Time: 11:58 AM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\widgets\teamList\TeamList;
use pantera\leads\widgets\form\LeadForm;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $hasMedia bool */
?>
<h1 class="title-home">
    <?= Yii::$app->seo->getH1() ?>
</h1>

<?= TeamList::widget([
    'category' => $model,
]) ?>
