<div class="catalog-menu">
    <?php if ($categories = \common\modules\shop\models\ShopCategory::find()->roots()->one()->getChildren()->andWhere(['status' => 1])->all()): ?>
        <ul>
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
                                            <li>
                                                <a href="<?= $lvl3cat->present()->getUrl() ?>" class="slim-link"><?= $lvl3cat->name ?></a>
                                                <?php if ($lv4categories = $lvl3cat->getChildren()->andWhere(['status' => 1])->all()): ?>
                                                <ul>
                                                    <?php foreach ($lv4categories as $lvl4cat): ?>
                                                        <li>
                                                            <a href="<?= $lvl4cat->present()->getUrl() ?>" class="slim-link"><?= $lvl4cat->name ?></a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <?php endif; ?>
                                            </li>
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
    <?php endif; ?>
</div>
