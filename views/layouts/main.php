<?php

use common\widgets\Alert;
use yii\web\View;
use yii\widgets\Breadcrumbs;

/* @var $this View */
/* @var $content string */
?>
<?php $this->beginContent('@theme/views/layouts/default.php') ?>
<div class="container">
	<?php if (isset($this->params['breadcrumbs'])) : ?>
		<?= Breadcrumbs::widget([
		    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
		]) ?>
	<?php endif; ?>
	<?= Alert::widget() ?>
	<?= $content ?>
</div>
<?php $this->endContent() ?>
