<?php

namespace frontend\themes\retail\widgets\shopProducts;

use common\modules\shop\models\ShopProductsSearchFrontend;
use yii\widgets\ListView;
use yii\helpers\ArrayHelper;
use Yii;

/**
 * Базовый виджет списка товаров,
 * напрямую не используется
 * 
 * @param int|array|null product_id
 * @param int|array|null category_id
 */
abstract class ProductsBaseList extends ListView
{
    /* var array */
    public $options = ['class' => 'products-list'];
    
    /* var string */
    public $itemView = '@frontend/themes/retail/widgets/shopProducts/views/_view';

    /* var int|array|null id товаров */
    public $product_id;

    /* var int|array|null id категории */
    public $category_id;

    /**
     * {@inheritdoc}
     */
    public function init() : void
    {
        $this->prepareDataProvider();
        parent::init();
    }

    /**
     * Если dataProvider не передан, то инициализируем его сами
     * @return void
     */
    private function prepareDataProvider() : void
    {
        if (!$this->dataProvider) {
            $searchModel = new ShopProductsSearchFrontend();
            $searchModel->category_id = $this->category_id;
            $this->dataProvider = $searchModel->search(ArrayHelper::merge(
                Yii::$app->request->queryParams,
                ['id' => $this->product_id]
            ));
            $this->dataProvider->pagination->defaultPageSize = 12;
            $this->dataProvider->pagination->pageParam = 'page';
        }
    }
}
