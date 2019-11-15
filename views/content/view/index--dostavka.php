<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 11:00 AM
 */

use pantera\content\models\ContentPage;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model ContentPage */
$this->params['breadcrumbs'][] = $model->title;
?>
<h1 class="title-home">
    <?= Yii::$app->seo->getH1() ?>
</h1>
<?php if ($model->media && $model->media->issetMedia()) : ?>
    <?= Html::img($model->media->image()) ?>
<?php endif; ?>
<div class="editor-content editor-content__page">
	<div class="text-center">
		<img src="/images/map-dostavka.svg" alt="Доставка препаратов от гепатита С" style="max-width: 100%;"/>
	</div>
	<style>
		#trackgo_widget_wrapper {
			background: #f7f7f7;
			padding: 60px 0 50px 0;
			margin: 30px 0;
		}
		#trackgo_widget {
			margin: 0px auto;
		}
	</style>
	<div id="trackgo_widget_wrapper">
		<div id="trackgo_widget_container"></div>
	</div>
	<script> (function(e,ck,go, params){if(e.getElementById(go))return; window.___tgw = params; var i=e.getElementsByTagName(ck)[0],r=e.createElement(ck); r.id=go;r.src="//trackgo.ru/assets/js/widget.js"; i.parentNode.insertBefore(r,i)}) (document,"script","trackgo-widget-js", {
	  "el": "#trackgo_widget_container",
	  "language": "ru",
	  "api_key": "elC8iYtYNg2eu7Mg"
	}); </script>
	<?= $this->render('@theme/views/_fast-consult') ?>
	<br/>
	<?= $model->body ?>
</div>
