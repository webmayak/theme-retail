<?php

use yii\data\ActiveDataProvider;
use yii\web\View;
use yii\helpers\Url;
use yii\widgets\ListView;

if (!empty($category)) {
    $this->params['breadcrumbs'][] = ['label'=>'Новости', 'url'=>Url::to(['/news'])];
    $this->title = $category->name;
} else {
    $this->title = 'Новости';
}
$this->params['breadcrumbs'][] = $this->title;

/* @var $this View */
/* @var $dataProvider ActiveDataProvider */
?><div class="page-news">
    <h1><?= $this->title ?></h1>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false,
        'itemView' => '_view',
        'itemOptions' => [
            'class' => 'news-list__item media',
        ],
        'options' => [
            'class' => 'news-list',
        ],
    ]) ?>
</div>
