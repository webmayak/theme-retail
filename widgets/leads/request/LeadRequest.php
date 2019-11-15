<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 2:37 PM
 */

namespace frontend\widgets\leads\request;

use pantera\leads\models\Lead;

class LeadRequest extends Lead
{
    public $name;
    public $phone;

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['name', 'required'];
        $rules[] = ['phone', 'required'];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['name'] = 'Имя';
        $labels['phone'] = 'Телефон';
        return $labels;
    }
}
