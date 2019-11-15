<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 11/1/18
 * Time: 12:22 PM
 */

namespace frontend\themes\retail\widgets\videoList;

use common\modules\catalog\models\CatalogCategory;
use yii\data\ArrayDataProvider;
use yii\widgets\ListView;

class VideoList extends \yii\base\Widget
{
    /* @var CatalogCategory */
    public $category;
    /* @var CatalogCategory[] */
    public $models;
    /* @var string */
    public $itemView = '@frontend/themes/retail/views/content/view/_video_view';
    /* @var string */
    public $layout = '<div class="row">{items}</div>{pager}';
    /* @var array|null */
    public $options = ['class' => 'list-view--content'];
    /* @var array|null */
    public $itemOptions = ['class' => 'col-md-6 col-lg-4 content-item'];

    public function run()
    {
        parent::run();
        if (empty($this->models)) {
            return null;
        }
        $dataProvider = new ArrayDataProvider([
            'allModels' => $this->models,
        ]);
        return ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => $this->itemView,
            'layout' => $this->layout,
            'options' => $this->options,
            'itemOptions' => $this->itemOptions,
            'pager' => [
                'class' => 'justinvoelker\separatedpager\LinkPager',
            ]
        ]);
    }

    public function init()
    {
        parent::init();
        if ($this->category && $this->category->childrenActive) {
            $this->models = $this->category->childrenActive;
        }
        VideoListAsset::register($this->view);
    }
}
