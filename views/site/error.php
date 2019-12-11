<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;

?><div class="error-page text-center">

	<h1>Упс! <?= $exception->statusCode . ' ' . Html::encode($message) ?>..</h1>
	
	<br/><br/>
    
    <p>Возможно запрашиваемая страница была перемещена по новому адресу в связи с обновлением сайта.</p>

    <p>В любом случае наши специалисты уже знают об этом и занимаются решением проблемы!</p>

    <br/>

    <a class="btn btn-lg btn-outline-primary" href="/">На главную страницу</a>
    &nbsp;
    <a class="btn btn-lg btn-success" href="/shop">Перейти в каталог</a>

</div>
