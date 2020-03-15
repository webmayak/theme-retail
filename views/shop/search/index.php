<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use frontend\themes\retail\widgets\shopProducts\ProductsList;

$defaultTitle = 'Поиск по сайту';
$query = Yii::$app->request->get('q');

$this->title = $query ? '"' . $query . '" - результаты поиска' : $defaultTitle;
$this->params['breadcrumbs'][] = $defaultTitle;

/* @var $this View */
?>

<h1><?= Html::encode($this->title) ?></h1>

<?= ProductsList::widget([
    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'col-lg-3 col-md-4 col-sm-6'],
]) ?>
