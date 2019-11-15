<div class="fast-consult__block">
    <div class="row">
		<div class="col-md-4">
			<div class="fast-consult">
	    		<div class="fast-consult__icon">
					<img src="/images/icon-phone-bg.svg">
	    		</div>
	    		<div class="fast-consult__text">
	        		<div class="fast-consult__title">Быстрая консультация</div>
	        		<a href="tel:<?= preg_replace('/[^0-9\+]/', '', Yii::$app->contactsManager->get('phone_city')) ?>" class="fast-consult__phone"><?= Yii::$app->contactsManager->get('phone_city') ?></a>
	        	</div>
	        </div>
		</div>
		<div class="col-md-4">
			<div class="fast-consult">
	    		<div class="fast-consult__icon">
	    			<img src="/images/icon-wa.svg">
	    		</div>
	    		<div class="fast-consult__text">
	        		<div class="fast-consult__title">Ответим на все Ваши вопросы</div>
	        		<a href="<?= Yii::$app->contactsManager->get('social_whatsapp') ?>" class="fast-consult__phone"><?= Yii::$app->contactsManager->get('phone_mobile') ?></a>
	        	</div>
	        </div>
		</div>
		<div class="col-md-4">
			<div class="fast-consult__social-icons">
	    		<a href="<?= Yii::$app->contactsManager->get('social_facebook') ?>" target="_blank"><img src="/images/icon-fb.svg"></a>
	    		<a href="<?= Yii::$app->contactsManager->get('social_youtube') ?>" target="_blank"><img src="/images/icon-youtube.svg"></a>
	    		<a href="<?= Yii::$app->contactsManager->get('social_instagram') ?>" target="_blank"><img src="/images/icon-instagram.svg"></a>
	    		<a href="<?= Yii::$app->contactsManager->get('social_vkontakte') ?>" target="_blank"><img src="/images/icon-vk.svg"></a>
			</div>
		</div>
	</div>
</div>
