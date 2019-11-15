<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/8/18
 * Time: 12:02 PM
 */

namespace frontend\widgets\megaMenu;

use common\modules\catalog\models\CatalogCategory;

class MegaMenu extends \yii\base\Widget
{
    public function run()
    {
        parent::run();
        $catalogRoot = CatalogCategory::findOne(54);
        $servicesRoot = CatalogCategory::findOne(55);
        $calculatorRoot = CatalogCategory::findOne(78);
        return $this->render('index', [
            'catalogRoot' => $catalogRoot,
            'servicesRoot' => $servicesRoot,
            'calculatorRoot' => $calculatorRoot,
        ]);
    }
}
