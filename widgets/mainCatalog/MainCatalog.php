<?php

namespace frontend\themes\retail\widgets\mainCatalog;

use common\modules\catalog\models\CatalogCategory;
use yii\data\ArrayDataProvider;
use yii\bootstrap\Tabs;
use yii\widgets\ListView;

class MainCatalog extends \yii\base\Widget
{
    public $root = null;
    /* @var int|null */
    public $limit = null;
    /* @var string */
    public $itemView = '@frontend/themes/retail/views/catalog/default/_view';
    /* @var array|null */
    public $options = ['class' => 'row'];
    /* @var array|null */
    public $itemOptions = ['class' => 'col-md-4 col-lg-4'];

    public function run()
    {
        parent::run();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $this->root->getChildren()->limit($this->limit)->all(),
            'pagination' => false,
        ]);
        return ListView::widget([
            'summary' => false,
            'dataProvider' => $dataProvider,
            'itemView' => $this->itemView,
            'options' => $this->options,
            'itemOptions' => $this->itemOptions,
        ]);
    }
}
