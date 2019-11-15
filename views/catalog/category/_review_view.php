<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 5:16 PM
 */

use pantera\content\models\ContentPage;
use yii\web\View;
use yii\helpers\Html;

// получаем файлы картинок и аудио текущего отзыва
$images = [];
$audios = [];
foreach ($model->media as $media) {
	if (!$media->issetMedia()) {
		continue;
	}
	if (preg_match('/image/', $media->type)) {
		$images[] = $media;
	}
	if (preg_match('/audio/', $media->type)) {
		$audios[] = $media;
	}
}

/* @var $this View */
/* @var $model ContentPage */
?><div class="review-item__left">
	<div class="review-item__author">
		<?= Html::encode($model->name) ?>
	</div>
	<div class="review-item__rating">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
	</div>
	<div class="review-item__date">
		Оставлен
		<?= Yii::$app->formatter->asDate($model->created_at) ?>
	</div>
</div>
<div class="review-item__right">
	<?php if (trim(strip_tags($model->description))): ?>
	<div class="review-item__text">
		<?= $model->description ?>
	</div>
	<?php endif; ?>
	<?php if ($images || $audios) : ?>
	<div class="review-item__files">
		<?php if ($images) : ?>
			<div class="review-item__images">
			<?php foreach ($images as $image) : ?>
			<div class="review-item__image-item">
				<a href="<?= $image->image() ?>" data-fancybox="reviews">
					<img class="img-thumbnail" src="<?= $image->image(200, 120) ?>" alt="Отзыв - <?= Html::encode($model->name) ?>" />
				</a>
			</div>
			<?php endforeach; ?>
			</div>
		<?php endif; ?>
		<?php if ($audios) : ?>
			<div class="review-item__audios">
				<?php foreach ($audios as $audio) : ?>
				<div class="review-item__audio-item">
					<div class="review-item__audio-left">
						<div class="review-item__label"><i class="fa fa-volume-up"></i> Аудио - отзыв</div>
						<div class="review-item__button"><a class="btn btn-primary btn-sm" onclick="document.getElementById('audio-<?= $audio->id ?>').play();">Прослушать &rarr;</a></div>
					</div>
					<div class="review-item__audio-right">
						<audio controls id="audio-<?= $audio->id ?>">
						  <source src="<?= $audio->url ?>" type="<?= $audio->type ?>">
						  Ваш браузер не поддерживает вопроизведение аудиофайлов этого формата.
						</audio>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
	<?php endif; ?>
</div>
