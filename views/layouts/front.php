<?php

use common\widgets\Alert;
use yii\web\View;

/* @var $this View */
/* @var $content string */
?>
<?php $this->beginContent('@theme/views/layouts/default.php') ?>
	<?= Alert::widget() ?>
	<?= $content ?>
<?php $this->endContent() ?>
