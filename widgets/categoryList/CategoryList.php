<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/11/18
 * Time: 5:39 PM
 */

namespace frontend\themes\retail\widgets\categoryList;

use common\modules\catalog\models\CatalogCategory;
use yii\data\ArrayDataProvider;
use yii\widgets\ListView;

class CategoryList extends \yii\base\Widget
{
    /* @var CatalogCategory[] */
    public $models;
    /* @var false|array Настройки для пейджера */
    public $pagination = false;
    /* @var string */
    public $itemView = '_view';
    /* @var array|null */
    public $options = ['class' => 'category-list'];
    /* @var array|null */
    public $itemOptions = ['class' => 'category-list'];

    public function run()
    {
        parent::run();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $this->models,
            'totalCount' => count($this->models),
            'pagination' => $this->pagination,
        ]);
        if ($this->models) {
            return ListView::widget([
                'dataProvider' => $dataProvider,
                'summary' => false,
                'itemView' => $this->itemView,
                'options' => $this->options,
                'itemOptions' => $this->itemOptions,
            ]);
        }
    }
}
