<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 11:00 AM
 */

use pantera\content\models\ContentPage;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

$body = trim(html_entity_decode($model->body));
$body = trim(strip_tags($model->body));
$body = trim(str_replace('&nbsp;', '', $body));

$title = "{$model->title} - ИНДИАВИР";
$description = mb_substr($body, 0, 300, 'utf-8') . (mb_strlen($body, 'utf-8') > 300 ? '...' : '');

Yii::$app->opengraph->set([
	'title' => $title,
	'description' => $description,
	'image' => Url::base(true) . $model->media->image(500, 400, false),
]);

Yii::$app->seo->setTitle($title);
Yii::$app->seo->setDescription($description);

$this->params['breadcrumbs'][] = ['label'=>'Новости о лечении гепатита и ВИЧ', 'url'=>Url::to(['/news'])];
$this->params['breadcrumbs'][] = ['label'=>$model->type->name, 'url'=>Url::to(['/news/' . str_replace('news-', '', $model->type->key)])];
$this->params['breadcrumbs'][] = $model->title;

/* @var $this View */
/* @var $model ContentPage */
?><div class="news-page">
	<h1 class="title-home">
	    <?= Yii::$app->seo->getH1() ?>
	</h1>
	<div class="news-page__summary">
		<div class="news-page__date"><?= Yii::$app->formatter->asDate($model->created_at) ?></div>
		<div class="news-page__tags"><a href="/news/<?= str_replace('news-', '', $model->type->key) ?>"><i class="fa fa-tag"></i><?= $model->type->name ?></a></div>
		<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
		<script src="https://yastatic.net/share2/share.js"></script>
		<div class="news-page__share">
			<div class="news-page__share-label">Рассказать друзьям</div>
			<div class="news-page__share-buttons">
				<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,twitter,whatsapp,telegram"></div>
			</div>
		</div>
	</div>
	<?php if ($model->media && $model->media->issetMedia()) : ?>
		<div class="news-page__image">
		    <?= Html::img($model->media->image(500, 400, false), ['class' => 'img-thumbnail']) ?>
		</div>
	<?php endif; ?>
	<?php if ($model->body) : ?>
	    <div class="news-page__body editor-content editor-content__page">
	        <?= $model->body ?>
	    </div>
	<?php endif; ?>
</div>

<?= $this->render('@theme/views/_fast-consult') ?>
