<?php

namespace frontend\themes\retail\widgets\search;

class Search extends \yii\base\Widget
{
    public function run()
    {
        parent::run();
        return $this->render('index');
    }
}
