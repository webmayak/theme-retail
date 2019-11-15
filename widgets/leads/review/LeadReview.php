<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 2:37 PM
 */

namespace frontend\themes\retail\widgets\leads\review;

use pantera\leads\models\Lead;

class LeadReview extends Lead
{
    public $name;
    public $location;
    public $scheme;
    public $comment;

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['name', 'required'];
        $rules[] = ['location', 'required'];
        $rules[] = ['scheme', 'required'];
        $rules[] = ['comment', 'required'];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['name'] = 'Ваше имя';
        $labels['location'] = 'Ваша страна, город';
        $labels['scheme'] = 'Ваша схема лечения';
        $labels['comment'] = 'Ваш комментарий';
        return $labels;
    }
}
