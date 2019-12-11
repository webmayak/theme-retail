<?php

use common\models\IndexMenu;
use yii\web\View;

/* @var $this View */
/* @var $categories array */

$this->title = "Каталог";
$this->params['breadcrumbs'][] = $this->title;

?><div class="mainpage-category-holder">
    <h1><?=$this->title?></h1>
    <?php if ($categories): ?>
    <ul class="all-categories">
    <?php foreach ($categories as $category): ?>
        <li>
            <a href="<?=$category->present()->getUrl()?>"><?= $category->name ?></a>
            <?php if ($lvl2cats = $category->getChildren()->andWhere(['status' => 1])->all()): ?>
                <ul>
                <?php foreach ($lvl2cats as $lvl2cat): ?>
                    <li>
                        <a href="<?= $lvl2cat->present()->getUrl() ?>"><?= $lvl2cat->name ?></a>
                        <?php if ($lv3categories = $lvl2cat->getChildren()->andWhere(['status' => 1])->all()): ?>
                        <ul>
                            <?php foreach ($lv3categories as $lvl3cat): ?>
                                <li><a href="<?= $lvl3cat->present()->getUrl() ?>"><?= $lvl3cat->name ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </li>
    <?php endforeach;?>
    </ul>
    <?php else: ?>
        <p>Раздел в стадии наполнения</p>
    <?php endif; ?>
</div>
