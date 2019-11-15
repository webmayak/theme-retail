<?php

use yii\data\ActiveDataProvider;
use yii\web\View;
use yii\helpers\Url;
use yii\widgets\ListView;

if (!empty($category)) {
    $this->params['breadcrumbs'][] = ['label'=>'Новости о лечении гепатита и ВИЧ', 'url'=>Url::to(['/news'])];
    $this->title = $category->name;
} else {
    $this->title = 'Новости о лечении гепатита и ВИЧ';
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

<?= $this->render('@theme/views/_fast-consult') ?>
